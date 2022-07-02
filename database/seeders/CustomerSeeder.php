<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();

        $customers_data = [];
        for ($i = 1; $i <= 10; $i++) {
            $customers_data[] = [
                'email' => sprintf('member%02d@example.com', $i),
                'password' => sprintf('pass%04d', $i),
            ];
        }

        foreach($customers_data as $data) {
            $customer = new Customer();
            $customer->email = $data['email'];
            $customer->password = Hash::make($data['password']);
            $customer->save();
        }
    }
}
