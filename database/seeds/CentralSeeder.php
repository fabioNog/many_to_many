<?php

use Illuminate\Database\Seeder;

class CentralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('centrals')->insert(['nome' =>'Vestuario']);
         DB::table('centrals')->insert(['nome' =>'Eletronicos']);
         DB::table('centrals')->insert(['nome' =>'Informatica']);
         DB::table('centrals')->insert(['nome' =>'CamaMesa']);

    }
}
