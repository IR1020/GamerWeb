<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $report_id;
    protected $report_title;
    protected $report_text;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
