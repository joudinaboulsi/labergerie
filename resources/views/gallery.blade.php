@extends('layout')

@section('title', 'La Bergerie - Gallery')
@section('description', 'Explore our stunning gallery of photos showcasing our beautiful house in Le Luberon, France. Get inspired and book your stay now.')
@section('keywords', 'la bergerie, gallery, photos, house, Le Luberon, France, stay')

@extends('header')
@extends('footer')

@section('content')

<!-- Page Title -->
<section class="page-title-one">
    @foreach ($data as $d )
   
    <div class="auto-container">
        <div class="page-title-one-content">
            <h1 class="page-title">{{$d->page_title}}</h1>
            <div class="page-title-one-desc">{{$d->page_subtitle}}</div>
        </div>
    </div>
    @endforeach
</section>
<!-- End Page Title -->
<!-- Gallery Section-->
<section class="gallery-section-two">
    <div class="auto-container">
        <div class="row">
            {{-- <div class="col-lg-12 col-md-12">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="/assets/gallery1.jpg" alt="La bergerie outside"></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="/assets/gallery1.jpg" class="lightbox-image link" data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="/assets/gallery2.jpg" alt="La bergerie bedrooms"></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="/assets/gallery2.jpg" class="lightbox-image link" data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            @foreach ($images as $image )
                
          
            <div class="col-lg-6 col-md-6">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="/assets/gallery/{{$image->image}}" alt="La bergerie kitchen outside"></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="/assets/gallery/{{$image->image}}" class="lightbox-image link" data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-12 col-md-12">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="/assets/gallery16.jpg" alt="La bergerie sunset"></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="/assets/gallery16.jpg" class="lightbox-image link" data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="/assets/gallery5.jpg" alt="La bergerie kitchen"></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="/assets/gallery5.jpg" class="lightbox-image link" data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="gallery-block gallery-overlay">
                    <div class="gallery-block_image"><img src="/assets/gallery6.jpg" alt="La bergerie kitchen table"></div>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="/assets/gallery6.jpg" class="lightbox-image link" data-fancybox="gallery"><span class="icon fal fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- End Gallery Section-->


@endsection('content')
