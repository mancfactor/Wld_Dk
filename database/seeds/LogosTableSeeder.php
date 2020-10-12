
<?php

use Illuminate\Database\Seeder;
use App\Logo;

class LogosTableSeeder extends Seeder 
{

    public function run()
    {
        Logo::create(['name' => 'contests.withlovedarling.com']);
    }

}