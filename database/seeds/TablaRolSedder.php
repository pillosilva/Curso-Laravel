<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TablaRolSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols=[
            'Administrador',
            'Editor',
            'Supervisor'
        ];
        foreach($rols as $key => $value){
        DB::table('rol')->insert([
            'nombre' => $value,
            'created_at' => Carbon::now()->format('y-m-d h:i:s')
        ]);
    }
   }
}
