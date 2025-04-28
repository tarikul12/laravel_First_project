<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mesageBanner extends Component
{
    /**
     * Create a new component instance.
     */
     public $msg;
     public $class;
    // public $type;

    public function __construct($msg)
    {
        //
        $this->msg=$msg;
        $this->class=$class;
        // $this->type=$type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mesage-banner');
    }
}
