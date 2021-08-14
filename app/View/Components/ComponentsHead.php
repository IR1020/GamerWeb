<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComponentsHead extends Component
{
    public $css;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($css)
    {
        $this->css = $css;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.components-head');
    }
}
