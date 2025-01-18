<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apointment extends Model
{
    /** @use HasFactory<\Database\Factories\ApointmentFactory> */
    use HasFactory;

    protected $fillable =[
       'user_id',
       'doctor_id',
       'status',
       'prefared_date',
       'description',
       'patient_name'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

           /**
     *  create one to many relation between user and comments
     *
     */

     public function apointmentComments(){
        return $this->hasMany(ApointmentComment::class);
    }


}
