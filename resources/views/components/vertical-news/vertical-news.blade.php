<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
    </div>

    @foreach ($latestNews as $verticalNewsItem)
        <x-vertical-news.vertical-news-item
            :news="$verticalNewsItem"
        />
    @endforeach

    <div class="row mx-0">
        <x-paginate :records="$latestNews"/>
     </div>
</div>
