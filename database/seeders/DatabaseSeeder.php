<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\About;
use App\Models\Social;
use App\Models\Maps;
use App\Models\Contact;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin')
        ]);

        About::create([
            'about'=> 'Established in April 2019, Arcotama is a Water System Specialist headquartered in Bekasi. We specialize in providing water system or pharmaceutical spare parts and consultacy. Our mission is to deliver a good services and to provide the best products, while providing our customers with competitive rate regardless water treatment system skid as well Spare parts. '
        ]);

        Social::create([
            'facebook'  => 'Facebook',
            'twitter' => 'Twitter',
            'instagram' => 'Instagram',
            'linkedin' => 'LinkedIn',
            'youtube' => 'YouTube',
        ]);

        Maps::create([
            'links'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7932.546801748365!2d106.99529657142944!3d-6.227639716412411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c1e892c5573%3A0x292f03419da470d7!2sRuko%20Sinpasa!5e0!3m2!1sid!2sid!4v1677760206057!5m2!1sid!2sid'
        ]);

        Contact::create([
            'name' => 'PT Arcotama',
            'address' => 'Ruko Sinpasa Block B No 53,
            Summarecon Bekasi,
            West Java',
            'email' => 'admin-sales@arcotama.net',
            'phone' => '+6281319502021',
        ]);
    }
}
