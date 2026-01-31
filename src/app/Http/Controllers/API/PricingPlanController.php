<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingPlanController extends Controller
{
    public function index()
    {
        return response()->json(PricingPlan::where('is_active', true)->get());
    }

    public function show(PricingPlan $pricingPlan)
    {
        return response()->json($pricingPlan);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pricing_plans,slug',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'interval' => 'required|string',
            'features' => 'nullable|array',
            'is_active' => 'boolean',
        ]);

        $plan = PricingPlan::create($data);

        return response()->json($plan, 201);
    }

    public function update(Request $request, PricingPlan $pricingPlan)
    {
        $data = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'slug' => 'sometimes|required|string|max:255|unique:pricing_plans,slug,' . $pricingPlan->id,
            'description' => 'nullable|string',
            'price' => 'sometimes|required|numeric|min:0',
            'interval' => 'sometimes|required|string',
            'features' => 'nullable|array',
            'is_active' => 'boolean',
        ]);

        $pricingPlan->update($data);

        return response()->json($pricingPlan);
    }

    public function destroy(PricingPlan $pricingPlan)
    {
        $pricingPlan->delete();
        return response()->json(null, 204);
    }
}
