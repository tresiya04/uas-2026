<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PricingPlanController;

Route::apiResource('pricing-plans', PricingPlanController::class);
