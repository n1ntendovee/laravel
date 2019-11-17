<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class imagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert(
            [
                'url' => '/images/user1.png',
                'filename' => 'public/images/user1.png'
            ],
            [
                'url' => '/images/user2.png',
                'filename' => 'public/images/user2.png'
            ],
            [
                'url' => '/images/user3.png',
                'filename' => 'public/images/user3.png'
            ]
        );
    }
}
