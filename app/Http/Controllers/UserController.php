<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index()
    {
        $data = [
            'title' => "Data Users",
            'user' => User::all()
        ];

        return view('backend.users.index', compact('data'));
    }
}
