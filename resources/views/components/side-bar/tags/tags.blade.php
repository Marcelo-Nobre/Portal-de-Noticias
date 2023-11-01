
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
    </div>
    <div class="clearfix"></div>
    <div style="display: flex; flex-wrap: wrap;">
        <div class="fh5co_tags_all">
        @foreach ($latestTags as $tag)
            <a href="{{ route('blog.index', ['tag' => $tag?->slug]) }}" class="fh5co_tagg">{{ $tag?->name }}</a>
        @endforeach
        </div>
    </div>
