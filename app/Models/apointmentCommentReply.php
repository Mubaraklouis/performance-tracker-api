<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apointmentCommentReply extends Model
{
    protected $fillable =['apointment_comment_id','user_id','reply'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    /** @use HasFactory<\Database\Factories\ApointmentCommentReplyFactory> */
    use HasFactory;
}
