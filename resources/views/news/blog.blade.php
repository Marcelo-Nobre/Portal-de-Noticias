<x-layouts.news>

    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <x-vertical-news.vertical-news perPage="6" />
                <x-side-bar.side-bar />
            </div>
        </div>
    </div>
    <x-trendings.trending class="container-fluid pb-4 pt-5" title="ok" date="90 de 90" />
    {{-- <x-horizontal-news.h-news-image.horizontal-news-image title="Trending"/> --}}

</x-layouts.news>
