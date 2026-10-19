<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin', 'password' => 'password', 'is_super_admin' => true],
        );

        if (! $admin->is_super_admin) {
            $admin->is_super_admin = true;
            $admin->save();
        }

        $this->call(SampleContentSeeder::class);

        Profile::current();
    }
}
