<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $name = $request->query('name');
        $age = $request->query('age');

        if (empty($name) || empty($age)) {
            return response()->json([
                'error' => 'Параметры name и age обязательны.'
            ], 422);
        }

        return response()->json([
            'message' => "Привет, $name! Тебе $age лет."
        ], 200);
    }
}
