<div class="row pb-4">
    <div class="col-md-5">
        <div class="fh5co_hover_news_img">
            <a href="{{ route('blog.show', 'example-post') }}">
                <div class="fh5co_news_img">
                    <img class="img-post-list-item" src="{{
                        $news->cover ? \Storage::disk('public')->url($news->cover) : asset('images/nathan-mcbride-229637.jpg')
                    }}" alt="{{ $news->title }}" />
                </div>
            </a>

            <div></div>
        </div>
    </div>
    <div class="col-md-7 animate-box">
        <a href="{{ route('blog.show', 'example-post') }}" class="fh5co_magna py-2">
            <h4 title="{{ $news->title }}">{{ str($news->title)->limit(45) }}</h4>
        </a>
        <div class="mb-2">
            <a href="{{ route('blog.show', 'example-post') }}">Thomas</a>
            <span class="fh5co_mini_time py-1 text-muted ml-2" title="{{ $news?->created_at?->format('c') }}">{{ $news?->created_at?->diffForHumans() }}</span>


        </div>
        <div class="fh5co_consectetur">{{ str($news->content)->limit(150) }}</div>
    </div>
</div>
