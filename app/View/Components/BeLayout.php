<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BeLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $active;
    public $title;
    public $header;
    public $subheader;
    public function __construct($active = '', $title = '', $subheader = '', $header = '')
    {
        $this->active = $active;
        $this->title = $title;
        $this->header = $header;
        $this->subheader = $subheader;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.be-layout');
    }
}
