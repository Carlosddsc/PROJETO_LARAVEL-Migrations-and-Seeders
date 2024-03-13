<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return view('aluno');
    }

    public function update(Request $request, $id)
    {
        // Lógica para atualizar um aluno
    }
}
