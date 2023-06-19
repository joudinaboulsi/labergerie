@extends('layout')

@section('title', 'La Bergerie - How To Arrive')
@section('description', 'Discover how to easily reach our charming house in Le Luberon, France. Follow our directions and enjoy a memorable stay in this stunning region.')
@section('keywords', 'la bergerie, Le Luberon, France, house, directions, stay, charming, memorable.')

@extends('header')
@extends('footer')

@section('content')
@foreach ($arrive  as $a )
    

    <!-- Page Title -->
    <section class="page-title-one">
        <div class="auto-container">
            <div class="page-title-one-content">
                <h1 class="page-title">{{$a->page_title}}</h1>
                <div class="page-title-one-desc">{{$a->page_subtitle}}</div>

            </div>
        </div>
    </section>
    <!-- Map Section -->
    <section class="page-title-one style-four">
        <div class="contact-map">
            <iframe width="600" height="900" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"   src="{{$a->map}}">measure distance on map</a></iframe>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- How To Arrive Section -->
    <section class="services-one-section mx-70">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h4 class="service-one-title">{{$a->title}}</h4>
                        <div class="service-one-text">
                            {!!$a->main !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="auto-container">
        <div class="flex justify-content-center img_hover_3" style="margin-top:50px; margin-bottom: 50px"> <img src="../assets/arrive/{{$a->image}}" class="desktop-part" alt="how to arrive"> <img src="/assets/la-bergerie-france.jpg" class="mobile-part" alt="maison en france"></div>
    </div>
    <section class="services-one-section mx-70">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-one-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h4 class="service-one-title">{{$a->subtitle}}</h4>
                        <div class="service-one-text">
                         {!!$a->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- End How To Arrive Section -->
@endsection('content')
