<?php

namespace Database\Seeders;

use App\Models\Employment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class EmploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employment::factory(10)->create(new Sequence([
            'featured' => false,
            'schedule' => 'Part Time'
        ], [
            'featured' => true,
            'schedule' => 'Full Time'
        ]));
    }
}
