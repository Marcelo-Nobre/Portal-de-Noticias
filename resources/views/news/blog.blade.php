<x-layouts.news>

<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <x-vertical-news.vertical-news />
           <x-side-bar.side-bar />

        </div>
        <div class="row mx-0">
           <x-paginate/>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
            <x-horizontal-news.h-news-image.horizontal-news-image title="Trending"/>
    </div>
</div>
</x-layouts.news>
