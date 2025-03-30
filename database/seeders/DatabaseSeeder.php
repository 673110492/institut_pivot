<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Coupon;
use App\Models\Destination;
use App\Models\Notification;
use App\Models\Payment;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->create();
        Destination::factory(5)->create();
        Ticket::factory(20)->create();
        Reservation::factory(15)->create();
        Payment::factory(10)->create();
        Review::factory(30)->create();
        Notification::factory(50)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
