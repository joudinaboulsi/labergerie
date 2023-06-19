@extends('layout')

@section('title', 'La Bergerie - practical information')
@section('description', 'This beautifully furnished house features all the amenities you need for a comfortable stay, including a fully equipped kitchen, cozy living room with fireplace, and a private outdoor terrace overlooking the scenic views.')
@section('keywords', 'la bergerie, luberon, house in france, kitchen, living room, outdoor space, pool, bedrooms')

@extends('header')
@extends('footer')

@section('content')
@foreach ($info as $i )
    

    <!-- Page Title -->
    <section class="page-title-one">
        <div class="auto-container">
            <div class="page-title-one-content">
                <h1 class="page-title">{{$i->page_title}}</h1>
                <div class="page-title-one-desc">  {{$i->page_subtitle}}</div>

            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Living Section -->
    <section class="room-one-section style-two pt-0">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title-box">
                        <h2 class="sec-title">{{$i->title}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-image img_hover_3">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 img_hover_3 margin-bottom-mobile">
                                    <img src="/assets/partical/{{$i->imageone_living}}" alt="La bergerie living room">
                                </div>
                                <div class="col-lg-4 col-md-6 img_hover_3 margin-bottom-mobile">
                                    <img src="/assets/partical/{{$i->imagetwo_living}}" alt="La bergerie living room2">
                                </div>
                                <div class="col-lg-4 col-md-6 img_hover_3 desktop-part">
                                    <img src="/assets/partical/{{$i->imagethree_living}}" alt="La bergerie living room3">
                                </div>
                            </div>
                        </div>
                        <div class="room-one-content style-two">
                            <h4 class="room-one-title">{{$i->subtitle_living}}</h4>
                            <div class="room-one-desc">{!! $i->text_living !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Living Section -->

    <!-- Kitchen Section -->
    <section class="room-one-section style-two pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-image img_hover_3">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 img_hover_3 margin-bottom-mobile">
                                    <img src="/assets/partical/{{$i->imageone_kitchen}}" alt="La bergerie kitchen">
                                </div>
                                <div class="col-lg-4 col-md-6 img_hover_3 margin-bottom-mobile">
                                    <img src="/assets/partical/{{$i->imagetwo_kitchen}}" alt="La bergerie kitchen2">
                                </div>
                                <div class="col-lg-4 col-md-6 img_hover_3 desktop-part">
                                    <img src="/assets/partical/{{$i->imagethree_kitchen}}" alt="La bergerie kitchen3">
                                </div>
                            </div>
                        </div>
                        <div class="room-one-content style-two">
                            <h4 class="room-one-title">{{$i->subtitle_kitchen}}</h4>
                            <div class="room-one-desc">{!!$i->text_kitchen !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Kitchen Section -->

    <!-- Room Section -->
    <section class="room-one-section style-two pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-image img_hover_3">
                            <img src="/assets/partical/{{$i->imageone_bed}}" alt="La bergerie bedroom">
                        </div>
                        <div class="room-one-content style-two">
                            <h4 class="room-one-title">{{$i->subtitle1_bed}}</h4>
                            <div class="room-one-desc">{!!$i->text1_bed !!}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-image img_hover_3">
                            <img src="/assets/partical/{{$i->imagetwo_bed}}" alt="La bergerie bedroom2">
                        </div>
                        <div class="room-one-content style-two">
                            <h4 class="room-one-title">  {{$i->subtitle2_bed}}</h4>
                            <div class="room-one-desc">{!!$i->text2_bed !!}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-image img_hover_3">
                            <img src="/assets/partical/{{$i->imagethree_bed}}" alt="La bergerie bedroom3">
                        </div>
                        <div class="room-one-content style-two">
                            <h4 class="room-one-title">{{$i->subtitle3_bed}}</h4>
                            <div class="room-one-desc">{!! $i->text3_bed !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Room Section -->

    <!-- Bathroom Section -->
    <section class="room-one-section style-two pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-content style-two">
                            <h4 class="room-one-title">{{$i->subtitle1_bath}}</h4>
                            <div class="room-one-desc">{!!$i->text1_bath !!}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-content style-two">
                            <h4 class="room-one-title"> {{$i->subtitle2_bath}}</h4>
                            <div class="room-one-desc">{!!$i->text2_bath !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bathroom Section -->

    <!-- Outside Section -->
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="title-box">
                    <h2 class="sec-title">{{$i->one_title}}</h2>
                </div>
            </div>
        </div>
    </div>
        <section class="outside-one-section pt-0 pb-0">
            <div class="auto-container">
                <div class="outside-one-wrapper-box">
                    <div class="outside-one-big-title" data-parallax='{"x": -50}'>{{$i->outside_one_big}}</div>
                    <div class="outside-one-title">{{$i->outside_one_title}}</div>
                    <div class="outside-one-text">{{$i->outside_one_text}}
                    </div>
                </div>
            </div>
     </section>
    <!-- End Outside Section -->

    <!-- Distance Section -->
    <section class="gallery-one-section mx-70">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="title-box">
                        <h2 class="sec-title">{{$i->sec_title}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-container">
            <!--Sortable Gallery-->
            <div class="sortable-masonry">
                <div class="items-container row">
                    <div class="gallery-block-one masonry-item all cat-1 col-lg-4 col-md-12">
                        <div class="gallery-one-box">
                            <div class="gallery-one-image">
                                <img src="/assets/partical/{{$i->sec_image1}}" alt="la bergerie market">
                            </div>
                            <div class="gallery-one-content">
                            </div>
                        </div>
                        <div class="gallery-one-box">
                            <div class="gallery-one-image">
                                <img src="/assets/partical/{{$i->sec_image2}}" alt="near la bergerie">
                            </div>
                            <div class="gallery-one-content">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-block-one masonry-item all cat-2 col-lg-8 col-md-12">
                        <div class="gallery-one-box mobile-part">
                            <h4 class="gallery-one-title-mobile">{{ $i->gallery_title}}</h4>
                            <div class="gallery-one-text-mobile">{!! $i->gallery_text !!}</div>
                        </div>
                        <div class="gallery-one-box">
                            <div class="gallery-one-image">
                                <img src="/assets/partical/{{$i->sec_image3}}" alt="la bergerie market2">
                            </div>
                            <div class="gallery-one-content desktop-part">
                                <h4 class="gallery-one-title">{{ $i->gallery_title}}</h4>
                                <div class="gallery-one-text">{!! $i->gallery_text !!}</div>
                            
                                <div class="gallery-one-like"><i class="far fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Distance Section-->

    <div class="auto-container">
        <div class="text-center">
            <h2 class="info-one-title"><span class="theme-color">{!!$i->info_title !!}</h2>
        </div>
    </div>
@endforeach
    <!-- Practical Information About The Services Section -->
    <section class="services-one-section mx-70">
        <div class="auto-container">
            <div class="row">
                @foreach ($services as $service )
                    
            
                <div class="col-lg-3 col-md-6">
                    <div class="service-one-block wow fadeInUp flexcolumndisplay" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="../assets/services/{{$service->icon}}" alt="home icon">
                        <div class="service-one-text centered">{!! $service->text!!}</div>
                    </div>
                </div>
                @endforeach
       
            </div>
        </div>
    </section>
    <!-- End Practical Information About The Services Section -->

@endsection('content')


