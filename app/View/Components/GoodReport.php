<?php

namespace App\View\Components;

use App\Models\Good;
use App\Models\Report;
use Illuminate\View\Component;

class GoodReport extends Component
{
    public $user_flag;
    public $good_flag;
    public $count_good;
    public $user_id;
    public $report_id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $my_id = session('user_id');
        
        $writer_id = Report::where('id',$id)->value('user_id');
        
        $good_id = Good::where('report_id',$id)->value('user_id');
        
        $this->count_good = Good::where('report_id',$id)->count('user_id');
        
        $this->user_id = $my_id;
        $this->report_id = $id;
        
        if($my_id==$writer_id){
            $this->user_flag=true;
        }elseif($good_id!=null){
            $this->good_flag=true;
        }else{
            $this->good_flag=false;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.good-report');
    }
}
