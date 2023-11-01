<x-layouts.news>
    <div class="container-fluid paddding mb-5">
        <x-accessed.accessed/>
    </div>
    <div class="container-fluid pt-3">

        <x-trendings.trending class="owl-carousel owl-theme js" title="ok" date="90 de 90"/>
    </div>
    <x-horizontal-news.h-news-image.horizontal-news-image title="News"/>
    {{-- <x-horizontal-news.h-news-video.horizontal-news-video /> --}}
    <x-horizontal-news.h-news-video.horizontal-news-video/>
    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <x-vertical-news.vertical-news perPage="5" />
                <x-side-bar.side-bar />
            </div>
        </div>
    </div>
</x-layouts.news>
