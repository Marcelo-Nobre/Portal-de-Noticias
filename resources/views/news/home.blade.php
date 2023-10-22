<x-layouts.news>
    <div class="container-fluid paddding mb-5">
        <x-accessed.accessed/>
    </div>
    <div class="container-fluid pt-3">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
            </div>
            <div class="owl-carousel owl-theme js" id="slider1">
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="{{ asset('images/allef-vinicius-108153.jpg') }}" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="{{ route('blog.show', 'example-post') }}" class="text-white"> Here's a new way to take better photos for
                                instagram </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="{{ asset('images/abigail-keenan-65477.jpg') }}" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="{{ route('blog.show', 'example-post') }}" class="text-white"> Here's a new way to take better photos for
                                instagram </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="{{ asset('images/ryan-moreno-98837.jpg') }}" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="{{ route('blog.show', 'example-post') }}" class="text-white"> Here's a new way to take better photos for
                                instagram </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="{{ asset('images/science-578x362.jpg') }}" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="{{ route('blog.show', 'example-post') }}" class="text-white"> Here's a new way to take better photos for
                                instagram </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="{{ asset('images/nick-karvounis-78711.jpg') }}" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="{{ route('blog.show', 'example-post') }}" class="text-white"> Here's a new way to take better photos for
                                instagram </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
