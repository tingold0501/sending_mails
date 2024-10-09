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
            ['placeholder' => '{email}','name' => 'email', 'key' => Hash::make('email'), 'created_at' => now(), 'updated_at' => now()],
            ['placeholder' => '{first_name}','name' => 'first_name','key' => Hash::make('first_name'), 'created_at' => now(), 'updated_at' => now()],
            ['placeholder' => '{last_name}','name' => 'last_name', 'key' => Hash::make('last_name'), 'created_at' => now(), 'updated_at' => now()],
            ['placeholder' => '{subject}','name' => 'subject', 'key' => Hash::make('subject'), 'created_at' => now(), 'updated_at' => now()],
            ['placeholder' => '{text}','name' => 'text', 'key' => Hash::make('text'),  'created_at' => now(), 'updated_at' => now()],
            ['placeholder' => '{created_at}','name' => 'created_at', 'key' => Hash::make('created_at'), 'created_at' => now(), 'updated_at' => now()],
            ['placeholder' => '{updated_at}','name' => 'updated_at','key' => Hash::make('updated_at'), 'created_at' => now(), 'updated_at' => now()],
            ['placeholder' => '{transactional}','name' => 'transactional','key' => Hash::make('transactional'),  'created_at' => now(), 'updated_at' => now()],
            ['placeholder' => '{active}','name' => 'active','key' => Hash::make('active'), 'created_at' => now(), 'updated_at' => now()],
            ['placeholder' => '{inactive}','name' => 'inactive', 'key' => Hash::make('inactive'), 'created_at' => now(), 'updated_at' => now()],
            ['placeholder' => '{unsubscribed}','name' => 'unsubscribed', 'key' => Hash::make('unsubscribed'), 'created_at' => now(), 'updated_at' => now()],
            ['placeholder' => '{complaint}','name' => 'complaint','key' => Hash::make('complaint'), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
