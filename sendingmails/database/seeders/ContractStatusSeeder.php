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
        DB::table('contact_statues')->insert([
            ['name' => 'Transactional'],
            ['name' => 'Active'],
            ['name' => 'Inactive'],
            ['name' => 'Unsubscribed'],
            ['name' => 'Complaint'],
    ]);
    }
}
