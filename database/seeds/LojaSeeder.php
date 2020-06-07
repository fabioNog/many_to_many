<?php

use Illuminate\Database\Seeder;

class LojaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lojas')->insert([
            'nome' =>'Camiseta Polo',
            'estoque' => 2.4,
            'preco'=> 30,
            'central_id' => 1
        ]);
        DB::table('lojas')->insert([
            'nome' =>'Notebook',
            'estoque' => 2.6,
            'preco'=> 80,
            'central_id' => 3
        ]);
    }
}
