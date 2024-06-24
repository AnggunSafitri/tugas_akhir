<?php

namespace App\View\Components\Layout\Sidebar;

use Closure;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $icon;
    public $label;
    public $url;
    public $active;
    public function __construct($url = null, $label = null, $icon = null)
    {
        if(!$url) throw new Exception("Component Menu Item Sidebar Memerlukan URL");
        $this->icon = $icon;
        $this->label = $label;
        $this->url = $url;
        $this->active = $this->checkActive();
    }

    public function checkActive()
    {
        $state = true;
        $url = $this->url;
        $arr_url = explode('/', $url);
        foreach ($arr_url as $key => $value) {
            $segment = request()->segment($key + 1);
            if($segment != $value) $state = false;
        }
        // dd($state);
        return $state;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.sidebar.menu-item');
    }
}
