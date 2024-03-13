<?php

namespace Database\Seeders;

// PostSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('post')->insert([
            'post_title' => 'Título do Post',
            'author' => 'Autor do Post',
            'publication_date' => '2022-01-01',
            'content' => 'Conteúdo do Post',
            'tags' => 'tag1, tag2, tag3',
        ]);
    }
}