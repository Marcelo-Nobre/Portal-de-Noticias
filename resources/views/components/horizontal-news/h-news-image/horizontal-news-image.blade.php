<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">
                {{ $title }}
            </div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach (range(1, 5) as $horizontalNewsItem)
                <x-horizontal-news.h-news-image.horizontal-news-image-item
                    title="Video Bacana para ver com sua família e amigos" date="90 de 90" 
                />
            @endforeach
        </div>
    </div>
</div>
