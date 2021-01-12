<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchArea extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $labelButton;
    public $action;

    public function __construct($title, $labelButton, $action)
    {
        $this->title = $title;
        $this->labelButton = $labelButton;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.search-area');
    }
}
