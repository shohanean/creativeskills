<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        // \App\Models\User::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name' => 'Masum Billah',
            'email' => 'masum.cit.bd@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
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
