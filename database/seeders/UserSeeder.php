<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@satsweets.com',
            'password' => 'password',
        ]);
        $user->assignRole('ADMIN');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@satsweets.com',
            'password' => 'password',
            'line_id' => '1',
        ]);
        $user->assignRole('USER');


        $category = Category::create([
            'name' => 'sweets',
        ]);

        $product = Product::create([
            'name' => 'Laddu',
            'category_id' => $category->id,
            'code'=>'1234',
            'price'=>'400',
            'hsncode'=>'123456',
            'gst'=>'5',
            'stocks'=>'10'
        ]);


        $product = Product::create([
            'name' => 'Mysurepak',
            'category_id' => $category->id,
            'code'=>'1235',
            'price'=>'350',
            'hsncode'=>'123456',
            'gst'=>'5',
            'stocks'=>'10'
        ]);




    }
}
