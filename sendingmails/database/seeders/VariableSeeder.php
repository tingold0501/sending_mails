<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VariableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variables')->insert([
            ['name' => 'email', 'key' => Hash::make('email'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'first_name','key' => Hash::make('first_name'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'last_name', 'key' => Hash::make('last_name'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'subject', 'key' => Hash::make('subject'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'text', 'key' => Hash::make('text'),  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'created_at', 'key' => Hash::make('created_at'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'updated_at','key' => Hash::make('updated_at'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'transactional','key' => Hash::make('transactional'),  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'active','key' => Hash::make('active'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'inactive', 'key' => Hash::make('inactive'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'unsubscribed', 'key' => Hash::make('unsubscribed'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'complaint','key' => Hash::make('complaint'), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
