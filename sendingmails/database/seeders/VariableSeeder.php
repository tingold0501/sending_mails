<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variables')->insert([
            ['key' => 'name', 'value' => ''],
            ['key' => 'email', 'value' => ''],
            ['key' => 'subject', 'value' => ''],
            ['key' => 'body', 'value' => ''],
        ]);
    }
}
