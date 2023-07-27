<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FeNavbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $active;
    public function __construct($active = '')
    {
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navbar = [
            '/' => "Home",
            "/QCount" => "Quick Count",
            "/kandidat" => "Kandidat",
            "/voting" => "Voting",
        ];
        return view('components.frontend.fe-navbar', compact('navbar'));
    }
}
