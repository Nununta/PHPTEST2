<?php

use Illuminate\Database\Seeder;
use App\Models\Item;

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
        DB::table('items')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    
         DB::table('items')->insert([
             'name' => '一眼レフカメラ',
             'point' => 20,
             'stock' => 3,
             'content' => 'ブレない高性能カメラ',
             'image' => 'camera.jpg',
             'created_at' => new DateTime(),
             'updated_at' => new DateTime(),
         ]);

        DB::table('items')->insert([
            'name' => 'スイッチ',
            'point' => 50,
            'stock' => 5,
            'content' => '大人気！任天堂Switch',
            'image' => 'switch.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('items')->insert([
            'name' => 'ダイソン',
            'point' => 40,
            'stock' => 3,
            'content' => '吸引力が変わらないただ一つの掃除機',
            'image' => 'daison.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('items')->insert([
            'name' => 'PS5',
            'point' => 50,
            'stock' => 3,
            'content' => '究極のグラフィック！ゲーマにはたまらない一品',
            'image' => 'PS5.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('items')->insert([
            'name' => 'すき焼きセット',
            'point' => 20,
            'stock' => 3,
            'content' => '自宅ですき焼きするならこれ！',
            'image' => 'sukiyaki.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('items')->insert([
            'name' => '蟹鍋セット',
            'point' => 20,
            'stock' => 3,
            'content' => '自宅で蟹鍋するならこれ！',
            'image' => 'kaninabe.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('items')->insert([
            'name' => '焼肉セット',
            'point' => 20,
            'stock' => 3,
            'content' => '自宅で焼肉するならこれ！',
            'image' => 'kaninabe.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('items')->insert([
            'name' => '水',
            'point' => 1,
            'stock' => 50,
            'content' => '飲料水',
            'image' => 'mizu.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('items')->insert([
            'name' => 'お茶',
            'point' => 1,
            'stock' => 50,
            'content' => '伊右衛門茶',
            'image' => 'iemon.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('items')->insert([
            'name' => 'コーラ',
            'point' => 1,
            'stock' => 50,
            'content' => 'コカ・コーラ',
            'image' => 'kora.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('items')->insert([
            'name' => '山崎ハイボール',
            'point' => 20,
            'stock' => 5,
            'content' => '700ml×1 12年物',
            'image' => 'yamazaki.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('items')->insert([
            'name' => '缶詰おつまみセット',
            'point' => 5,
            'stock' => 10,
            'content' => 'ブリ、いか明太、ホタルイカ、ぼんじり、赤貝、和風サーディン',
            'image' => 'kandume.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);





      

 
     }
}
