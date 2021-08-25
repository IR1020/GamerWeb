<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Good extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'report_id',
    ];
    
    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
