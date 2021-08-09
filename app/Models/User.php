<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $id;
    protected $name;
    protected $password;
    
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
