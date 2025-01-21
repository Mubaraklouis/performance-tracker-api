<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecatOneRequest;
use App\Http\Requests\UpdatecatOneRequest;
use App\Models\catOne;

class CatOneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecatOneRequest $request)
    {
      
    }

    /**
     * Display the specified resource.
     */
    public function show(catOne $catOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecatOneRequest $request, catOne $catOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catOne $catOne)
    {
        //
    }
}
