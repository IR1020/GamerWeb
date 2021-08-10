<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [
        'id',
    ];
    
    protected $hidden = [
        'password',
    ];
    
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
