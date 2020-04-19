
<?php

use Illuminate\Database\Seeder;
use App\Site;

class SitesTableSeeder extends Seeder 
{

    public function run()
    {
        Site::create(['name' => 'contests.withlovedarling.com']);
    }

}