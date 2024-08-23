<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contract_statues')->insert([
            ['name' => 'Transactional', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Inactive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Unsubscribed', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Complaint', 'created_at' => now(), 'updated_at' => now()],
    ]);
    }
}
