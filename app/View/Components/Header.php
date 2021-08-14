<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $flag;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(!session()->has('user_id')){
            $this->flag = true;
        }else{
            $this->flag = false;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
