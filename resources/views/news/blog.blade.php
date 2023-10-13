@extends('layouts.news.app')

@section('content')
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">

           <x-news-vertical
                title="Video muito bom"
                description="muito bom pra familia"
                autor="Tiago"
           />
            {{-- @include('news.layouts.tags') --}}

        </div>
        <div class="row mx-0">
           <x-paginate/>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            <x-news-horizontal title="Image boa" date="90 de 90"/>
            <x-news-horizontal title="Image boa" date="90 de 90"/>
            <x-news-horizontal title="Image boa" date="90 de 90"/>
            <x-news-horizontal title="Image boa" date="90 de 90"/>
            <x-news-horizontal title="Image boa" date="90 de 90"/>
            <x-news-horizontal title="Image boa" date="90 de 90"/>
            <x-news-horizontal title="Image boa" date="90 de 90"/>
        </div>
    </div>
</div>
@endsection
