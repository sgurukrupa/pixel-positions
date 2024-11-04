<?php

namespace Database\Seeders;

use App\Models\Employment;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmploymentTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $tags = 
        foreach (Employment::all() as $emp)
        {
            $emp->tags()->attach(Tag::all()->random(3));
        }
    }
}
