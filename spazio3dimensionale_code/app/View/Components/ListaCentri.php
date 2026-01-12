<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListaCentri extends Component
{
    public $centri;
    /**
     * Create a new component instance.
     */
    public function __construct($centri)
    {
        $this->centri = $centri;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lista-centri');
    }
}
