<?php

namespace App\Http\Controllers;

use App\Events\apointmentSubmitted;
use App\Http\Requests\StoreApointmentRequest;
use App\Http\Requests\UpdateApointmentRequest;
use App\Models\Apointment;
use App\Models\User;

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
            'doctor_id'=>$request->doctor_id,
            'prefared_date'=>$request->prefared_date,
            'description'=>$request->description,
            'patient_name'=>$request->patient_name
        ];



        //create the apointment

        Apointment::create($apointment);

         //send an event that the assigment is created
         $user = User::find($request->user_id);
         $doctor = User::find($request->doctor_id);
         event(new apointmentSubmitted($user,$doctor,$apointment));
         //return the reponse
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
    public function Aprove(UpdateApointmentRequest $request, Apointment $apointment,$id)
    {
     $apointment= $apointment->find($id);
     $apointment->update([
        "status"=>true
     ]);
     $apointment->save();

     return response()->json([
        "message"=>"apointment aproved"
     ]);

    }


    /**
     * decline the apointment.
     */

    public function decline(UpdateApointmentRequest $request, Apointment $apointment,$id)
    {
        $apointment= $apointment->find($id);
        $apointment->update([
           "status"=>false
        ]);
        $apointment->save();

     return response()->json([
        "message"=>"apointment declined"
     ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apointment $apointment,$id)
    {
    $apointment=$apointment->find($id);
    $apointment->delete();

    return response()->json([
        "message"=>"apointment deleted"
    ]);

    }
}
