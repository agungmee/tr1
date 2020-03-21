<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 50 ; $i++) { 

        DB::table('list_customers')->insert([
            'cust_code' => $faker->postcode,
            'cust_name' => $faker->name,
            'cust_territory' => $faker->state,
            'cust_address' => $faker->address,
            'cust_region' => $faker->city,
            'cust_phone' => $faker->buildingNumber,
            'sales_code' => $faker->postcode,
            'sales_name' => $faker->lastName,
            'keterangan' => $faker->jobTitle
        ]);

    }
}
}
