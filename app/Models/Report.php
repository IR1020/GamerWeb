<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $casts=['report_id'=>'int'];
    private $report_id;
    private $report_title;
    private $report_text;
    
    public function Report($report_id,$report_title,$report_text)
    {
        $this->$report_id=$report_id;
        $this->$report_title=$report_title;
        $this->$report_text=$report_text;
    }
    
    public function getReportId()
    {
        return $this->report_id;
    }
    
    public function getReportTitle()
    {
        return $this->report_title;
    }
    
    public function getReportText()
    {
        return $this->report_text;
    }
}
