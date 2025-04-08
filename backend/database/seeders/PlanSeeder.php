<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("plans")->insert([
            [
                'name' => 'Plano IPTV Básico',
                'description' => 'Plano básico de IPTV com canais SD e suporte por e-mail.',
                'price' => 29.90,
                'status' => 'active', 
                'duration' => 30,  // Duração de 30 dias
                'features' => json_encode([
                    'Canais SD: 50 canais',
                    'Suporte por e-mail',
                    'Resolução 480p',
                    'Acesso a canais de filmes e séries básicos',
                ]),
            ]
        ]);
    }
}
