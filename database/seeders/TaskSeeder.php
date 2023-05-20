<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 4; $i++) { 
            for ($j=1; $j < 4; $j++) { 
                DB::table('tasks')->insert([
                    'project_id' => $i,
                    'task_name' => 'Task' .' '. $j,
                    'created_at' => Carbon::now()
                ]);
            }
        }
    }
}
