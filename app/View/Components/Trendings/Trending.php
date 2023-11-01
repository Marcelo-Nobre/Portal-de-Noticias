<?php

namespace App\View\Components\Trendings;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Trending extends Component
{
    public string $class;
    public string $title;
    public string $date;

    /**
     * Create a new component instance.
     */
    public function __construct(string $class, string $title, string $date)
    {
        $this->class = $class;
        $this->title = $title;
        $this->date = $date;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.trendings.trending');
    }
}
