<div class="col-12 text-center d-flex pb-4 pt-4 px-0 mx-0">
    @php
        $elipsis = 0;
    @endphp

    @if ($paginator->previousPageUrl())
        <a href="{{ $paginator->previousPageUrl() }}" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
    @endif

    @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
        @if($page <= 4 || in_array($page, range($paginator->currentPage(), $paginator->currentPage()+1), true))
        <a
            href="{{ $url }}"
            @class([
                'btn_pagging',
                'btn_pagging_active' => ($paginator->currentPage() === $page),
            ])
        >{{ $page }}</a>
        @continue
        @endif

        @if(($elipsis++) === 0 || ($paginator->lastPage() === $page))
            <span class="btn_pagging">...</span>
        @endif
    @endforeach

    @if($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
    @endif
</div>
