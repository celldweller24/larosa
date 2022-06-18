<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'title' => 'men'
            ],
            [
                'title' => 'woman'
            ],
            [
                'title' => 'couple'
            ],
            [
                'title' => 'gay'
            ],
        ]);   
    }
}
