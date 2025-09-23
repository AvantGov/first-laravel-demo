<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavLink extends Component
{
    public string $uri;
    public string $name;
    /**
     * @param string $uri
     * @param string $name
     */
    public function __construct(string $uri, string $name)
    {
        $this->uri = $uri;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-link');
    }
}
