<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class News extends Component
{
    public string $title;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string|array|null $bodyClass = null,
        string|null $title = null,
    ) {
        $this->title = $title ?? config('app.name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.news.app');
    }
}
