<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define categories and their sub-categories
        $data = [
            [
                'name' => 'Life Insurance',
                'description' => 'Policies to provide financial security for life.',
                'created_by' => 1, // Replace with a valid user ID
                'sub_categories' => [
                    ['name' => 'Term Insurance', 'description' => 'Pure risk cover with no maturity benefit.', 'created_by' => 1],
                    ['name' => 'Whole Life Insurance', 'description' => 'Covers policyholder for their entire life.', 'created_by' => 1],
                ],
            ],
            [
                'name' => 'Health Insurance',
                'description' => 'Covers medical and surgical expenses.',
                'created_by' => 1, // Replace with a valid user ID
                'sub_categories' => [
                    ['name' => 'Individual Health Insurance', 'description' => 'Covers individual medical expenses.', 'created_by' => 1],
                    ['name' => 'Family Health Insurance', 'description' => 'Covers medical expenses for the entire family.', 'created_by' => 1],
                ],
            ],
            [
                'name' => 'Vehicle Insurance',
                'description' => 'Covers damages to vehicles and third-party liabilities.',
                'created_by' => 1, // Replace with a valid user ID
                'sub_categories' => [
                    ['name' => 'Car Insurance', 'description' => 'Coverage for cars against damages and liabilities.', 'created_by' => 1],
                    ['name' => 'Bike Insurance', 'description' => 'Coverage for bikes and two-wheelers.', 'created_by' => 1],
                ],
            ],
        ];

        // Insert categories and sub-categories
        foreach ($data as $category) {
            $categoryId = DB::table('categories')->insertGetId([
                'name' => $category['name'],
                'description' => $category['description'],
                'created_by' => $category['created_by'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($category['sub_categories'] as $subCategory) {
                DB::table('sub_categories')->insert([
                    'name' => $subCategory['name'],
                    'category_id' => $categoryId,
                    'description' => $subCategory['description'],
                    'created_by' => $subCategory['created_by'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
