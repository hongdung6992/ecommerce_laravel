<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('products')->insert([
      array(
        'id' => 1, 'category_id' => 2, 'name' => 'Product 1', 'code' => 'PROD001', 'color' => 'Blue',
        'description' => 'Product 1 description', 'price' => 1000, 'image' => 'default.jpg'
      ),
      array(
        'id' => 2, 'category_id' => 2, 'name' => 'Product 2', 'code' => 'PROD002', 'color' => 'Yellow',
        'description' => 'Product 2 description', 'price' => 2000, 'image' => 'default.jpg'
      ),
      array(
        'id' => 3, 'category_id' => 6, 'name' => 'Product 3', 'code' => 'PROD003', 'color' => 'Red',
        'description' => 'Product 3 description', 'price' => 5000, 'image' => 'default.jpg'
      ),
      array(
        'id' => 4, 'category_id' => 6, 'name' => 'Product 4', 'code' => 'PROD004', 'color' => 'Green',
        'description' => 'Product 4 description', 'price' => 10000, 'image' => 'default.jpg'
      )
    ]);
  }
}
