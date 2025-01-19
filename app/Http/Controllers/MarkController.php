<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarkRequest;
use App\Http\Requests\UpdateMarkRequest;
use App\Models\Mark;

class MarkController extends Controller
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
    public function store(StoreMarkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mark $mark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMarkRequest $request, Mark $mark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mark $mark)
    {
        //
    }
}
