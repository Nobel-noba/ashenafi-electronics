<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Sale::factory(10)->create();
    }
}