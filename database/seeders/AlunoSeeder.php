<?php

namespace Database\Seeders;

// AlunoSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Aluno;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    public function run()
    {
        DB::table('alunos')->insert([
            'name' => 'Nome do Aluno',
            'date_of_birth' => '2000-01-01',
            'email' => 'aluno@example.com',
            'registration_number' => '123456',
            'class_course' => 'Curso do Aluno',
        ]);
    }
}