<?php

namespace App\View\Components;

use Illuminate\View\Component;

class btnMain extends Component
{
    public $link;
    public $classname;
    public $classname2;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $classname='', $classname2='')
    {
        $this->link = $link;
        $this->classname = $classname;
        $this->classname2 = $classname2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btn-main');
    }
}
