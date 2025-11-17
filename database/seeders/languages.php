<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class languages extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages =['English','Spanish','Hindi','Tamil'];

        foreach($languages as $lang)
        {
          Language::create(['language_name'=> $lang]);  
        }
    }
}
