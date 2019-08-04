<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class RolesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('roles')->insert([
      'id' => 1,
      'name' => 'Admin',
      'slug' => 'admin'
    ]);
    
    $permission = Permission::find(1);
    $role = Role::find(1);
    $role->permissions()->save($permission);
  }
}
