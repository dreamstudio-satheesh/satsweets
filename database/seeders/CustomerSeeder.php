<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = array(
            array('id' => '1','name' => 'AKS மளிகை','address' => 'மார்க்கம்பட்டி,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-27 08:55:07','updated_at' => '2023-01-31 07:49:16'),
            array('id' => '2','name' => 'கண்ணன் மளிகை','address' => 'கொடுவாய்','contact1' => '9874561230','contact2' => NULL,'gstnumber' => NULL,'line_id' => '1','created_at' => '2023-01-27 09:52:25','updated_at' => '2023-01-27 09:52:25'),
            array('id' => '3','name' => 'நந்தகுமார் மளிகை','address' => 'சோலார்','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '9','created_at' => '2023-01-27 11:28:45','updated_at' => '2023-01-27 11:28:45'),
            array('id' => '4','name' => 'நவலடியான் ஸ்டோர்','address' => 'அக்கரைபாளையம்,
          தமிழ்நாடு,','contact1' => '9945407505','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:11:15','updated_at' => '2023-01-31 07:11:15'),
            array('id' => '5','name' => 'அனிதா ஸ்டோர்','address' => 'அக்கரைபாளையம்’
          தமிழ்நாடு,','contact1' => '9790539162','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:12:23','updated_at' => '2023-01-31 07:12:23'),
            array('id' => '6','name' => 'வேலவா பேக்கரி','address' => 'நத்தம்பாளையம்,
          தமிழ்நாடு,','contact1' => '7010524597','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:13:41','updated_at' => '2023-01-31 07:13:41'),
            array('id' => '7','name' => 'செல்வம் ஸ்டோர் 2','address' => 'நத்தம்பாளையம்,
          தமிழ்நாடு,','contact1' => '9585629090','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:15:32','updated_at' => '2023-01-31 07:15:32'),
            array('id' => '8','name' => 'அதிராணி ஸ்டோர்','address' => 'நத்தம்பாளையம்,
          தமிழ்நாடு,','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:16:35','updated_at' => '2023-01-31 07:16:35'),
            array('id' => '9','name' => 'செல்வம் ஸ்டோர்','address' => 'பெரமியம்,
          தமிழ்நாடு,','contact1' => '9442094102','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:17:50','updated_at' => '2023-01-31 07:17:50'),
            array('id' => '10','name' => 'ராஜேந்திரன் ஸ்டோர்','address' => 'பெரமியம்,
          தமிழ்நாடு,','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:18:35','updated_at' => '2023-01-31 07:18:35'),
            array('id' => '11','name' => 'மணி ஸ்டோர்','address' => 'பெரமியம்,
          தமிழ்நாடு,','contact1' => '6381986560','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:19:29','updated_at' => '2023-01-31 07:19:29'),
            array('id' => '12','name' => 'சபரி ஐயங்கார் பேக்கரி','address' => 'தாராபுரம் கார்னர்,
          தமிழ்நாடு,','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:21:45','updated_at' => '2023-01-31 07:21:45'),
            array('id' => '13','name' => 'ஆர்.எஸ்.மளிகை','address' => 'காளிபாளையம்,
          தமிழ்நாடு,','contact1' => '7708284711','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:22:55','updated_at' => '2023-01-31 07:22:55'),
            array('id' => '14','name' => 'வெள்ளியங்கிரி மளிகை','address' => 'காளிபாளையம்,
          தமிழ்நாடு,','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:23:43','updated_at' => '2023-01-31 07:23:43'),
            array('id' => '15','name' => 'நெற்கதிர் டிபார்ட்மெண்ட்','address' => 'குளத்துபாளையம்,
          தமிழ்நாடு,','contact1' => '9965558155','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:24:54','updated_at' => '2023-01-31 07:24:54'),
            array('id' => '16','name' => 'KS ஸ்டோர்','address' => 'கரையூர்,
          தமிழ்நாடு,','contact1' => '9092480400','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:26:02','updated_at' => '2023-01-31 07:26:02'),
            array('id' => '17','name' => 'இக்பால் ஸ்டோர்','address' => 'கரையூர்,
          தமிழ்நாடு,','contact1' => '9952215332','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:26:55','updated_at' => '2023-01-31 07:26:55'),
            array('id' => '18','name' => 'பஷீர் ஸ்டோர்','address' => 'கரையூர்,
          தமிழ்நாடு,','contact1' => '9245853412','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:28:46','updated_at' => '2023-01-31 07:28:46'),
            array('id' => '19','name' => 'அருண் டீ ஸ்டால்','address' => 'மூலனூர் ரோடு,
          தமிழ்நாடு,','contact1' => '9012153136','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:29:52','updated_at' => '2023-01-31 07:29:52'),
            array('id' => '20','name' => 'கண்ணன் ஸ்டோர்','address' => 'போளரை,
          தமிழ்நாடு,','contact1' => '9786173381','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:30:58','updated_at' => '2023-01-31 07:30:58'),
            array('id' => '21','name' => 'நாகா ஸ்டோர்','address' => 'போளரை,
          தமிழ்நாடு,','contact1' => '9843661622','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:32:03','updated_at' => '2023-01-31 07:32:03'),
            array('id' => '22','name' => 'ராம்துரை ஹாட் சிப்ஸ்','address' => 'மூலனூர்,
          தமிழ்நாடு,','contact1' => '8870939824','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:33:06','updated_at' => '2023-01-31 07:33:06'),
            array('id' => '23','name' => 'KRS ஐயங்கார் பேக்கரி','address' => 'மூலனூர்,
          தமிழ்நாடு,','contact1' => '9715362981','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:34:09','updated_at' => '2023-01-31 07:34:09'),
            array('id' => '24','name' => 'V.C.B. ஸ்டோர்','address' => 'மூலனூர்,
          தமிழ்நாடு,','contact1' => '9847437225','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:35:13','updated_at' => '2023-01-31 07:35:13'),
            array('id' => '25','name' => 'உழவன் பேக்கரி','address' => 'புதுபை ரோடு,
          மூலனூர்,
          தமிழ்நாடு.','contact1' => '9629396830','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:36:39','updated_at' => '2023-01-31 07:36:39'),
            array('id' => '26','name' => 'முருகன் ஸ்டோர்','address' => 'புதுபை ரோடு,
          மூலனூர்,
          தமிழ்நாடு.','contact1' => '8431747659','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:37:43','updated_at' => '2023-01-31 07:37:43'),
            array('id' => '27','name' => 'ராம்குமார் டீ ஸ்டால்','address' => 'மூலனூர்,
          தமிழ்நாடு.','contact1' => '8903279525','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:38:28','updated_at' => '2023-01-31 07:38:28'),
            array('id' => '28','name' => 'ரவி பொரி','address' => 'மூலனூர்,
          கரூர் ரோடு,
          தமிழ்நாடு.','contact1' => '9842190091','contact2' => NULL,'gstnumber' => NULL,'line_id' => '1','created_at' => '2023-01-31 07:39:20','updated_at' => '2023-01-31 07:45:38'),
            array('id' => '29','name' => 'கண்ணன் பொரி','address' => 'மூலனூர்,
          கரூர் ரோடு,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '1','created_at' => '2023-01-31 07:40:02','updated_at' => '2023-01-31 07:46:07'),
            array('id' => '30','name' => 'கிருஷ்ணன் பொரி','address' => 'மூலனூர்,
          கரூர் ரோடு,
          தமிழ்நாடு.','contact1' => '9443087042','contact2' => NULL,'gstnumber' => NULL,'line_id' => '1','created_at' => '2023-01-31 07:40:50','updated_at' => '2023-01-31 07:46:34'),
            array('id' => '31','name' => 'காந்தி பொரி','address' => 'மூலனூர்,
          கரூர் ரோடு,
          தாமிழ்நாடு.','contact1' => '9578967021','contact2' => NULL,'gstnumber' => NULL,'line_id' => '1','created_at' => '2023-01-31 07:41:41','updated_at' => '2023-01-31 07:45:00'),
            array('id' => '32','name' => 'பழனியப்பா ஸ்டோர்','address' => 'வடுகபட்டி ரோடு,
          மூலனூர்,
          தமிழ்நாடு.','contact1' => '9750505353','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:44:07','updated_at' => '2023-01-31 07:44:07'),
            array('id' => '33','name' => 'யோகேஷ் மளிகை','address' => 'வடுகபட்டி,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:47:31','updated_at' => '2023-01-31 07:47:31'),
            array('id' => '34','name' => 'ADP மளிகை','address' => 'மார்க்கம்பட்டி,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:50:23','updated_at' => '2023-01-31 07:50:23'),
            array('id' => '35','name' => 'T.V.S மளிகை','address' => 'மார்க்கம்பட்டி,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:51:18','updated_at' => '2023-01-31 07:51:18'),
            array('id' => '36','name' => 'அன்சாரி வியாபாரி','address' => 'பள்ளப்பட்டி,
          தமிழ்நாடு.','contact1' => '8643067773','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:52:19','updated_at' => '2023-01-31 07:52:19'),
            array('id' => '37','name' => 'இனியா மிட்டாய் கடை','address' => 'பள்ளப்பட்டி,
          தமிழ்நாடு.','contact1' => '9566760889','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 07:53:23','updated_at' => '2023-01-31 07:53:23'),
            array('id' => '38','name' => 'இறைவன் இல்லம்','address' => 'பள்ளப்பட்டி,
          தமிழ்நாடு.','contact1' => '6385556189','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:16:14','updated_at' => '2023-01-31 08:16:14'),
            array('id' => '39','name' => 'நெல்லை ஜெயம் ஸ்டோர்','address' => 'பள்ளப்பட்டி,
          தமிழ்நாடு.','contact1' => '7502556933','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:17:15','updated_at' => '2023-01-31 08:17:15'),
            array('id' => '40','name' => 'நவலடியான் ஸ்டோர்','address' => 'பள்ளப்பட்டி,
          தமிழ்நாடு.','contact1' => '9750306969','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:18:09','updated_at' => '2023-01-31 08:18:09'),
            array('id' => '41','name' => 'மீரா ஸ்டோர்','address' => 'கேர் நகர்,
          பள்ளப்பட்டி,
          தமிழ்நாடு.','contact1' => '8220385697','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:19:07','updated_at' => '2023-01-31 08:19:07'),
            array('id' => '42','name' => 'நெல்லை கிருபா ஸ்டோர்','address' => 'ரெங்கராஜ் நகர்,
          பள்ளப்பட்டி,
          தமிழ்நாடு.','contact1' => '9894871983','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:20:24','updated_at' => '2023-01-31 08:20:24'),
            array('id' => '43','name' => 'அருண் ஸ்டோர்','address' => 'அரவக்குறிச்சி,
          தமிழ்நாடு.','contact1' => '7305540062','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:21:19','updated_at' => '2023-01-31 08:21:19'),
            array('id' => '44','name' => 'மாணிக்கம் ஸ்டோர்','address' => 'அரவக்குறிச்சி,
          தமிழ்நாடு.','contact1' => '9443398817','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:22:12','updated_at' => '2023-01-31 08:22:12'),
            array('id' => '45','name' => 'நெல்லை ராஜன் ஸ்டோர்','address' => 'அரவக்குறிச்சி,
          தமிழ்நாடு.','contact1' => '9786696470','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:25:46','updated_at' => '2023-01-31 08:25:46'),
            array('id' => '46','name' => 'சோழா பேக்கரி','address' => 'அரவக்குறிச்சி,
          தமிழ்நாடு.','contact1' => '9629195253','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:26:42','updated_at' => '2023-01-31 08:26:42'),
            array('id' => '47','name' => 'NRS ஸ்டோர்','address' => 'அராவக்குறிச்சி,
          தமிழ்நாடு.','contact1' => '9342380125','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:27:37','updated_at' => '2023-01-31 08:27:37'),
            array('id' => '48','name' => 'அம்பாள் பேக்கரி','address' => 'கன்னிவாடி,
          கருர் ரோடு,
          தமிழ்நாடு.','contact1' => '8144228858','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:47:13','updated_at' => '2023-01-31 08:47:13'),
            array('id' => '49','name' => 'ராஜா ஸ்டோர்','address' => 'கன்னிவாடி,
          கரூர்ரோடு,
          தமிழ்நாடு.','contact1' => '9791991487','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 08:49:07','updated_at' => '2023-01-31 08:59:42'),
            array('id' => '50','name' => 'நெல்லை ஸ்டோர்','address' => 'கன்னிவாடி,
          கரூர் ரோடு,
          தமிழ்நாடு.','contact1' => '9791228550','contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 09:01:08','updated_at' => '2023-01-31 09:01:08'),
            array('id' => '51','name' => 'மகாலெட்சுமி பேக்கரி','address' => 'காளிபாளையம்,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 09:02:31','updated_at' => '2023-01-31 09:02:31'),
            array('id' => '52','name' => 'சூர்யா பேக்கரி','address' => 'போளரை,
          மூலனூர் ரோடு,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 09:03:45','updated_at' => '2023-01-31 09:03:45'),
            array('id' => '53','name' => 'முரளி பொரி','address' => 'மூலனூர்,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 09:04:17','updated_at' => '2023-01-31 09:04:17'),
            array('id' => '54','name' => 'நெல்லை அம்மன் மளிகை','address' => 'கிளாங்குண்டல்,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 09:05:13','updated_at' => '2023-01-31 09:05:13'),
            array('id' => '55','name' => 'CKS மளிகை','address' => 'மார்க்கம்பட்டி,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 09:06:01','updated_at' => '2023-01-31 09:06:01'),
            array('id' => '56','name' => 'சராவணா ஸ்டோர்','address' => 'மார்க்கம்பட்டி,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 09:06:44','updated_at' => '2023-01-31 09:06:44'),
            array('id' => '57','name' => 'ASM ஸ்டோர்','address' => 'மார்க்கம்பட்டி,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 09:07:25','updated_at' => '2023-01-31 09:07:25'),
            array('id' => '58','name' => 'சிவசெல்வி மளிகை','address' => 'தண்ணீர்பந்தல்,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 09:08:11','updated_at' => '2023-01-31 09:08:11'),
            array('id' => '59','name' => 'ஸ்டார் ஹாட் சிப்ஸ்','address' => 'பள்ளப்பட்டி,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '11','created_at' => '2023-01-31 09:08:51','updated_at' => '2023-01-31 09:08:51'),
            array('id' => '60','name' => 'சுப்ரமணி மளிகை','address' => 'மேட்டுக்கடை,
          தமிழ்நாடு.','contact1' => '9442260272','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:15:01','updated_at' => '2023-01-31 09:15:01'),
            array('id' => '61','name' => 'நெல்லை அனுசியா ஸ்டோர்','address' => 'மேட்டுக்கடை,
          தமிழ்நாடு.','contact1' => '8144261270','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:16:52','updated_at' => '2023-01-31 09:16:52'),
            array('id' => '62','name' => 'கார்த்திக் மட்டன் கடை','address' => 'சின்னியகவுண்டம்பாளையம்,
          தமிழ்நாடு.','contact1' => '8526589299','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:17:58','updated_at' => '2023-01-31 09:17:58'),
            array('id' => '63','name' => 'புலிகுத்தி மளிகை','address' => 'வாய்ப்பாடி,
          தமிழ்நாடு.','contact1' => '8526809789','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:19:00','updated_at' => '2023-01-31 09:19:00'),
            array('id' => '64','name' => 'பழனிச்சாமி மளிகை','address' => 'வாய்ப்பாடி,
          தமிழ்நாடு.','contact1' => '7373558515','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:20:16','updated_at' => '2023-01-31 09:20:16'),
            array('id' => '65','name' => 'சிவசக்தி மளிகை','address' => 'தாசம்பாளையம்,
          தமிழ்நாடு.','contact1' => '6383465458','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:21:05','updated_at' => '2023-01-31 09:21:05'),
            array('id' => '66','name' => 'பாரி கஃபே பேக்கரி','address' => 'வாய்ப்பாடி ரோடு,
          தமிழ்நாடு.','contact1' => '9443680620','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:22:37','updated_at' => '2023-01-31 09:22:37'),
            array('id' => '67','name' => 'கணபதி மளிகை','address' => 'வாய்ப்பாடி ரோடு,
          தமிழ்நாடு.','contact1' => '9942642942','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:23:51','updated_at' => '2023-01-31 09:23:51'),
            array('id' => '68','name' => 'டீ டைம்','address' => 'விஜயமங்கலம்,
          தமிழ்நாடு.','contact1' => '9995061402','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:24:49','updated_at' => '2023-01-31 09:24:49'),
            array('id' => '69','name' => 'மலபார் பேக்கரி','address' => 'பைபாஸ் ரோடு கீழ்,
          தமிழ்நாடு.','contact1' => '9072912235','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:25:56','updated_at' => '2023-01-31 09:25:56'),
            array('id' => '70','name' => 'ஸ்ரீ கணபதி ஸ்டோர்','address' => 'விஜயமங்கலம் மஹால் எதிரில்,
          தமிழ்நாடு.','contact1' => '9942642942','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:27:04','updated_at' => '2023-01-31 09:27:04'),
            array('id' => '71','name' => 'சின்னதாய் மளிகை','address' => 'திங்களூர் ரோடு,
          தமிழ்நாடு.','contact1' => '8344497500','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:28:14','updated_at' => '2023-01-31 09:28:14'),
            array('id' => '72','name' => 'பொன்வேலா டிரேடர்ஸ்','address' => 'விஜயமங்கலம்,
          தமிழ்நாடு.','contact1' => '9843932321','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:29:20','updated_at' => '2023-01-31 09:29:20'),
            array('id' => '73','name' => 'ஸ்ரீ ஐயங்கார் பேக்கரி','address' => 'டோல்கேட்,
          தமிழ்நாடு.','contact1' => '8893777272','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:30:38','updated_at' => '2023-01-31 09:30:38'),
            array('id' => '74','name' => 'ஜெயம் ஐயங்கார் பேக்கரி','address' => 'டோல்கேட்,
          தமிழ்நாடு.','contact1' => '9585610766','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:31:31','updated_at' => '2023-01-31 09:31:31'),
            array('id' => '75','name' => 'ஆவின் பாலகம்','address' => 'பைபாஸ் ரோடு கீழ் சிப்காட்,
          தமிழ்நாடு.','contact1' => '7904958276','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:32:47','updated_at' => '2023-01-31 09:32:47'),
            array('id' => '76','name' => 'ஈரோடு பேக்ஸ்','address' => 'பாரத் பங்க் எதிரில் பைபாஸ்,
          தமிழ்நாடு.','contact1' => '9447751771','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:34:22','updated_at' => '2023-01-31 09:34:22'),
            array('id' => '77','name' => 'ராயல் பேக்கரி','address' => 'டோல்கேட் வலதுபுறம்,
          தமிழ்நாடு.','contact1' => '9600430994','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:35:36','updated_at' => '2023-01-31 09:35:36'),
            array('id' => '78','name' => 'சுதா பேக்கரி & ஹோட்டல்','address' => 'குன்னத்தூர் ரோடு,
          தமிழ்நாடு.','contact1' => '6382111170','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:36:30','updated_at' => '2023-01-31 09:36:30'),
            array('id' => '79','name' => 'சுவாதி பருப்பு ஸ்டோர்','address' => 'குன்னத்தூர் ரோடு,
          தமிழ்நாடு.','contact1' => '9786662622','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:37:23','updated_at' => '2023-01-31 09:37:23'),
            array('id' => '80','name' => 'நெல்லை ஆசிர்வாதம் மளிகை','address' => 'பட்டக்காரன்பாளையம்,
          தமிழ்நாடு.','contact1' => '9940709117','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:38:12','updated_at' => '2023-01-31 09:38:12'),
            array('id' => '81','name' => 'ஐயங்கார் பேக்கரி','address' => 'சீனாபுரம்,
          தமிழ்நாடு.','contact1' => '8667669764','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:39:07','updated_at' => '2023-01-31 09:39:07'),
            array('id' => '82','name' => 'நியூ நெல்லை ஸ்டோர்','address' => 'சீனாபுரம்,
          தமிழ்நாடு.','contact1' => '8778270678','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:40:06','updated_at' => '2023-01-31 09:40:06'),
            array('id' => '83','name' => 'ஐயங்கார் பேக்கரி','address' => 'கிரே நகர்,
          தமிழ்நாடு.','contact1' => '8012286525','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:41:00','updated_at' => '2023-01-31 09:41:00'),
            array('id' => '84','name' => 'துளசி ஸ்டோர்','address' => 'கிரே நகர்,
          தமிழ்நாடு.','contact1' => '9487518024','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:41:55','updated_at' => '2023-01-31 09:41:55'),
            array('id' => '85','name' => 'சிவசக்தி ஆயில் ஸ்டோர்','address' => 'வெள்ளிரவளி,
          தமிழ்நாடு.','contact1' => '9786928502','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:42:52','updated_at' => '2023-01-31 09:42:52'),
            array('id' => '86','name' => 'விஸ்வநாதன் மளிகை','address' => 'வெள்ளிரவளி,
          தமிழ்நாடு.','contact1' => '9843233623','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:43:44','updated_at' => '2023-01-31 09:43:44'),
            array('id' => '87','name' => 'முருகன் மளிகை','address' => 'செம்மண்டாம்பாளையம்,
          தமிழ்நாடு.','contact1' => '9965844999','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:44:53','updated_at' => '2023-01-31 09:44:53'),
            array('id' => '88','name' => 'விக்ஷால் டிரேடர்ஸ்','address' => 'வெள்ளிரவளி பிரிவு,
          தமிழ்நாடு.','contact1' => '7667799837','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:45:47','updated_at' => '2023-01-31 09:45:47'),
            array('id' => '89','name' => 'குமரன் மளிகை','address' => 'காப்பாவலசு,
          தமிழ்நாடு.','contact1' => '9095295495','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:47:05','updated_at' => '2023-01-31 09:47:05'),
            array('id' => '90','name' => 'முதலியார் மளிகை','address' => 'காப்பாவலசு,
          தமிழ்நாடு.','contact1' => '8344770040','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:47:59','updated_at' => '2023-01-31 09:47:59'),
            array('id' => '91','name' => 'நடராஜ் மளிகை','address' => '16 வேலம்பாளையம்,
          தமிழ்நாடு.','contact1' => '9442577769','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:49:00','updated_at' => '2023-01-31 09:49:00'),
            array('id' => '92','name' => 'நெல்லை மணி மளிகை','address' => 'பெருமாநல்லூர் ரோடு,
          தமிழ்நாடு.','contact1' => '9524357922','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:50:29','updated_at' => '2023-01-31 09:50:29'),
            array('id' => '93','name' => 'சுரேஷ் மளிகை','address' => 'தட்டான்குட்டை,
          தமிழ்நாடு.','contact1' => '9865945137','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:51:30','updated_at' => '2023-01-31 09:51:30'),
            array('id' => '94','name' => 'ஓம் வினாயகா மளிகை','address' => 'மொய்யாண்டாம்பாளையம்,
          தமிழ்நாடு.','contact1' => '7418242464','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:52:27','updated_at' => '2023-01-31 09:52:27'),
            array('id' => '95','name' => 'பாலமுருகன் மளிகை','address' => 'பெருமாநல்லூர்,
          தமிழ்நாடு.','contact1' => NULL,'contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:53:19','updated_at' => '2023-01-31 09:53:19'),
            array('id' => '96','name' => 'SS டிபார்ட்மெண்ட் ஸ்டோர்','address' => 'பெருமாநல்லூர்,
          தமிழ்நாடு.','contact1' => '9789482244','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:54:46','updated_at' => '2023-01-31 09:54:46'),
            array('id' => '97','name' => 'சன் இந்தியன் மளிகை','address' => 'பெருமாநல்லூர்,
          தமிழ்நாடு.','contact1' => '9443735536','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:56:05','updated_at' => '2023-01-31 09:56:05'),
            array('id' => '98','name' => 'ஜெயம் பேக்கரி','address' => 'திருப்பூர் ரோடு,
          தமிழ்நாடு.','contact1' => '8220623509','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:57:00','updated_at' => '2023-01-31 09:57:00'),
            array('id' => '99','name' => 'சிவசக்தி மளிகை','address' => 'வாவிபாளையம்,
          தமிழ்நாடு.','contact1' => '9566516666','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:57:59','updated_at' => '2023-01-31 09:57:59'),
            array('id' => '100','name' => 'SR பேக்கரி','address' => 'கணக்கம்பாளையம்,
          தமிழ்நாடு.','contact1' => '9443307909','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:58:58','updated_at' => '2023-01-31 09:58:58'),
            array('id' => '101','name' => 'ஸ்ரீ சபரி பலகாரகடை','address' => 'கணக்கம்பாளையம்,
          தமிழ்நாடு.','contact1' => '9944447192','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 09:59:44','updated_at' => '2023-01-31 09:59:44'),
            array('id' => '102','name' => 'மணி மளிகை','address' => 'மீனாட்சி நகர்,
          தமிழ்நாடு.','contact1' => '9952235061','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 10:00:35','updated_at' => '2023-01-31 10:00:35'),
            array('id' => '103','name' => 'அம்மன் மளிகை','address' => 'கூலிபாளையம் நால்ரோடு,
          தமிழ்நாடு.','contact1' => '9025102380','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 10:01:43','updated_at' => '2023-01-31 10:01:43'),
            array('id' => '104','name' => 'நெல்லை அம்மன் மளிகை','address' => 'எஸ் பெரிபாளையம்,
          தமிழ்நாடு.','contact1' => '7708286721','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 10:02:50','updated_at' => '2023-01-31 10:02:50'),
            array('id' => '105','name' => 'புவனேஷ்வரி மளிகை','address' => 'வெள்ளியம்பாளையம்,
          தமிழ்நாடு.','contact1' => '9578221758','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 10:03:32','updated_at' => '2023-01-31 10:03:32'),
            array('id' => '106','name' => 'MGM மகாலட்சுமி பேக்கரி','address' => 'பெட்டிகடை ஸ்டாப்,
          தமிழ்நாடு.','contact1' => '7708869093','contact2' => NULL,'gstnumber' => NULL,'line_id' => '7','created_at' => '2023-01-31 10:04:29','updated_at' => '2023-01-31 10:04:29')
          );
          

          Customer::insert($customers); 
    }
}
