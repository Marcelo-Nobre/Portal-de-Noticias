<?php

namespace App\View\Components\SideBar\Tags;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TagsItem extends Component
{
    public $topic;
    /**
     * Create a new component instance.
     */
    public function __construct(string $topic)
    {
        $this->topic = $topic;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.side-bar.tags.tags-item');
    }
}
