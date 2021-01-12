<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlterCards extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $message;
    public $color;
    public $link;

    public function __construct($message, $color, $link)
    {
        $this->color = $color;
        $this->message = $message;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alter-cards');
    }
}
