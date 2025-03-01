<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DarkThemeController extends Controller
{
    public function show(Request $request)
    {
        $theme = $request->json('settings.theme');

        return response()->json([
            'selected_theme' => $theme,
        ], 200);
    }
}
