<?php

use Illuminate\Database\Seeder;

class AttendeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Attendee::class, 10)->create();
    }
}
