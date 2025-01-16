<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssigmentRequest;
use App\Http\Requests\UpdateAssigmentRequest;
use App\Models\Allassigment;
use App\Models\Assigment;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AssigmentController extends Controller
{

    /**
     * Display all the assigments of a user for a specific course.
     */

     public function userAssigments($course_id){
        $assigments = Course::find($course_id)->assigments;
        return $assigments;
     }

       /**
        * submits the assigment to of the user by making the stutus to true.

     */

     public function submitAssigment( Request $request,$assigment_id){
        $assigment = Assigment::find($assigment_id);

        //get the file
        $filePath = $request->file('file')->store('uploaded_files', 'public');





        $assigment = Assigment::find($assigment_id);

        //update the status of the assigment and upload the file
        $assigment->status=true;
        $assigment->file =Storage::disk('public')->url($filePath);
        // $assigment_id->file=Storage::disk('public')->url($filePath);

        $assigment->save();

     }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assigments = Assigment::all();
        return $assigments;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssigmentRequest $request)
    {
        $assigment = [
            "course_id"=>$request->course_id,
            "title"=>$request->title,
            "marksObtain"=>$request->marksObtain,
            "totalMarks"=>$request->totalMarks

        ];



        Assigment::create($assigment);

        $assigment_info = Assigment::where('title', $request->title)->first();




// Current timestamp
$currentTimestamp = Carbon::now();

// Add 3 days to the current timestamp
$deadline = $currentTimestamp->addDays(3);

         //find the course name using the id
         $module = Course::find($request->course_id)->title;
         //store the course in all course table

        $assiments_db = [
            "module" =>$module,
            "title"=>$request->title,
            "dateline"=>$deadline,
            "file" =>$assigment_info->file

           ];
           Allassigment::create($assiments_db);
        return [
            "message"=>"assigment created"
        ];


    }

    /**
     * Display the specified resource.
     */
    public function show(Assigment $assigment)
    {
        return $assigment;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssigmentRequest $request,$id)
    {
        $assigment = Assigment::find($id);
        $assigment->update($request->all());
        return [
            "message"=>"assigment updated"
        ];

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $assigment = Assigment::find($id);
        $assigment->delete();

        return [
            "message"=>"assigment deleted"
        ];

    }
}
