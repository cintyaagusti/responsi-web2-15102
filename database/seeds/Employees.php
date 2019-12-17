<?php

use Illuminate\Database\Seeder;

class Employees extends Seeder
{
    public function run()
    {
        $users = factory(\App\Employees::class, 150)->make();
    }
}
