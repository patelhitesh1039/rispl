<?php

namespace Database\Seeders;

use App\Models\Flaggroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlaggroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flaggroup::create([
            'flagGroupName' => 'MasterImage',
        ]);
    }
}
