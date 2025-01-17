<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApointmentRequest;
use App\Http\Requests\UpdateApointmentRequest;
use App\Models\Apointment;

class ApointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apointments = Apointment::all();

        return response()->json($apointments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApointmentRequest $request)
    {
        $apointment = [
            'user_id'=>$request->user_id,
            'prefared_date'=>$request->prefared_date,
            'description'=>$request->description,
            'patient_name'=>$request->patient_name
        ];

        //create the apointment

        Apointment::create($apointment);
        return response()->json([
            "message"=>"apointment created"
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Apointment $apointment,$id)
    {

        $apointment = $apointment->find($id);

        return response()->json($apointment);


    }

    /**
     * Update the specified resource in storage.
     */
    public function AproveApointment(UpdateApointmentRequest $request, Apointment $apointment,$id)
    {
     $apointment->find($id)->status=true;
     $apointment->save();

     return response()->json([
        "message"=>"apointment aproved"
     ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apointment $apointment)
    {
        //
    }
}
