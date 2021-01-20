<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//追記

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('items')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('items')->insert([
            'name' => 'フィルムカメラ',
            'point' => '10',
            'stock' => 2,
            'content' => 'test',
            'image' => 'filmcamera.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'スイッチ',
            'point' => '30',
            'stock' => 5,
            'content' => 'test',
            'image' => 'switch.jpg',
        ]);

        DB::table('items')->insert([
            'name' => 'PS5',
            'point' => '３0',
            'stock' => 8,
            'content' => 'test',
            'image' => 'ps5.jpg',
        ]);

        DB::table('items')->insert([
            'name' => '車',
            'point' => '100',
            'stock' => 4,
            'content' => 'test',
            'image' => 'car.jpg',
        ]);

        Model::reguard();

    }
}
