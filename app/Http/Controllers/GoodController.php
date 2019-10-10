<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Generator as Faker;

class GoodController extends Controller
{
    public function index(Faker $faker)
    {
        $goods = [];
        $price = [300, 400, 500, 600, 1000, 1200, 1500, 1800, 2000, 2100, 2500];

        for ($i = 1; $i <= 30; $i++) {
            $goods += [
                $i => [
                    "id" => $i,
                    "title" => "Стул_$i",
                    "image" => "https://bymi.ru/storage/" . (string)rand(1,10) . ".jpg",
                    "descr" => $faker->text(100),
                    "price" => $price[rand(0,10)],
                    "available" => $faker->boolean(85)
                ]
            ];
        }

        return response()->json($goods);
    }
}
