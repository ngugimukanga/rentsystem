<?php

namespace App\Http\Controllers;

use App\Http\Resources\LanlordResource;
use App\Landlord;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LandlordResource::collection(Landlord::all);
//        return response()->json([
//            'landlords'=> $landlords
//        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function show(Landlord $landlord)
    {
        return new LanlordResource($landlord);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Landlord $landlord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landlord $landlord)
    {
        //
    }
}
