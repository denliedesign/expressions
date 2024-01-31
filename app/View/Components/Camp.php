<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Camp extends Component
{
    public $image;
    public $title;
    public $info;

    public function __construct($image, $title, $info)
    {
        $this->image = $image;
        $this->title = $title;
        $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.camp');
    }
}
