<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsHorizontalVideo extends Component
{

    public $date;
    /**
     * Create a new component instance.
     */
    public function __construct( string $date)
    {
        $this->date = $date;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-horizontal-video');
    }
}