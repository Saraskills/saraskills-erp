<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::firstOrCreate(
            ['code' => 'SARASKILLS'],
            [
                'name' => 'SaraSkills ERP',

                'email' => 'admin@saraskills.com',

                'phone' => '9999999999',

                'website' => 'https://saraskills.com',

                'gst_number' => 'GST123456789',

                'roc_number' => 'ROC123456',

                'currency' => 'INR',

                'timezone' => 'Asia/Kolkata',

                'status' => true,
            ]
        );
    }
}