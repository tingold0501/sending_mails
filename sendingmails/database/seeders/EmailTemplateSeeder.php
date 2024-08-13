<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class EmailTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('email_templates')->insert([
            [
                'title' => 'Welcome Email',
                'content' => 'Welcome ',
                'body' => 'Welcome {{name}}',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Welcome Email',
                'content' => 'Welcome ',
                'body' => '<!DOCTYPE html><html><head><title>Template 1</title></head><body><h1>Hello from Template 1</h1></body></html>',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
