<?php

use Illuminate\Database\Seeder;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desenvolvedores')->insert(['nome' => 'Paulo','cargo' => 'Desenvolvedor Senior']);
        DB::table('desenvolvedores')->insert(['nome' => 'Pedro','cargo' => 'Desenvolvedor Junior']);
        DB::table('desenvolvedores')->insert(['nome' => 'Carlos','cargo' => 'Scrum Master']);

        DB::table('desenvolvedores')->insert(['nome' => 'Thalita','cargo' => 'Product Onwer']);
        DB::table('desenvolvedores')->insert(['nome' => 'Vera','cargo' => 'Coordenadora de Marketing']);
        DB::table('desenvolvedores')->insert(['nome' => 'Sebastiana','cargo' => 'Diretora de Desenvolvimento']);

    }
}
