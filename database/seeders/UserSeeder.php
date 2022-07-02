<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users_data = [];
        for ($i = 1; $i <= 10; $i++) {
            $users_data[] = [
                'email' => sprintf('member%02d@example.com', $i),
                'password' => sprintf('pass%04d', $i),
            ];
        }

        foreach($users_data as $data) {
            $user = new User();
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->save();
        }
    }
}
