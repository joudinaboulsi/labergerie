@extends('layout')

@section('title', 'La Bergerie - Le Luberon')
@section('description', 'Le Luberon is a picturesque region in southeastern France, known for its stunning landscapes, charming villages, and delicious cuisine. Our house in Le Luberon offer the perfect base for exploring the area.')
@section('keywords', 'la bergerie, Le Luberon, southeastern France, picturesque region, charming villages, delicious cuisine, houses in Le Luberon
, exploring the area')

@extends('header')
@extends('footer')

@section('content')
@foreach ($about as $b )
    

    <!-- Page Title -->
    <section class="page-title-one">
        <div class="auto-container">
            <div class="page-title-one-content">
                <h1 class="page-title">{{$b->page_title}}</h1>
                <div class="page-title-one-desc">{{$b->page_subtitle}}</div>

            </div>
        </div>
    </section>
    <!-- End Page Title -->
    <!-- About Luberon Section -->
    <section class="about-one-section style-three">
        <div class="auto-container">
            <div class="flex justify-content-center img_hover_3">  <img src="../assets/about/{{$b->image}}" alt="Le luberon village" class="le-luberon-village-image"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2" style="margin-top: 100px;">
                    <div class="about-one-wrapper-two text-center">
                        <div class="about-one-image-five"><div class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms"><img style="opacity: 0.8" src="/assets/circle-shape-light.png" alt="la bergerie home france"></div></div>
                        <div class="about-one-rating"><i class="fas fa-star"></i></div>
                        <h2 class="about-one-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">{{$b->title}}</h2>
                        <h4 class="about-one-title-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            {{$b->subtitle}}</h4>
                        <div class="about-one-text mb-50 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">{!!$b->main !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Luberon Section -->

    <!-- CTA section -->
    <section class="cta-one-section">
        <div class="cta-one-bg" data-parallax='{"y": 50}' style="background-image: url(../assets/about/{{$b->bg}});"></div>
        <div class="auto-container">
            <h2 class="cta-one-title">{{$b->title_backg}}</h2>
        </div>
    </section>
    <!-- End CTA section -->

    <!-- Le Luberon Services Section -->
    <section class="services-one-section mx-70 desktop-part">
        <div class="auto-container">
            <div class="row flexrowdisplay">
                <div class="col-lg-6 col-md-6">
                    <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-one-text">
                            {!!$b->text1 !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="flex justify-content-center img_hover_3"  style="box-shadow: 5px 10px 20px #888888;">  <img src="../assets/about/{{$b->image1}}" alt="Le luberon river"></div>
                </div>
            </div>
            <div class="row flexrowdisplay">
                <div class="col-lg-6 col-md-6">
                    <div class="flex justify-content-center img_hover_3"  style="box-shadow: 5px 10px 20px #888888;">  <img src="../assets/about/{{$b->image2}}" alt="Lavender fields"></div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-one-text">{!!$b->text1 !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flexrowdisplay">
                <div class="col-lg-6 col-md-6">
                    <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-one-text">{!!$b->text3 !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="flex justify-content-center img_hover_3" style="box-shadow: 5px 10px 20px #888888;">  <img src="../assets/about/{{$b->image3}}" alt="Le luberon garden"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-one-section mx-70 mobile-part">
        <div class="auto-container">
            <div class="row flexcolumndisplay">
                <div class="col-lg-6 col-md-6">
                    <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-one-text">
                         {!!$b->text1 !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="flex justify-content-center img_hover_3"  style="box-shadow: 5px 10px 20px #888888;">  <img src="/assets/le-luberon-image1.jpg" alt="Le luberon river"></div>
                </div>
            </div>
            <div class="row flexcolumndisplay">
                <div class="col-lg-6 col-md-6">
                    <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-one-text">
                            {!!$b->text2 !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="flex justify-content-center img_hover_3"  style="box-shadow: 5px 10px 20px #888888;">  <img src="../assets/about/{{$b->image2}}" alt="Lavender fields"></div>
                </div>
            </div>
            <div class="row flexcolumndisplay">
                <div class="col-lg-6 col-md-6">
                    <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-one-text">
                            {!!$b->text3 !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="flex justify-content-center img_hover_3" style="box-shadow: 5px 10px 20px #888888;">  <img src="../assets/about/{{$b->image3}}" alt="Le luberon garden"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Le Luberon Services Section-->

@endforeach
@endsection('content')


