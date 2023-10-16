<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
    </div>
    @foreach (range(1, 5) as $verticalNewsItem)
        <x-vertical-news.vertical-news-item title="Video Bacana para ver com sua família e amigos" author="Thomas"
            description="Vídeos educativos para toda a família e amigos com o intuito de educar as pessoas" />
    @endforeach
</div>
