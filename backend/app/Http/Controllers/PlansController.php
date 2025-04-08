<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Plan;

class PlansController extends Controller
{
    
    public function index()
    {
        $plans = Plan::all();
        return response()->json($plans);
    }

    public function show($id)
    {
        $plan = Plan::find($id);
        return response()->json($plan);

    }

    public function create(Request $request)
    {
        $plan = Plan::create($request->all());
        return response()->json($plan);
    }

    public function update(Request $request, $id)
    {
        $plan = Plan::find($id);
        $plan->update($request->all());
        return response()->json($plan);
    }
    
    public function destroy($id)
    {
        $plan = Plan::find($id);
        $plan->delete();
        return response()->json($plan);
    }
    
}
