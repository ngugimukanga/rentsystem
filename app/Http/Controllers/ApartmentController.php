<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Http\Requests\ApartmentRequest;
use App\Http\Resources\ApartmentResource;
use App\Landlord;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class ApartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ApartmentResource::collection(Apartment::with('landlord:id,name')->get());
//            ['parentable'=> function(MorphTo $morphTo){
//            $morphTo->morphWith([
//                Landlord::class => ['']
//            ])
//        }]));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApartmentRequest $request)
    {
        $apartment = new Apartment;

        $apartment->name = $request->name;
        $apartment->address = $request->address;
        $apartment->landlord_id = $request->landlord_id;
        $apartment->type = $request->type;
        $apartment->description = $request->description;

        $apartment->save();

        return response([
           'data' => new ApartmentResource($apartment)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        return new ApartmentResource($apartment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
      $apartment->update($request->all());
        return response()->json([
                'success'=> true,
                'data'=> 'Apartment details updated successfully'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        $apartment = Apartment::find($apartment->id);
        $apartment->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }


//    public function fetchLandlord(){
//        $landlords = DB::table('apartments')
//            ->join('landlords', 'apartments.landlord_id', '=', 'landlords.id')
//            ->select('landlords.name as landlord_name', 'apartments.*')
//            ->get();
//        return response()->json($landlords);
//    }
}
