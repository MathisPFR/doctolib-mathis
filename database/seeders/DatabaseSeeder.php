<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\User;
use Database\Factories\AppointmentFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'admin'
        ]);
        
        Appointment::factory(10)->create();
       
    }
}
