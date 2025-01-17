<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SaleItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\SaleItem::factory(10)->create();
    }
}