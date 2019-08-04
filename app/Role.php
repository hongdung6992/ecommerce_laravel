<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table = 'roles';
  protected $fillable = ['name', 'slug'];

  public function permissions()
  {
    return $this->belongsToMany(Permission::class, 'role_permission');
  }

  public function users()
  {
    return $this->hasMany(User::class);
  }
}
