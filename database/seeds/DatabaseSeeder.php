<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(ItemTableSeeder::class); //追記 
        
        DB::table('items')->truncate();
        $this->call('ItemTableSeeder');
        Model::reguard();
    }
}
