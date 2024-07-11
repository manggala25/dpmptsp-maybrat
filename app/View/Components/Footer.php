<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public $jam_layanan;
    /**
     * Create a new component instance.
     */
    public function __construct($jam_layanan)
    {
        $this->jam_layanan = $jam_layanan;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
