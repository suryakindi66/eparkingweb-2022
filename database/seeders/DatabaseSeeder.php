<?php

namespace Database\Seeders;

use App\Models\TarifParkir;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'password' => bcrypt('12345'),
           'role'=>'admin',
        ]);
        TarifParkir::create([
            'id' => '1',
            'tarifmotor' => '0',
            'tarifmobil' => '0',
            'tariflainnya' => '0',
        ]);
    }
}
