<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'description' => 'Electronic devices such as phones, laptops, and gadgets'],
            ['name' => 'Computers', 'description' => 'Desktop computers, PCs, and laptops'],
            ['name' => 'Accessories', 'description' => 'Gadget and computer accessories'],
            ['name' => 'Office Supplies', 'description' => 'General office equipment and supplies'],
            ['name' => 'Furniture', 'description' => 'Office and home furniture such as desks and chairs'],
            ['name' => 'Stationery', 'description' => 'School and office stationery items'],
            ['name' => 'Cleaning Supplies', 'description' => 'Cleaning tools and hygiene products'],
            ['name' => 'Food & Beverages', 'description' => 'Food and drink products'],
            ['name' => 'Health & Personal Care', 'description' => 'Health and personal care products'],
            ['name' => 'Automotive', 'description' => 'Vehicle parts and automotive accessories'],
            ['name' => 'Tools & Hardware', 'description' => 'Construction and repair tools'],
            ['name' => 'Packaging', 'description' => 'Packaging materials and supplies'],
            ['name' => 'Textiles', 'description' => 'Fabric and textile materials'],
            ['name' => 'Clothing', 'description' => 'Apparel and fashion items'],
            ['name' => 'Footwear', 'description' => 'Shoes, sandals, and related products'],
            ['name' => 'Toys', 'description' => 'Children’s toys and games'],
            ['name' => 'Sports Equipment', 'description' => 'Sports and fitness equipment'],
            ['name' => 'Premium Stationery', 'description' => 'High-quality and custom stationery'],
            ['name' => 'Warehouse Supplies', 'description' => 'Storage and warehouse equipment'],
            ['name' => 'Miscellaneous', 'description' => 'Other uncategorized items'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
