<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            [
                'title' => 'Notes 1',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Notes 2',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Notes 3',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Notes 4',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Notes 5',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Notes 6',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Notes 7',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Notes 8',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Notes 9',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Notes 10',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Notes 11',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Notes 12',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptates cum quibusdam dignissimos commodi sit officia dolorum suscipit neque harum, assumenda, minima porro, atque libero non voluptatem sequi. Esse totam ad inventore distinctio quasi est minima officia voluptas, beatae dolorem sunt iusto, mollitia, aliquam dolor dolore repellat id odit. Officiis, est deleniti. Culpa id, voluptas deleniti vel ducimus a, adipisci dicta veniam repellendus illum, hic corporis excepturi expedita! Blanditiis molestiae adipisci, doloremque ullam ex natus velit quasi aperiam nostrum. Impedit?',
                'idKategori' => rand(1,4),
                'image' => 'images/' . rand(1, 3) . '.png',               
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
