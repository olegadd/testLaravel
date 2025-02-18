<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show($id)
    {
        return 'post' . $id;
    }
}
