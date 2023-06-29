<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LiveMusaTemplate extends Component
{

    public string $name ;

    public string $age;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $age )
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.live-musa-template');
    }
}
