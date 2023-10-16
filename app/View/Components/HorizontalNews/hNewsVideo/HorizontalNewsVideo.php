<?php

namespace App\View\Components\HorizontalNews\hNewsVideo;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HorizontalNewsVideo extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.horizontal-news.h-news-video.horizontal-news-video');
    }
}
