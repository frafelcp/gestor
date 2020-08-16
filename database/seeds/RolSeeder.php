<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rols = [
            'administrador',
            'archivador',
            'auxiliar',
            'practicante'
        ];

        foreach($rols as $key => $values){
            DB::table('rol')->insert([
                'nombre' => $values,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
