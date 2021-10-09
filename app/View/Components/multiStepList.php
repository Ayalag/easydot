<?php

namespace App\View\Components;

use Illuminate\View\Component;

class multiStepList extends Component
{
    public $stepInfo2;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($stepInfo2='')
    {
        $this->stepInfo2 = $stepInfo2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.multi-step-list');
    }
}
