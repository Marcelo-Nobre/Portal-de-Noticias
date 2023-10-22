 <div class="row mx-0">
     @foreach ($accessedNews as $index => $accessedNewsItem)
        @if ($index == 0)
            <x-accessed.accessed-item
            :accessed="$accessedNewsItem"
            class="col-12"
            />
            @continue
        @endif

        @if($index == 1)
        <div class="col-md-6">
            <div class="row">
        @endif
                <x-accessed.accessed-item
                :accessed="$accessedNewsItem"
                class="col-6"
                classSuffix="_2"
                />
        @if($loop->last)
            </div>
        </div>
        @endif
     @endforeach
 </div>
