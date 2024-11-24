<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InsurancePolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('insurance_policies')->insert([
            [
                'policy_name' => 'Health Insurance',
                'sub_category_id' => 1, // Assuming 'Medical' Sub-Category ID is 1
                'details' => 'Health insurance policy with a sum assured of ₹5,00,000.',
                'premium' => 10000.00,
                'coverage_amount' => 500000.00,
                'tenure' => 1,
                'status' => 1, // Assuming Active = 1
                'created_date' => '2024-01-01',
                'created_by' => 1, // Assuming Admin/User ID 1 is the creator
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'policy_name' => 'Life Insurance',
                'sub_category_id' => 2, // Assuming 'Term Life' Sub-Category ID is 2
                'details' => 'Life insurance policy with a sum assured of ₹10,00,000.',
                'premium' => 15000.00,
                'coverage_amount' => 1000000.00,
                'tenure' => 5,
                'status' => 1, // Assuming Active = 1
                'created_date' => '2024-02-15',
                'created_by' => 1, // Assuming Admin/User ID 1 is the creator
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'policy_name' => 'Accident Insurance',
                'sub_category_id' => 3, // Assuming 'Personal Accident' Sub-Category ID is 3
                'details' => 'Accident insurance policy with a sum assured of ₹3,00,000.',
                'premium' => 8000.00,
                'coverage_amount' => 300000.00,
                'tenure' => 2,
                'status' => 1, // Assuming Active = 1
                'created_date' => '2024-02-20',
                'created_by' => 1, // Assuming Admin/User ID 1 is the creator
                'updated_by' => null,
                'deleted_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
