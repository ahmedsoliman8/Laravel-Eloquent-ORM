<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->state(['email_verified_at' => null])->count(3)->create();

        User::factory()
            ->count(3)
            ->state(['email_verified_at' => null])
            ->state(new Sequence(
                ['name' => 'mo'],
                ['name' => 'mo2'],
                ['name' => 'mo3'],
            ))
            ->create();

    }
}
