<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Project::factory(3)->create();
        Project::factory(3)->create();

        User::create(
            [
                'name' => config('app.admin.name'),
                'email' => config('app.admin.name'),
                'password' => Hash::make(config('app.admin.password')),
            ]
        );
    }
}
