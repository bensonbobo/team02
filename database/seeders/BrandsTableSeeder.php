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
        $name= ['托馬斯‧利普頓', '高清愿', '葉清山', '約翰‧M‧福克斯', '詹玉柱', '查爾斯‧古斯', '阿薩‧坎德勒', '張文杞', '陳忠義', 'W‧加菲爾德‧韋斯頓'];
        return $name;
    }
    public function generateRandomBrand()
    {
        $brand = ['立頓', '統一', '三洋威士比', '美粒果', '泰山', '百事', '可口可樂', '黑松', '波蜜', '英聯'];
        return $brand;
    }

    public function generateCountry()
    {
        $country = ['英國', '台灣', '台灣','美國','台灣','美國','美國','台灣','台灣','英國'];
        return $country;}
        public function run()
        {
            for ($i = 0; $i < 10; $i++) {
                $name = $this->generateRandomNames();
                $country = $this->generateCountry();
                $brand = $this->generateRandomBrand();
                $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

                DB::table('brands')->insert([
                    'brand' => $brand[$i],
                    'founder' => $name[$i],
                    'country' => $country[$i],
                    'created_at' => $random_datetime,
                    'updated_at' => $random_datetime
                ]);


            }
        }

}

