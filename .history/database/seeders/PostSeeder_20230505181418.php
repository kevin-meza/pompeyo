<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('posteos')->insert([
            'id_user' => int::random(2),
            'imagen' => 'images.jpg',
            'descripcion' => Str::random('password'),
        ]);
    }
}
