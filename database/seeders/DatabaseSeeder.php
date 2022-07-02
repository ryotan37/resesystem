<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints(); //外部キーチェックを無効にする
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            CustomerSeeder::class,
        ]);

        Schema::enableForeignKeyConstraints(); //外部キーチェックを有効にする
    }
}
