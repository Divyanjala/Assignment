<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('departments')->insert([
            'name' => 'Sales & Marketing',
            'code' => '#1SALES'
        ]);
        DB::table('departments')->insert( [
            'name' => 'Purchasing,',
            'code' => '#2PURCHASING'
        ]);
        DB::table('departments')->insert([
            'name' => 'Finance,',
            'code' => '#3FINANCE'
        ]);
        DB::table('departments')->insert([
            'name' => 'IT,',
            'code' => '#4IT'
        ]);
        DB::table('departments')->insert([
            'name' => 'HR,',
            'code' => '#5HR'
        ]);
        DB::table('departments')->insert([
            'name' => 'R&D,',
            'code' => '#6R&D'
        ]);
        DB::table('departments')->insert([
            'name' => 'Engineering Design',
            'code' => '#7DESIGN'
        ]);
        DB::table('departments')->insert([
            'name' => 'Engineering',
            'code' => '#8ENGINEERING'
        ]);
        DB::table('departments')->insert([
            'name' => 'Factory Management',
            'code' => '#9MANAGEMENT'
        ]);


        //units
        DB::table('units')->insert([
            'name' => 'Unit 1',
            'code' => '#1UNIT',
            'department_id'=>7
        ]);
        DB::table('units')->insert([
            'name' => 'Unit 2',
            'code' => '#2UNIT',
            'department_id'=>7
        ]);
        DB::table('units')->insert([
            'name' => 'Unit 3',
            'code' => '#3UNIT',
            'department_id'=>7
        ]);
        DB::table('units')->insert([
            'name' => 'Unit 4',
            'code' => '#4UNIT',
            'department_id'=>8
        ]);

    }
}
