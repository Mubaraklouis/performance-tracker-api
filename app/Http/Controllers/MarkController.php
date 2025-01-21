<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarkRequest;
use App\Http\Requests\UpdateMarkRequest;
use App\Models\Mark;
use App\Models\User;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function gradeCatOne(Request $request)
    {
        $user = User::find($request->user_id);

        $initial_marks=$user->marks->where('course_id',$request->course_id)->first()->catOne;
        $marks =$request->cat_one+intval($initial_marks);



        $user->marks->where('course_id',$request->course_id)->first()->update([
            "catOne"=>$marks
        ]);


        return response()->json([
            "message"=>"marks added"
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMarkRequest $request)
    {
        $user = User::find($request->user_id);
        $cat_one = 0;

        $total = $cat_one + $request->catTwo + $request->fat;
        $marks = [
            'user_id'=>$request->user_id,
            'course_id'=>$request->course_id,
            'course_name'=>$request->course_name,
            'catOne'=>$cat_one,
             'catTwo'=>$request->catTwo,
             'fat'=>$request->fat,
             'total'=>$total

        ];

        Mark::create($marks);
        return response()->json([
            "message"=>"your marks are saved"
        ]);
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
    public function update(UpdateMarkRequest $request, Mark $mark,$id)
    {
        $mark = $mark->find($id);
        $mark->update($request->all());

        return response()->json(
            ["message"=>"marks updated successfully"]
        );


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mark $mark)
    {
        //
    }
}
