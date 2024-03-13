<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index()
    {
        return view('biblioteca');
    }

    public function update(Request $request, $id)
    {
        // Lógica para atualizar um livro na biblioteca
    }
}
