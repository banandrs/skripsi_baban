<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket_fotos')->delete();
        $faker  = Faker::create('id_ID');
        $paket  = $faker->sentence($nbWords = 2, $variableNbWords = true);
        $slug   = Str::slug($paket);
        for($i = 1; $i <= 5; $i++){
            DB::table('paket_fotos')->insert([
                  'paket'       => $paket,
                  'paket_slug'  => $slug,
                  'harga'       => $faker->randomNumber(6),
                  'kapasitas'   => $faker->randomDigitNotNull(2),
                  'durasi'      => $faker->randomDigit,
                  'background'  => $faker->imageUrl($width = 640, $height = 480),
                  'cetak_foto'  => $faker->imageUrl($width = 640, $height = 480),
                  'file_foto'   => $faker->imageUrl($width = 640, $height = 480),
                  'keterangan'  => $faker->text($maxNbChars = 50),
            ]);
        }
    }
}
