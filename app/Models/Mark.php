<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable =[
        'course_id',
        'user_id',
        'catOne',
        'catTwo',
        'fat',
        'total'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function courses(){
        return $this->belongsTo(Course::class);
    }

    /** @use HasFactory<\Database\Factories\MarkFactory> */
    use HasFactory;
}
