<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols=[
            'administrador',
            'editor',
            'supervisor'
        ];

        foreach ($rols as $key => $value) {
            DB::table('rols')->insert([
            'nombre' => $value,
            'created_at'=> Carbon::now()->format('y-m-d H:i:s')
        ]);
        }
    }
}
