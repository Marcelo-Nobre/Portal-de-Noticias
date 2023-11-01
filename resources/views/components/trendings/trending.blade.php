<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        {{-- aqui --}}


        @if ($class == 'owl-carousel owl-theme js')
            <div class="{{ $class }}" id="slider1">
                @foreach (range(1, 5) as $item)
                    <div class="item px-2">
                        <div class="fh5co_latest_trading_img_position_relative">
                            <div class="fh5co_latest_trading_img"><img
                                    src="{{ asset('images/allef-vinicius-108153.jpg') }}" alt=""
                                    class="fh5co_img_special_relative" /></div>
                            <div class="fh5co_latest_trading_img_position_absolute"></div>
                            <div class="fh5co_latest_trading_img_position_absolute_1">
                                <a href="{{ route('blog.show', 'example-post') }}" class="text-white"> Here's a new way
                                    to
                                    take
                                    better photos for
                                    instagram </a>
                                <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson
                                    -{{ $date }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @elseif($class == 'container-fluid pb-4 pt-5')
            <div class="owl-carousel owl-theme" id="slider2">
                @foreach (range(1, 5) as $item)
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="{{ asset('images/39-324x235.jpg') }}"
                                    alt="" />
                            </div>
                            <div>
                                <a href="{{ route('blog.show', 'example-post') }}"
                                    class="d-block fh5co_small_post_heading"><span
                                        class="">{{ $title }}</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> {{ $date }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
