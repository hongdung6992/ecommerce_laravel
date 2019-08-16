<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('categories')->insert([
      array('id' => 1, 'parent_id' => 0, 'name' => 'Root', 'slug' => 'root'),
      array('id' => 2, 'parent_id' => 1, 'name' => 'Category 1', 'slug' => 'categories-1'),
      array('id' => 3, 'parent_id' => 2, 'name' => 'Category 1.1', 'slug' => 'categories-1-1'),
      array('id' => 4, 'parent_id' => 2, 'name' => 'Category 1.2', 'slug' => 'categories-1-2'),
      array('id' => 5, 'parent_id' => 3, 'name' => 'Category 1.1.2', 'slug' => 'categories-1-1-2')
    ]);
  }
}
