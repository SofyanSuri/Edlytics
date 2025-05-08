<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed Admin
        Admin::firstOrCreate(
            ['username' => 'admin'],
            [
                'username' => 'admin',
                'password' => Hash::make('admin')
            ]
        );

        // Seed Students
        $this->call([
            StudentSeeder::class,
        ]);
    }
}