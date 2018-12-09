<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name'];

    public function groups()
    {
        return $this
            ->belongsToMany(Group::class, 'user_group')
            ->using(UserGroup::class)->withPivot(['role_id']);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_group');
    }
}
