<?php

namespace App\Http\Controllers;

use App\Http\Requests\LandlordRequest;
use App\Http\Resources\LandlordResource;
use App\Landlord;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LandlordController extends Controller
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
        return LandlordResource::collection(Landlord::all()->load('apartments'));
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
    public function store(LandlordRequest $request)
    {

        $landlord = new Landlord;

        $landlord->name = $request->name;
        $landlord->email = $request->email;
        $landlord->password = $request->password;
        $landlord->phone = $request->phone;
        $landlord->account_number = $request->account_number;

        $landlord->save();
        return response([
            'data'=> new LandlordResource($landlord)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function show(Landlord $landlord)
    {
        return new LandlordResource($landlord);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function update(LandlordRequest $request, Landlord $landlord)
    {
        $landlord->update($request->all());
        return response()->json([
                'success'=> true,
                'data'=> 'Landlord details updated successfully'
            ]);


//        $landlord = Landlord::find($request->id);

//        if (!$landlord){
//            return response()->json([
//                'success'=>false,
//                'data'=> 'Landlord Not Found'
//            ]);
//        }else
//        $landlordUpdate = $landlord->fill($request->all())->save();
//
//        if($landlordUpdate){
//            return response()->json([
//                'success'=> true,
//                'data'=> 'Landlord details updated successfully'
//            ]);
//        }else
//            return response()->json([
//                'success'=> false,
//                'data' => 'Landlord details not updated!'
//            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landlord $landlord)
    {
        $landlord->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
