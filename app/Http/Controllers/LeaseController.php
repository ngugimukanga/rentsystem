<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeaseRequest;
use App\Http\Resources\LeaseResource;
use App\Lease;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LeaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LeaseResource::collection(Lease::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeaseRequest $request)
    {
        $lease = new Lease;

        $lease->tenant_id = $request->tenant_id;
        $lease->unit_id = $request->unit_id;
        $lease->from = $request->from;
        $lease->to = $request->to;

        $lease->save();

        return response([
            'data'=> new LeaseResource($lease)
        ],  Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function show(Lease $lease)
    {
        return new LeaseResource($lease);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lease $lease)
    {
        $lease->update($request->all());
        return response()->json([
            'success'=> true,
            'data'=> 'Lease details updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lease $lease)
    {
        $lease->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
