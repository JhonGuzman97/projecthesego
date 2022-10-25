<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Statu;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statu = new Statu();
        $statu->name_statu="Activo";
        $statu->save();

        $statu2 = new Statu();
        $statu2->name_statu="Inactivo";
        $statu2->save();

    }
}
