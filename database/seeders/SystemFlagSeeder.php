<?php

namespace Database\Seeders;

use App\Models\Systemflag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Event\Telemetry\System;

class SystemFlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $existingAdminLogo = Systemflag::where('name', 'AdminLogo')->exists();
        if (!$existingAdminLogo) {
            Systemflag::insert([
                'valueType' => 'string',
                'name' => 'AdminLogo',
                'value' => 'storage/images/default_logo.png',
                'isActive' => '1',
                'isDelete' => '0',
                'created_at' => now(),
                'updated_at' => now(),
                'displayName' => 'Admin Logo',
                'flagGroupId' => 1,
                'description' => 'Logo displayed in the admin panel',
            ]);
        }

        $existingAppName = Systemflag::where('name', 'AppName')->exists();
        if (!$existingAppName) {
            Systemflag::insert([
                'valueType' => 'string',
                'name' => 'AppName',
                'value' => 'My Application',
                'isActive' => '1',
                'isDelete' => '0',
                'created_at' => now(),
                'updated_at' => now(),
                'displayName' => 'Application Name',
                'flagGroupId' => 1,
                'description' => 'Name of the application displayed in the system',
            ]);
        }
    }
}
