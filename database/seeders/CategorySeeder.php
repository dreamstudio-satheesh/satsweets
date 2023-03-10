<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            array('id' => '1','name' => 'Rs.20 pkt','created_at' => '2023-01-23 04:57:48','updated_at' => '2023-01-23 05:56:25'),
            array('id' => '2','name' => '1/4 kg pkt','created_at' => '2023-01-23 05:56:37','updated_at' => '2023-01-23 05:56:37'),
            array('id' => '3','name' => '1/2 kg pkt','created_at' => '2023-01-23 05:56:46','updated_at' => '2023-01-23 05:56:46'),
            array('id' => '4','name' => '1 kg pkt','created_at' => '2023-01-23 05:57:01','updated_at' => '2023-01-23 05:57:01'),
            array('id' => '5','name' => 'Pkts','created_at' => '2023-01-25 08:23:27','updated_at' => '2023-01-25 08:23:27'),
            array('id' => '6','name' => '40 Pcs Jaar','created_at' => '2023-01-26 10:15:46','updated_at' => '2023-01-26 10:17:15'),
            array('id' => '7','name' => 'Others','created_at' => '2023-01-27 05:12:37','updated_at' => '2023-01-27 05:12:37')
          );
          
        
        Category::insert($categories);
        
    } 
}
