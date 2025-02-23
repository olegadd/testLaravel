<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show($name, $surname)
    {
        return view('post.test', ['name' => $name, 'surname' => $surname]);
    }
}
