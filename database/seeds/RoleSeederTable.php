<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'name' => 'operator',
            'desc' => 'administrator'
        ]);

        DB::table('role')->insert([
            'name' => 'toko',
            'desc' => 'pemilik toko'
        ]);

        DB::table('role')->insert([
            'name' => 'user',
            'desc' => 'pengunjung'
        ]);
    }
}
