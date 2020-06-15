<?php

use Illuminate\Database\Seeder;

class AlocacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alocacoes')->insert(['projeto_id' => 1,'desenvolvedor_id' => 1,'horas_semanais' => 40]);
        DB::table('alocacoes')->insert(['projeto_id' => 1,'desenvolvedor_id' => 2,'horas_semanais' => 41]);
        DB::table('alocacoes')->insert(['projeto_id' => 1,'desenvolvedor_id' => 3,'horas_semanais' => 42]);
        DB::table('alocacoes')->insert(['projeto_id' => 2,'desenvolvedor_id' => 2,'horas_semanais' => 43]);
        DB::table('alocacoes')->insert(['projeto_id' => 2,'desenvolvedor_id' => 3,'horas_semanais' => 44]);
        DB::table('alocacoes')->insert(['projeto_id' => 3,'desenvolvedor_id' => 1,'horas_semanais' => 45]);
        DB::table('alocacoes')->insert(['projeto_id' => 3,'desenvolvedor_id' => 3,'horas_semanais' => 46]);
        DB::table('alocacoes')->insert(['projeto_id' => 3,'desenvolvedor_id' => 6,'horas_semanais' => 47]);

    }
}
