<?php

namespace App\View\Components\VerticalNews;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VerticalNewsItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $author;
    public $description;
    public function __construct(string $title, string $author, string $description)
    {
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.vertical-news.vertical-news-item');
    }
}
