<?php

namespace Database\Seeders;

use App\Models\PricingPlan;
use Illuminate\Database\Seeder;

class PricingPlanSeeder extends Seeder
{
    public function run(): void
    {
        PricingPlan::factory()->count(4)->create();

        // Optionally create specific named plans
        PricingPlan::updateOrCreate(
            ['slug' => 'free-plan'],
            [
                'name' => 'Free Plan',
                'description' => 'Basic access with limited features',
                'price' => 0.00,
                'interval' => 'monthly',
                'features' => ['1 project', 'Community support'],
                'is_active' => true,
            ]
        );
    }
}
