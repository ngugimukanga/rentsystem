<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Http\Resources\PaymentResource;
use App\Payment;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }

    public function index()
    {
        //return Payment::all();
        return PaymentResource::collection(Payment::all());
    }

    public function store(PaymentRequest $request)
    {
        $payment = new Payment;

        $payment->unit_id = $request->unit_id;
        $payment->tenant_id = $request->tenant_id;
        $payment->month = $request->month;
        $payment->paid_amount = $request->paid_amount;
        $payment->balance = $request->balance;

        $payment->save();

        return response([
            'data'=> new PaymentResource($payment)
        ], Response::HTTP_CREATED);
    }

    public function show(Payment $payment)
    {
        //return $payment;
        return new PaymentResource($payment);
    }


    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());
        return response()->json([
            'success'=> true,
            'data'=> 'Payment details updated successfully'
        ]);
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
