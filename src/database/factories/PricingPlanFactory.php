<?php

namespace Database\Factories;

use App\Models\PricingPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PricingPlanFactory extends Factory
{
    protected $model = PricingPlan::class;

    public function definition()
    {
        $intervals = ['monthly', 'yearly'];
        $name = $this->faker->unique()->word() . ' plan';

        return [
            'name' => ucfirst($name),
            'slug' => \Str::slug($name),
            'description' => $this->faker->sentence(12),
            'price' => $this->faker->randomFloat(2, 0, 199),
            'interval' => $this->faker->randomElement($intervals),
            'features' => [
                $this->faker->sentence(3),
                $this->faker->sentence(4),
                $this->faker->sentence(5),
            ],
            'is_active' => $this->faker->boolean(90),
        ];
    }
}
