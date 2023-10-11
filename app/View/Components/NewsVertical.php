<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsVertical extends Component
{
    public $title;
    public $autor;
    public $description;
    /**
     * Create a new component instance.
     */
    public function __construct(string $title, string $autor, string $description)
    {
        $this->title = $title;
        $this->autor = $autor;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-vertical');
    }
}
