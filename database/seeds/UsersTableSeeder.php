<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('users')->insert([ 
            'name' => 'uchimuro',
            'email' => 'uchimuro@test.com',
            'password' => bcrypt('uchimuropassword'),
            'language' => 'PHP',
            'image' => 'uchimuro.jpg',
            'role' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 


        DB::table('users')->insert([ 
            'name' => 'nagatomo',
            'email' => 'nagatomo@test.com',
            'password' => bcrypt('nagatomopassword'),
            'language' => 'PHP',
            'image' => 'nagatomo.jpg',
            'role' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 

        DB::table('users')->insert([ 
            'name' => 'satou',
            'email' => 'satou@test.com',
            'password' => bcrypt('satoupassword'),
            'language' => 'PHP',
            'image' => 'satou.jpg',
            'role' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 

        DB::table('users')->insert([ 
            'name' => 'kawai',
            'email' => 'kawai@test.com',
            'password' => bcrypt('kawaipassword'),
            'language' => 'JAVA',
            'image' => 'kawai.jpg',
            'role' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 

        DB::table('users')->insert([ 
            'name' => 'shiraisi',
            'email' => 'shiraisi@test.com',
            'password' => bcrypt('shiraisipassword'),
            'language' => 'PHP',
            'image' => 'shiraisi.jpg',
            'role' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 

        DB::table('users')->insert([ 
            'name' => 'kunimatu',
            'email' => 'kunimatu@test.com',
            'password' => bcrypt('kunimatupassword'),
            'language' => 'PHP',
            'image' => 'kunimatu.jpg',
            'role' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 

        DB::table('users')->insert([ 
            'name' => 'nisimura',
            'email' => 'nisimura@test.com',
            'password' => bcrypt('nisimurapassword'),
            'language' => 'JAVA',
            'image' => 'nisimura.jpg',
            'role' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 

        DB::table('users')->insert([ 
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => bcrypt('userpassword'),
            'language' => 'JAVA',
            'image' => 'user.jpg',
            'role' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 



    }
}
