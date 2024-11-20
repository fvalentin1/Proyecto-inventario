<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create(['name' => 'Conference Room', 'capacity' => 50, 'location' => 'First Floor']);
        Room::create(['name' => 'Meeting Room', 'capacity' => 20, 'location' => 'Second Floor']);
        Room::create(['name' => 'Training Room', 'capacity' => 30, 'location' => 'Third Floor']);
    }
}
