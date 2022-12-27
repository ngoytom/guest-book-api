<?php

namespace Database\Seeders;

use App\Models\GuestBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuestBook::factory()
            ->count(10)
            ->create();

        GuestBook::factory()
            ->count(5)
            ->create();
    }
}
