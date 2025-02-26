<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users()
    {
        $users = [
            [
                'name' => 'users1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'users2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'users3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'users4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'users5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ];

        return view('users', ['users' => $users]);
    }
}
