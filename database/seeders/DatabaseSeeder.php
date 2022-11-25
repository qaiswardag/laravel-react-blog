<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->create([
            'id' => 1,
            'name' => 'Qais Wardag',
            'email' => 'qais@qais.dk',
            'password' => Hash::make('123456')
        ]);


        $this->call(CategorySeeder::class);
        $this->call(PostSeeder::class);

        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
