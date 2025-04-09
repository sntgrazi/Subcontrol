<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

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
        // Tenta pegar o token do cookie
        $token = $request->cookie('token');

        if (!$token) {
            return response()->json(['error' => 'Token não encontrado'], 401);
        }

        // Atribui o token ao JWTAuth
        JWTAuth::setToken($token);

        // Tenta autenticar o usuário com o token
        $user = JWTAuth::authenticate();

        if (!$user) {
            return response()->json(['error' => 'Usuário não autenticado'], 401);
        }

        // Restante da lógica para criar o plano
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'unitDuration' => 'required|in:dias,meses',
            'status' => 'required|in:active,inactive',
            'features' => 'nullable|array',
        ]);

        $validated['user_id'] = $user->id;
        $plan = Plan::create($validated);

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
