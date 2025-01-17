<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApointmentComment extends Model
{
    /** @use HasFactory<\Database\Factories\ApointmentCommentFactory> */
    use HasFactory;
    protected $fillable =['user_id','apointment_id','comment'];

    public function apointment(){
        return $this->belongsTo(Apointment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);

    }

    public function apointmentCommentsReplies(){
        return $this->hasMany(apointmentCommentReply::class);
    }
}
