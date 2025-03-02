<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('content')->insert([
            'content1' => 'Content 1',
            'content2' => 'Content 2',
            'content3' => 'Content 3',
        ]);
    }
}
