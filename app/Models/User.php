<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    use InteractsWithMedia;


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'firstName',
        'email',
        'password',
        'lastName',
        'phone',
        'rollNumber',
         'avater',
         'bio',
         'hospital'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */


       /**
     *  Create many to many relationship to attach the user to role
     *
     */
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
       /**
     *  Create many to many relationship to attach the user to doctor
     *
     */
    public function doctor(){
     return $this->belongsTo(Doctor::class);
    }



       /**
     *  create one to many relation between user
     *
     */

    public function courses(){
        return $this->belongsToMany(Course::class);
       }



       /**
     *  create one to many relation between user and apointments
     *
     */

     public function apointments(){
        return $this->hasMany(Apointment::class);
       }



public function apointmentComments(){
    return $this->hasMany(ApointmentComment::class);
}

public function apointmentCommentsReplies(){
    return $this->hasMany(apointmentCommentReply::class);
}


//get all the marks of the user

public function marks(){
    return$this->hasMany(Mark::class);
}

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
