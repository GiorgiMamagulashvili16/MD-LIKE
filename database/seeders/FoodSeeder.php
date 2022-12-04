<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Food::create([
            "name" => "chisburgeri",
            "category" => "sendvichebi",
            "order" => "1",
        ]);
        Food::create([
            "name" => "fishmako",
            "category" => "sendvichebi",
            "order" => "2",
        ]);
        Food::create([
            "name" => "hamburger",
            "category" => "sendvichebi",
            "order" => "3",
        ]);
        Food::create([
            "name" => "veji burger",
            "category" => "sendvichebi",
            "order" => "4",
        ]);
        Food::create([
            "name" => "bigmaki",
            "category" => "sendvichebi",
            "order" => "5",
        ]);

        Food::create([
            "name" => "fishrole",
            "category" => "rolebi",
            "order" => "1",
        ]);
        Food::create([
            "name" => "big taste role",
            "category" => "rolebi",
            "order" => "4",
        ]);
        Food::create([
            "name" => "vegy role",
            "category" => "rolebi",
            "order" => "2",
        ]);
        Food::create([
            "name" => "chiken role",
            "category" => "rolebi",
            "order" => "3",
        ]);
        Food::create([
            "name" => "cezare",
            "category" => "rolebi",
            "order" => "5",
        ]);
    }
}
