<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Business',
            'Information Technology',
            'Health',
            'Science',
            'Arts',
            'Education'
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
