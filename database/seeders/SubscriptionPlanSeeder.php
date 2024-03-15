<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubscriptionPlan::create([
            "name" => "Workout Monthly Plan",
            "amount" => 20.00,
            "price_id" => "price_1OtNqPBO98PmTmqbWhA7J3Yl"
        ]);

    }
}
