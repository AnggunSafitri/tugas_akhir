<?php

namespace App\View\Components\Layout\Frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    /**
     * Create a new component instance.
     */
    public $menu;
    public $gambar;
    public function __construct($menu = null, $gambar = null)
    {
        $this->menu = $menu;
        $this->gambar = $gambar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.frontend.breadcrumbs');
    }
}
