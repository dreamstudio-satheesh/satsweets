<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Line;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $lines = array(
        array('id' => '1','name' => 'கொடுவாய்','line' => '1','created_at' => '2023-01-27 08:46:37','updated_at' => '2023-01-27 08:46:37'),
        array('id' => '2','name' => 'பூந்துறை','line' => '1','created_at' => '2023-01-27 08:47:09','updated_at' => '2023-01-27 08:47:09'),
        array('id' => '3','name' => 'முத்தூர்','line' => '1','created_at' => '2023-01-27 08:47:58','updated_at' => '2023-01-27 08:47:58'),
        array('id' => '4','name' => 'காங்கேயம்','line' => '1','created_at' => '2023-01-27 08:48:28','updated_at' => '2023-01-27 08:48:28'),
        array('id' => '5','name' => 'வெள்ளகோவில்','line' => '1','created_at' => '2023-01-27 08:49:06','updated_at' => '2023-01-27 08:49:06'),
        array('id' => '6','name' => 'திருப்பூர்','line' => '1','created_at' => '2023-01-27 08:49:27','updated_at' => '2023-01-27 08:49:27'),
        array('id' => '7','name' => 'விஜயமங்கலம்','line' => '5','created_at' => '2023-01-27 08:49:56','updated_at' => '2023-01-27 08:49:56'),
        array('id' => '8','name' => 'உடுமலை','line' => '5','created_at' => '2023-01-27 08:50:16','updated_at' => '2023-01-27 08:50:16'),
        array('id' => '9','name' => 'சோலார்','line' => '5','created_at' => '2023-01-27 08:50:35','updated_at' => '2023-01-27 08:50:35'),
        array('id' => '10','name' => 'பல்லடம்','line' => '5','created_at' => '2023-01-27 08:50:52','updated_at' => '2023-01-27 08:50:52'),
        array('id' => '11','name' => 'பள்ளபட்டி','line' => '5','created_at' => '2023-01-27 08:51:35','updated_at' => '2023-01-27 08:51:35'),
        array('id' => '12','name' => 'பெருந்துறை','line' => '5','created_at' => '2023-01-27 08:52:04','updated_at' => '2023-01-27 08:52:04')
      );

        Line::insert($lines); 
          
    }
}
