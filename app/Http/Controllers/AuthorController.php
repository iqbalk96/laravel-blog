<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(User $user)
    {
        return view('posts', [
            'title' => "Author by : $user->name",
            'posts' => $user->posts->load('category', 'user')
        ]);
    }
}
