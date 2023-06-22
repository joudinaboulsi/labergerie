@extends('layout')

@section('title', 'La Bergerie... A house in Provence')
@section('description', 'La Bergerie du Luberon is an excellent choice for travelers, offering a family-friendly
environment many helpful amenities designed to enhance your stay.')
@section('keywords', 'la bergerie, luberon, home, heart of luberon, vacation, travelers, Viens, house in france, stay')

@extends('header')
@extends('footer')
@section('content')
<!-- Banner Section -->
<section class="banner-section">
    <div class="swiper-container banner-slider">
        <div class="swiper-wrapper">
            <!-- Slide Item -->
            @foreach ($sliders as $slider)
            <div class="swiper-slide" style="background-image: url(../assets/slider/{{ $slider->image }});">
                <div class="content-outer">
                    <div class="content-box text-center justify-content-center">
                        <div class="inner">
                            <h4 class="main-slider-sub-title">{{ $slider->title }}</h4>
                            <h3 class="main-slider-title">{{ $slider->main_title }}</h3>
                            <h1 class="main-slider-text">{{ $slider->subtitle }}</h1>
                            @if(empty($slider->link_url) && empty($slider->link_text))

                                <div class="link-box" style="display: none">
                                    <a href="{{ $slider->link_url }}" class="btn-one">{{ $slider->link_text }}
                                        <span></span></a>
                                </div>
                            @elseif (empty($slider->link_url) && !empty($slider->link_text))
                                <div class="link-box" style="display: none">
                                    <a href="{{ $slider->link_url }}" class="btn-one">{{ $slider->link_text }}
                                        <span></span></a>
                                </div>
                            @elseif (!empty($slider->link_url) && empty($slider->link_text))
                                <div class="link-box" style="display: none">
                                    <a href="{{ $slider->link_url }}" class="btn-one">{{ $slider->link_text }}
                                        <span></span></a>
                                </div>
                            @else
                                <div class="link-box">
                                    <a href="{{ $slider->link_url }}" class="btn-one">{{ $slider->link_text }}
                                        <span></span></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Slide Item -->
        </div>
    </div>
    <div class="banner-slider-nav style-one">
        <div class="banner-slider-control banner-slider-button-prev"><span><i class="fal fa-angle-right"></i></span>
        </div>
        <div class="banner-slider-control banner-slider-button-next"><span><i class="fal fa-angle-right"></i></span>
        </div>
    </div>
</section>
<!-- End Banner Section -->
@foreach ($home as $h)
<!-- About Section -->
<section class="about-one-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-one-rating">
                    <i class="fas fa-star"></i>
                </div>
                <h2 class="about-one-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    {{ $h->title_home }}</h2>
                <div class="about-one-text wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                    {!! $h->text_home !!}</div>
            </div>
            <div class="col-lg-7">
                <div class="about-one-image-box">
                    <div class="about-one-image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img_hover_1" style="box-shadow: 5px 10px 20px #888888;"><img
                                src="/assets/home/{{ $h->image_home }}" alt="la bergerie pool"></div>
                    </div>
                    <div class="about-one-image-two">
                        <div class="scroll-rotate"><img src="/assets/circle-shape.png" alt="la bergerie home"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-text">
            <h4 class="about-one-text-two">{{ $h->subtitle_home }}</h4>
        </div>
    </div>
</section>
<!--End About Section -->
<!-- Info Section -->
<section class="info-section pt-0">
    <div class="auto-container">
        <div class="text-center">
            <h2 class="info-one-title">{!! $h->title_info !!}</h2>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="info-one-text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    {!! $h->contenetone_info !!}
                </div>
                <div class="info-slider wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="theme_carousel_wrapper">

                        <div class="info-one-image wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="img_hover_3"><img src="../assets/home/{{ $h->imageone_info }}"
                                    alt="la bergerie garden"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="info-one-text wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    {!! $h->contenetwo_info !!}</div>
                <div class="info-one-image wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="img_hover_3"><img src="../assets/home/{{ $h->imagetwo_info }}" alt="la bergerie view">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Info Section -->
<!-- Services Section-->
<h2 class="services-title">{{ $h->title_service }}</h2>
<section class="services-one-section mx-70">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h4 class="service-one-title">{{ $h->title1_service }}</h4>
                    <div class="service-one-text">{!! $h->text1_service !!}</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="service-one-block wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h4 class="service-one-title">{{ $h->title2_service }}</h4>
                    <div class="service-one-text">
                        {!! $h->text2_service !!}</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h4 class="service-one-title"> {{ $h->title3_service }}</h4>
                    <div class="service-one-text">{!! $h->text3_service !!}</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section-->
@endforeach
@endsection('content')