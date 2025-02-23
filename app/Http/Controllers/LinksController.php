<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function links()
{
    $links = [
        [
            'text' => 'text1',
            'href' => 'http://href1',
        ],
        [
            'text' => 'text2',
            'href' => 'http://href2',
        ],
        [
            'text' => 'text3',
            'href' => 'http://href3',
        ],
    ];

    return view('links', ['links' => $links]);
}
}
