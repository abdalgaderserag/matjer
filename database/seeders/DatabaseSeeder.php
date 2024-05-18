<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Order;
use App\Models\User;
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
         Item::factory(25)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'type' => 1,
        ]);

        Order::factory()->create([
            'user_id' => 1,
            'items' => [0, 1, 3],
        ]);
    }
}
