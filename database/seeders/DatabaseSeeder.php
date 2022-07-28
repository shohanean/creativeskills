<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('courses')->insert([
            'course_name' => 'Graphic Design',
            'created_at' => Carbon::now()
        ]);
        DB::table('courses')->insert([
            'course_name' => 'Web Design',
            'created_at' => Carbon::now()
        ]);
        DB::table('courses')->insert([
            'course_name' => 'Digital Marketing',
            'created_at' => Carbon::now()
        ]);
    }
}
