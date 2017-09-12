<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //加入用户资料
        DB::table('users')->insert([
                'name'=>'ceshi',
                'password'=>'$2y$10$6UY1DxKoO8xdhusl4rdOTO2v2x9SXSj0E3HhATbp3n4gK1ffoVeRO',
            ]);     
    }
}
