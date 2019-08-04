<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('permissions')->insert([
      'id' => 1,
      'name' => 'Full',
      'slug' => 'full'
    ]);
  }
}
