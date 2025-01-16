<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allassigment extends Model
{
    protected $fillable =[
        "title",
        "module",
        "dateline",
        "file"
    ];
    /** @use HasFactory<\Database\Factories\AllassigmentFactory> */
    use HasFactory;
}
