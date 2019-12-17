<?php

use Illuminate\Database\Seeder;

class Jobs extends Seeder
{
    
    public function run()
    {
        $users = factory(\App\Jobs::class, 10)->make();
    }
    
}
