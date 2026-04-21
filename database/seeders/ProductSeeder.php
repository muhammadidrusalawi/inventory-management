<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::pluck('id', 'name');

        $products = [
            // ELECTRONICS
            ['ELC-001', 'Smartphone Android', 'Electronics', 'pcs', 2500000, 3200000, 25],
            ['ELC-002', 'Wireless Earbuds', 'Electronics', 'pcs', 150000, 300000, 80],
            ['ELC-003', 'Smartwatch Basic', 'Electronics', 'pcs', 400000, 650000, 40],

            // COMPUTERS
            ['CMP-001', 'Laptop Core i5', 'Computers', 'pcs', 7000000, 8500000, 15],
            ['CMP-002', 'Desktop PC Ryzen 5', 'Computers', 'pcs', 6000000, 7800000, 10],
            ['CMP-003', 'Monitor 24 Inch', 'Computers', 'pcs', 1200000, 1500000, 20],

            // ACCESSORIES
            ['ACC-001', 'Wireless Mouse', 'Accessories', 'pcs', 50000, 85000, 100],
            ['ACC-002', 'Keyboard Mechanical', 'Accessories', 'pcs', 250000, 400000, 60],
            ['ACC-003', 'Laptop Sleeve Bag', 'Accessories', 'pcs', 70000, 120000, 90],

            // OFFICE SUPPLIES
            ['OFF-001', 'Printer Ink', 'Office Supplies', 'pcs', 80000, 120000, 50],
            ['OFF-002', 'Stapler Heavy Duty', 'Office Supplies', 'pcs', 30000, 55000, 70],
            ['OFF-003', 'Paper A4 500 Sheets', 'Office Supplies', 'pack', 45000, 65000, 120],

            // FURNITURE
            ['FUR-001', 'Office Chair', 'Furniture', 'pcs', 400000, 650000, 10],
            ['FUR-002', 'Wooden Desk', 'Furniture', 'pcs', 800000, 1200000, 8],
            ['FUR-003', 'Bookshelf Minimalist', 'Furniture', 'pcs', 500000, 750000, 12],

            // STATIONERY
            ['STA-001', 'Ballpoint Pen', 'Stationery', 'box', 20000, 35000, 200],
            ['STA-002', 'Notebook A5', 'Stationery', 'pcs', 10000, 20000, 300],
            ['STA-003', 'Highlighter Set', 'Stationery', 'set', 25000, 45000, 150],

            // CLEANING
            ['CLN-001', 'Floor Cleaner', 'Cleaning Supplies', 'bottle', 15000, 25000, 80],
            ['CLN-002', 'Disinfectant Spray', 'Cleaning Supplies', 'bottle', 20000, 35000, 60],
            ['CLN-003', 'Mop Set', 'Cleaning Supplies', 'set', 50000, 85000, 40],

            // FOOD & BEVERAGES
            ['FDB-001', 'Bottled Water', 'Food & Beverages', 'box', 30000, 50000, 60],
            ['FDB-002', 'Instant Coffee', 'Food & Beverages', 'pack', 25000, 45000, 90],
            ['FDB-003', 'Snack Box Mix', 'Food & Beverages', 'box', 40000, 70000, 50],

            // HEALTH
            ['HPC-001', 'Hand Sanitizer', 'Health & Personal Care', 'bottle', 10000, 18000, 120],
            ['HPC-002', 'Face Mask Medical', 'Health & Personal Care', 'box', 20000, 35000, 200],
            ['HPC-003', 'Vitamin C Tablets', 'Health & Personal Care', 'bottle', 30000, 55000, 70],

            // AUTOMOTIVE
            ['AUT-001', 'Engine Oil', 'Automotive', 'liter', 50000, 75000, 40],
            ['AUT-002', 'Car Wiper Blade', 'Automotive', 'pcs', 60000, 95000, 30],
            ['AUT-003', 'Motorcycle Helmet', 'Automotive', 'pcs', 120000, 200000, 25],
        ];

        foreach ($products as $p) {
            Product::create([
                'id' => Str::uuid(),
                'sku' => $p[0],
                'name' => $p[1],
                'category_id' => $categories[$p[2]] ?? null,
                'unit' => $p[3],
                'purchase_price' => $p[4],
                'selling_price' => $p[5],
                'current_stock' => $p[6],
            ]);
        }
    }
}
