<div
    {{ $attributes->merge(['class' => 'col-md-6 paddding animate-box']) }}
    data-animate-effect="fadeIn"
>
    <div class="fh5co_suceefh5co_height{{ $classSuffix }}">
        <img src="{{ asset('images/nick-karvounis-78711.jpg') }}" alt="img" />
        <div class="fh5co_suceefh5co_height_position_absolute"></div>
        <div class="fh5co_suceefh5co_height_position_absolute_font{{ $classSuffix }}">
            <div class="">
                <a href="#" class="color_fff"">
                    <i class="fa fa-clock-o">
                        </i>&nbsp;&nbsp;{{ $accessed->created_at?->diffForHumans() }}
                </a>
            </div>
            <div >
                <a
                    href="{{ route('blog.show', $accessed->slug) }}"
                    title="{{ $accessed->title }}"
                    class="fh5co_good_font{{ $classSuffix }}"> {{ str($accessed->title)->limit(35) }} </a>
            </div>
        </div>
    </div>
</div>
