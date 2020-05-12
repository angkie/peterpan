<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DonaturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){ 

            DB::table('donatur')->insert([
                'nama_donatur'=>$faker->name,
                'tgl_lahir_donatur'=>$faker->tgl_lahir,
                'jenis_kelamin_donatur'=>$faker->gender,
                'alamat_donatur'=>$faker->alamat,
                'WA_donatur'=>$faker->WA,
                'Email_donatur'=>$faker->email,
                'no_rekening_donatur'=>$faker->rekening
             ]);
            }
    }
}

