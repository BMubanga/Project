<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::All();

        $users->each(function($users) {

            $course= factory(Course::class)->make();
            $users->courses()->save($course);


        });
    }
}
