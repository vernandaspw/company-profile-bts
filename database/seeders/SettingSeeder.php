<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'perusahaan' => 'Bintang Technology Solusindo',
            'logo' => null,
            'singkat' => 'PT. Bintang Technology Solusindo adalah suatu perusahaan yang bergerak di bidang pengembangan perangkat lunak. Khususnya aplikasi web dan mobile. Memberikan solusi IT bagi perusahaan perusahaan di dalam negeri maupun di luar negeri.',
            'tentang' => null,
            'alamat' => 'Palembang, Indonesia',
            'iframe' => '<iframe
           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.7091758881406!2d104.76977939197477!3d-2.8998899478394837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b713914292f4d%3A0x7e72a24325558de8!2sPT%20Bintang%20Teknologi%20Solusindo!5e0!3m2!1sid!2sid!4v1666768727472!5m2!1sid!2sid"
           width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy"
           referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'email' => 'example@bts.com',
        ]);
    }
}