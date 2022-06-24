<?php

namespace Database\Seeders;
//use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('cars')->insert([
        //     'name' => Str::random(10),
        //     'decriptions' => Str::random(10),
        //     'price' => Str::random(10),
        //     'mf_id' => Str::random(10),
        //     // 'produced_on' => Carbon::parse('6/8/2022'),
        // ]);
        Car::factory()->count(5)->create();
    }
}
