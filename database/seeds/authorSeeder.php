<?php

use Illuminate\Database\Seeder;
use DB;
use App\author;
class authorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert(['name' => str_random(10),'address' => str_random(10),'email' => str_random(10).'@gmail.com','contact' => bigint_random(10),'username' => str_random(10),'password' => bcrypt('secret')]);
        // $table=new author();
        // $table->name="sunam";
        // $table->address="changathali";
        // $table->email="sunam@gmail.com";
        // $table->contact=98765432;
        // $table->username="sunam";
        // $table->password=bcrypt('sunam');
        // $table->save();
    }
}
