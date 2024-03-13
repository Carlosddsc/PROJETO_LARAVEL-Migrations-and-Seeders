<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post');
    }

    public function update(Request $request, $id)
    {
        // Lógica para atualizar um post
    }
}