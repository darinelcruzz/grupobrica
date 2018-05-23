<?php

use Illuminate\Database\Seeder;

class RClientsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Runa\RClient::class, 10)->create();
    }
}
