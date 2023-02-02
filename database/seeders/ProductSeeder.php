<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\LazyCollection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $csvData = fopen(public_path('products.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Product::create([
                    "name" => $data[0],
                    "slug" => $data[1],
                    "sku" => $data[2],
                    "price" => $data[3],
                    "quantity" => $data[4],
                    "description" => $data[5],
                    "images" => $data[6],
                    "categories" => $data[7],
                    "size" => $data[8],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}



// "name" => $row[0],
// "slug" => $row[1],
// "sku" => $row[2],
// "price" => $row[3],
// "description" => $row[4],
// "images" => $row[5],
// "categories" => $row[6],
// "size" => $row[7],