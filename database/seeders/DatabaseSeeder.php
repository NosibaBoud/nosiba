<?php

namespace Database\Seeders;

use App\Models\department;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
        public function run(): void
        {
            $this->post();
        }


        private function post ()
        {
            $names=[
                'IT', 'Medicine',
            ];
        }
    }
