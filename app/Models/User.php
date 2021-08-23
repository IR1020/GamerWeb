<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
    ];
    
    protected $hidden = [
        'password',
    ];
    
    public function reports()
    {
        return $this->hasMany(Report::class)->orderBy('created_at', 'desc');
    }
}
