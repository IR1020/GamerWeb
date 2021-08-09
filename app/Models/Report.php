<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $id;
    protected $title;
    protected $text;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
