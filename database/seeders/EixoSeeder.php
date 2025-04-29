<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EixoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $this->call(EixoSeeder::class);
            $this->call(NivelSeeder::class);
            $this->call(CursoSeeder::class);
         }
    
        $data = [
            ["nome" => "INFORMAÇÃO E COMUNICAÇÃO"],
            ["nome" => "RECURSOS NATURAIS"],
            ["nome" => "CIÊNCIAS HUMANAS"],
            ];
            DB::table('eixos')->insert($data);
            
    }
    
}
