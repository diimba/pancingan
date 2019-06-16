<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(UsersSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(SubtestSeeder::class);
        $this->call(RuleSeeder::class);
        $this->call(SoalSeeder::class);
        $this->call(HasilSeeder::class);    
    }
}
