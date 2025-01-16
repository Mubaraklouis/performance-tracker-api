<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAllassigmentRequest;
use App\Http\Requests\UpdateAllassigmentRequest;
use App\Models\Allassigment;

class AllassigmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allAssigments()
    {

        //return all the assigments from the database
      return Allassigment::all();


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAllassigmentRequest $request)
    {
        //add an assigment to the all the assiments table

    }

    /**
     * Display the specified resource.
     */
    public function show(Allassigment $allassigment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAllassigmentRequest $request, Allassigment $allassigment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Allassigment $allassigment)
    {
        //
    }
}
