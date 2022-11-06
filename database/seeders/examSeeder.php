<?php

namespace Database\Seeders;
use App\Models\exam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class examSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        exam::create([
            'task_name' => 'Ron Andajer',
            'task_details' => 'Hello My name is Ron',
            'created_date' => '2022-11-6',
            'category' => 'Programming',
            'owner' => 'Ron'
        ]);

        exam::create([
            'task_name' => 'Shiela Andajer',
            'task_details' => 'Hello My name is Shiela',
            'created_date' => '2022-11-6',
            'category' => 'Programming',
            'owner' => 'Shiela'
        ]);
        exam::create([
            'task_name' => 'SpiderDate',
            'task_details' => 'watching spiderman with my date',
            'created_date' => '2022-11-6',
            'category' => 'date',
            'owner' => 'Peter parker'
        ]);
        exam::create([
            'task_name' => 'Saving gotham',
            'task_details' => 'batman will come to save gotham city',
            'created_date' => '2022-11-6',
            'category' => 'heroics',
            'owner' => 'bruce wayne'
        ]);
        exam::create([
            'task_name' => 'avenging earth',
            'task_details' => 'avengers will assemble to avenge the earth',
            'created_date' => '2022-11-6',
            'category' => 'heroics',
            'owner' => 'steve rogers'
        ]);
        exam::create([
            'task_name' => 'sleep',
            'task_details' => 'just sleeping',
            'created_date' => '2022-11-6',
            'category' => 'resting',
            'owner' => 'sally'
        ]);
        exam::create([
            'task_name' => 'cleaning',
            'task_details' => 'clean the house and the garden',
            'created_date' => '2022-11-6',
            'category' => 'housekeeping',
            'owner' => 'honey'
        ]);
        exam::create([
            'task_name' => 'playing',
            'task_details' => 'play with the kids in the neighborhood',
            'created_date' => '2022-11-6',
            'category' => 'leisure',
            'owner' => 'robby'
        ]);
        exam::create([
            'task_name' => 'bathing',
            'task_details' => 'taking a bath after playing',
            'created_date' => '2022-11-6',
            'category' => 'hygiene',
            'owner' => 'robby'
        ]);
        exam::create([
            'task_name' => 'Study',
            'task_details' => 'Reading books and writing',
            'created_date' => '2022-11-6',
            'category' => 'education',
            'owner' => 'robby'
        ]);

    }
}
