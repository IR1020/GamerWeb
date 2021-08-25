<?php

namespace Database\Seeders;

use App\Models\Good;
use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Good::factory()->count(500)->create();
    }
}
