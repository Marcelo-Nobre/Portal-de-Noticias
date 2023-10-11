<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsHorizontal extends Component
{
    public $title;
    public $date;
    /**
     * Create a new component instance.
     */
    public function __construct(string $title, string $date)
    {
        $this->title = $title;
        $this->date = $date;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-horizontal');
    }
}
