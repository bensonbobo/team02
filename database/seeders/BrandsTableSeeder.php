<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateRandomName()
    {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = ucfirst($last_name);
        $name = $first_name . " " . $last_name;
        $last_name = strtolower($last_name);
        return $name;
    }
    public function generateRandomNames()
    {
        $name = $this->generateRandomString(rand(2, 15));
        $name = strtolower($name);
        $name = ucfirst($name);
        return $name;
    }
    public function generateRandomBrand()
    {
        $brand = ['立頓', '統一', '三洋威士比', '美粒果', '泰山', '百事', '可口可樂', '黑松', '波蜜', '英聯'];
        return $brand[rand(0, count($brand) - 1)];
    }

    public function generateRandomCountry()
    {
        $country = [
            '英國',
            '台灣',
            '美國'
        ];
        return $country[rand(0, count($country) - 1)];}
        public function run()
        {
            for ($i = 0; $i < 10; $i++) {
                $name = $this->generateRandomName();
                $country = $this->generateRandomCountry();
                $brand = $this->generateRandomNames();
                $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

                DB::table('brands')->insert([
                    'brand' => $brand,
                    'founder' => $name,
                    'country' => $country,
                    'created_at' => $random_datetime,
                    'updated_at' => $random_datetime
                ]);


            }
        }

}

