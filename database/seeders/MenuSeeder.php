<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            "group" => "drink",
            "name" => "Mirinda",
            "position" => 1,
            "price" => 4
        ]);
        Menu::create([
            "group" => "drink",
            "name" => "Pepsi",
            "position" => 3,
            "price" => 4
        ]);
        Menu::create([
            "group" => "drink",
            "name" => "7-up",
            "position" => 2,
            "price" => 6
        ]);
        Menu::create([
            "group" => "drink",
            "name" => "Cola",
            "position" => 5,
            "price" => 1
        ]);
        Menu::create([
            "group" => "drink",
            "name" => "Fanta",
            "position" => 4,
            "price" => 3
        ]);
        Menu::create([
            "group" => "burger",
            "name" => "Cheeseburger",
            "position" => 1,
            "price" => 7
        ]);
        Menu::create([
            "group" => "burger",
            "name" => "MC Fresh",
            "position" => 3,
            "price" => 4
        ]);
        Menu::create([
            "group" => "burger",
            "name" => "MC Toast",
            "position" => 2,
            "price" => 6
        ]);
        Menu::create([
            "group" => "burger",
            "name" => "Big Mac",
            "position" => 4,
            "price" => 1
        ]);
        Menu::create([
            "group" => "burger",
            "name" => "Big Tasty",
            "position" => 5,
            "price" => 3
        ]);
    }
}
