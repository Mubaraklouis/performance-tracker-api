<?php

namespace Database\Seeders;

use App\Models\Apointment;
use App\Models\ApointmentComment;
use App\Models\apointmentCommentReply;
use App\Models\Assigment;
use App\Models\Course;
use App\Models\Doctor;
use App\Models\Mark;
use App\Models\Role;
use App\Models\User;
use Database\Factories\RoleFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::factory()->create(
            [
                "title"=>"teacher",
            ]
        );
        Role::factory()->create(
            [
                "title"=>"doctor",
            ]
        );

        Role::factory()->create(
            [
                "title"=>"admin",
            ]
        );
        Course::factory(10)->create();
        Assigment::factory(10)->create();
        Doctor::factory(10)->create();
        // Apointment::factory(10)->create();
        ApointmentComment::factory(10)->create();
        // apointmentCommentReply::factory(3)->create();
        Mark::factory(10)->create();



        //default user
        User::factory()->create([
            "firstName"=>"Dr. 2 pac",
            "lastName"=>"Atwok",
            "email"=>"adwok@doctor.com",
            "password"=>"12345678",
            "phone"=>"07924667725",
            "specialization"=>"Eye Doctor",
            "hospital"=>"Juba Teacher",
            "bio"=>"am upcoming doctor to improve the world",
        ]);



           //default user
           User::factory()->create([
            "firstName"=>"Mubarak",
            "lastName"=>"Louis",
            "email"=>"mubarak@student.com",
            "password"=>"12345678",
            "phone"=>"07924667725",
            "specialization"=>"normal student",
            "hospital"=>"Juba Teacher",
            "bio"=>"am upcoming doctor to improve the world",
        ]);

             //default user
             User::factory()->create([
                "firstName"=>"Tr.Oplona",
                "lastName"=>"James",
                "email"=>"oplano@teacher.com",
                "password"=>"12345678",
                "phone"=>"07924667725",
                "specialization"=>"experiecne teacher",
                "hospital"=>"Juba Teacher",
                "bio"=>"am upcoming doctor to improve the world",
            ]);

               //default user
        User::factory()->create([
            "firstName"=>"Dr. Abdallah",
            "lastName"=>"Aleer",
            "email"=>"abdallah@doctor.com",
            "password"=>"12345678",
            "phone"=>"07924667725",
            "specialization"=>"Physiology",
            "hospital"=>"Juba Teacher",
            "bio"=>"Incase of any new signing your your football team or basketball team i can examine them",
        ]);

            User::factory(10)->create();

            $user1= User::find(1);
            // $role1 = Role::find(1);

            $user1->roles()->attach(2);


            $user3 = User::find(3);
            // $role2 = Role::find(2);

            $user3->roles()->attach(1);
            $user4=User::find(4);
            $user4->roles()->attach(2);
    }
}
