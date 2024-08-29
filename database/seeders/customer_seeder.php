<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class customer_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'branch_id' => 1,
            'first_name' => 'afseer',
            'last_name' => 'ashraf',
            'mobile' => '7356233174',
            'email' => 'afseer@gmail.com',
            'password' => bcrypt('afseer123'),
            'dob' => '2000-08-12',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Customer::create([
            'branch_id' => 2,
            'first_name' => 'ashik',
            'last_name' => 'ameer',
            'mobile' => '7865432189',
            'email' => 'ashik@gmail.com',
            'password' => bcrypt('ashik1234'),
            'dob' => '2001-05-10',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Customer::create([
            'branch_id' => 1,
            'first_name' => 'abram',
            'last_name' => 'pratheeb',
            'mobile' => '8086954423',
            'email' => 'abram@gmail.com',
            'password' => bcrypt('abram333'),
            'dob' => '1998-06-28',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
