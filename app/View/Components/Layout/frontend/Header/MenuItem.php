<?php

namespace App\View\Components\Layout\Frontend\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $label;
    public $url;
    public $active;
    public function __construct($label, $url)
    {
        $this->url = $url;
        $this->label = $label;
        $this->active = $this->checkActive();
    }

    public function checkActive()
    {
        $state = true;
        $url = $this->url;
        $arr_url = explode('/', $url);
        // dd($arr_url);
        foreach ($arr_url as $key => $value) {
            $segment = request()->segment($key + 1);
            if($segment != $value) $state = false;
        }
        return $state;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.frontend.header.menu-item');
    }
}
