<?php

namespace Database\Seeders;

// BibliotecaSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Biblioteca;
use Illuminate\Support\Facades\DB;

class BibliotecaSeeder extends Seeder
{
    public function run()
    {
        DB::table('bibliotecas')->insert([
            'title' => 'Título do Livro',
            'author_publisher' => 'Autor ou Editora do Livro',
            'publication_date' => '2020-01-01',
            'genre_type' => 'Gênero do Livro',
            'available_copies' => 10,
        ]);
    }
}