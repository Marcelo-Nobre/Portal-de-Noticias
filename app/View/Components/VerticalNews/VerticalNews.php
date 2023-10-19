<?php

namespace App\View\Components\VerticalNews;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\News\News;

class VerticalNews extends Component
{
    public ?\Illuminate\Pagination\LengthAwarePaginator $latestNews;

    /**
     * Create a new component instance.
     */
    public function __construct(
        ?int $perPage = null
    ) {
        $perPage ??= request()->get('perPage', 5);

        $perPage = is_numeric($perPage) && $perPage > 1 && $perPage <= 20 ? intval($perPage) : 5;

        $this->latestNews = News::orderBy('id', 'DESC')->paginate($perPage);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.vertical-news.vertical-news');
    }
}
