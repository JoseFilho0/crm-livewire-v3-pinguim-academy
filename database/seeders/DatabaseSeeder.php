<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            UsersSeeder::class,
        ]);

        $user = User::factory()
            ->withPermission('be an admin')
            ->create([
                'name'  => 'Admin CRM',
                'email' => 'admin@crm.com',
            ]);
    }
}
