<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(            
            array('id' => '1','name' => 'Rs.20 spl michar','code' => '12346','stocks' => '1','price' => '15','gst' => '5','hsncode' => '0813','created_at' => '2023-01-23 05:57:23','updated_at' => '2023-01-23 05:57:23','category_id' => '1'),
            array('id' => '2','name' => 'RS.20 avul michar','code' => '12347','stocks' => '1','price' => '15','gst' => '5','hsncode' => '0813','created_at' => '2023-01-23 05:58:09','updated_at' => '2023-01-23 05:58:09','category_id' => '1'),
            array('id' => '3','name' => '20kara sev','code' => '12348','stocks' => '1','price' => '15','gst' => '5','hsncode' => '012','created_at' => '2023-01-23 05:58:49','updated_at' => '2023-01-23 05:58:49','category_id' => '1'),
            array('id' => '4','name' => '20 milagu sev','code' => '12349','stocks' => '1','price' => '15','gst' => '5','hsncode' => '0813','created_at' => '2023-01-23 06:01:34','updated_at' => '2023-01-23 06:01:34','category_id' => '1'),
            array('id' => '5','name' => '1/4 spl michar','code' => '12350','stocks' => '1','price' => '35','gst' => '5','hsncode' => '0813','created_at' => '2023-01-23 06:02:31','updated_at' => '2023-01-23 06:02:31','category_id' => '2'),
            array('id' => '6','name' => '1/4 avul michar','code' => '12351','stocks' => '1','price' => '35','gst' => '5','hsncode' => '0813','created_at' => '2023-01-23 06:02:56','updated_at' => '2023-01-23 06:02:56','category_id' => '2'),
            array('id' => '7','name' => '1/4 kara sev','code' => '12352','stocks' => '1','price' => '35','gst' => '5','hsncode' => '0813','created_at' => '2023-01-23 06:03:34','updated_at' => '2023-01-23 06:03:34','category_id' => '2'),
            array('id' => '8','name' => '1/2 spl michar','code' => '12353','stocks' => '1','price' => '70','gst' => '5','hsncode' => '0813','created_at' => '2023-01-23 06:04:02','updated_at' => '2023-01-23 06:04:02','category_id' => '3'),
            array('id' => '9','name' => '1/2 avukl','code' => '12356','stocks' => '100','price' => '70','gst' => '5','hsncode' => '0813','created_at' => '2023-01-23 06:16:10','updated_at' => '2023-01-23 06:16:10','category_id' => '3')
          );

          Product::insert($products);
          
    }
}
