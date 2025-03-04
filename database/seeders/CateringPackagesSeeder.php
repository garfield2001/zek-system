<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CateringPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catering_packages')->insert([
            'name' => 'Package A',
            'price' => 280,
            'min_order' => 50,
            'meal_limit' => 4,
            'good_for' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('catering_packages')->insert([
            'name' => 'Package B',
            'price' => 310,
            'min_order' => 50,
            'meal_limit' => 5,
            'good_for' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('catering_packages')->insert([
            'name' => 'Package C',
            'price' => 350,
            'min_order' => 50,
            'meal_limit' => 6,
            'good_for' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('catering_packages')->insert([
            'name' => 'Package D',
            'price' => 380,
            'min_order' => 50,
            'meal_limit' => 7,
            'good_for' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
