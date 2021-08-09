<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey='user_id';
    protected $user_id;
    protected $user_name;
    protected $user_pass;
    
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
