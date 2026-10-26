<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Cheese Pizza',
                'description' => 'Get our Manhattan Classic Cheese Pizza with your choice of sauce and crust.',
                'price' => 15.95,
                'image' => '0201.jpg',
            ],
            [
                'name' => 'Pepperoni Pizza',
                'description' => 'Get our Manhattan Classic Cheese Pizza with your choice of sauce and crust.',
                'price' => 18.00,
                'image' => '0202.jpg',
            ],
            [
                'name' => 'Vegetarian Pizza',
                'description' => 'Get our Manhattan Vegeterian Pizza with your choice of sauce and crust.',
                'price' => 20.50,
                'image' => '0203.jpg',
            ],
            [
                'name' => 'Mozzarella Pizza',
                'description' => 'Get our Manhattan Mozzarella Pizza with your choice of sauce and crust.',
                'price' => 20.50,
                'image' => '0204.jpg',
            ],
            [
                'name' => 'Sicilian Pizza',
                'description' => 'Get our Manhattan Sicilian Pizza with your choice of sauce and crust.',
                'price' => 25.00,
                'image' => '0205.jpg',
            ],
            [
                'name' => 'Grilled Pizza',
                'description' => 'Get our Manhattan Grilled Pizza with your choice of sauce and crust.',
                'price' => 30.55,
                'image' => '0206.jpg',
            ],
            [
                'name' => 'Veggie Pizza',
                'description' => 'Get our Manhattan Veggie Pizza with your choice of sauce and crust.',
                'price' => 15.55,
                'image' => '0207.jpg',
            ],
            [
                'name' => 'Chicken Pizza',
                'description' => 'Get our Manhattan Chicken Pizza with your choice of sauce and crust.',
                'price' => 22.00,
                'image' => '0208.jpg',
            ],
            [
                'name' => 'Hot Brown Pizza',
                'description' => 'Get our Manhattan Hot Brown Pizza with your choice of sauce and crust.',
                'price' => 35.50,
                'image' => '0209.jpg',
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
