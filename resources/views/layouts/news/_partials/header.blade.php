@php
    $lang = config('app.locale', 'en');
@endphp
<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                        class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;{{ __('common.header.date', ['weekday'=>date('N') ,'day'=>date('d'), 'month'=> date('F'), 'year'=>date('Y')]) }}</a>
                <div class="d-inline-block fh5co_trading_posotion_relative">
                    <a href="#" class="treding_btn">{{ __('Trending') }}</a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
                <a href="#" class="color_fff fh5co_mediya_setting">{{ __('common.header.socialMedia') }}</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <img src="{{ asset('images/logo.png') }}" alt="img" class="fh5co_logo_width" />

            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div>
                    </a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                    </a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                    </a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                    </a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                    </a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="{{ asset('images/country.png') }}" alt="img" class="fh5co_country_width"/></div>-->

                <div class="d-inline-block text-center dd_position_relative ">
                    <select class="form-control fh5co_text_select_option" data-call-action="set_locale">
                        <option value="en" {{ $lang == 'en' ? 'selected' : '' }} >English</option>
                        <option value="pt_BR" {{ $lang == 'pt_BR' ? 'selected' : '' }} >Português</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        {{--           navbar--}}
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt="img" class="mobile_logo_width" /></a>

            <x-layouts.news-top-menu-list />
        </nav>

    </div>
</div>
