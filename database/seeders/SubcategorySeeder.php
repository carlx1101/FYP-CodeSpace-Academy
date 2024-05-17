<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Seeder;
use App\Models\Admin\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           // Fetch all categories to associate subcategories with them
           $categories = Category::all();

           // Define subcategories with their respective parent category
           $subcategories = [
               'Business' => ['Entrepreneurship', 'Management', 'Marketing'],
               'Information Technology' => ['Programming', 'Networking', 'Cybersecurity'],
               'Health' => ['Nutrition', 'Fitness', 'Mental Health'],
               'Science' => ['Physics', 'Biology', 'Chemistry'],
               'Arts' => ['Music', 'Painting', 'Dance'],
               'Education' => ['Teaching', 'Learning', 'Research']
           ];

           // Insert subcategories into the database
           foreach ($subcategories as $categoryName => $subs) {
               $category = $categories->firstWhere('name', $categoryName);

               foreach ($subs as $sub) {
                   Subcategory::create([
                       'name' => $sub,
                       'category_id' => $category->id
                   ]);
               }
           }
    }
}
