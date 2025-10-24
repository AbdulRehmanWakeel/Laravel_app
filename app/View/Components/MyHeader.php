<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MyHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public string $title;

    public function __construct($title = 'Default Title')
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('view('components.my-header')')->with('title', $this->title);
    }
}
