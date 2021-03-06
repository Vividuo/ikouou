<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['title', 'slug'];
    protected $hidden = ['pivot', 'created_at', 'updated_at'];

    public function accesses()
    {
        return $this->belongsToMany('App\Models\Access', 'role_access', 'role_id', 'access_id');
    }
}
