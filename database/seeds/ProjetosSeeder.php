<?php

use Illuminate\Database\Seeder;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert(['nome' => 'Lacs','estimativa_hora' => 200]);
        DB::table('projetos')->insert(['nome' => 'CIAF','estimativa_hora' => 300]);
        DB::table('projetos')->insert(['nome' => 'EFI','estimativa_hora' => 400]);
        DB::table('projetos')->insert(['nome' => 'Medmobile','estimativa_hora' => 1000]);
    }
}
