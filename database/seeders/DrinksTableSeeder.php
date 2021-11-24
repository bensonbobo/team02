<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DrinksTableSeeder extends Seeder
{
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName() {
        $name = $this->generateRandomString(rand(2, 15));
        $name = strtolower($name);
        $name = ucfirst($name);
        return $name;
    }
    public function generateRandomMilliliters() {
        $positions = [300,245,320,500,375,330,600,250,450,350,340];
        return $positions[rand(0, count($positions)-1)];

    }


    public function run()
    {
        for ($i=0; $i<500; $i++)
        {
            $name = $this->generateRandomName();
            $milliliter= $this->generateRandomMilliliters();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            DB::table('drinks')->insert([
                'name' => $name,
                'bid' => rand(1, 10),
                'milliliters' => $milliliter,
                'price' => rand(10, 40),
                'calories' => rand(0, 300),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
