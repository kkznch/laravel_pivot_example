<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserGroup extends Pivot
{
    protected $table = 'user_group';

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
