<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bookingshelf;

class BookingshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Bookingshelf::insert(
            [
                '1' => '1',
                'code' => '620',
                'name' => 'SR11',
                'create_at' => now(),
                'update_at' => now()
            ],
            [
                '1' => '1',
                'code' => '621',
                'name' => 'SR17',
                'create_at' => now(),
                'update_at' => now()
            ],
            [
                '1' => '1',
                'code' => '622',
                'name' => 'SR19',
                'create_at' => now(),
                'update_at' => now()
            ],
            [
                '1' => '1',
                'code' => '623',
                'name' => 'SR2',
                'create_at' => now(),
                'update_at' => now()
            ],
    );
    }
}
