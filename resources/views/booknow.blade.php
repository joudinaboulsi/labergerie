 @extends('layout')
@section('title', 'La Bergerie - Book Now')
@section('description', 'Book your dream vacation in La Bergerie with ease. Our booking page offers a user-friendly platform to reserve your stay in our charming house. Book now and experience the beauty of France.')
@section('keywords', 'la bergerie, book, vacation, Le Luberon, booking page, reserve, stay, charming houses, France')

@extends('header')
@extends('footer')
@section('content')
<!-- Page Title -->
  @foreach ($data as  $d)
    <section class="page-title-one">
        <div class="auto-container">
            <div class="page-title-one-content">
                <h1 class="page-title">{{$d->page_title}}</h1>
                <div class="page-title-one-desc">{{$d->page_subtitle}}</div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- End Page Title -->

    <!-- Room Section -->
    <section class="room-one-section style-two pt-0" style="margin-top:30px">
        <div class="auto-container">
            <div class="row">
                @foreach ($book as $b )
                <div class="col-lg-6 col-md-6">
                    <div class="room-one-block">
                        <div class="room-one-like"><i class="far fa-heart"></i></div>
                        <div class="room-one-image img_hover_3">
                            <img src="/assets/book/{{$b->image_one}}" alt="packages image">
                        </div>
                        <div class="room-one-content style-two">
                            <div class="room-one-info">Starting From <span>${{$b->price}}</span> /Month</div>
                            <h4 class="room-one-title">{{$b->title}}</h4>
                            <div class="room-one-desc">{!!$b->description !!}</div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="room-one-info">
                                        <li>Status: <span>{{$b->status}}</span></li>
                                        <li>Person: <strong>: {{$b->person}}</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="room-one-link-btn"><a href={{ route('booknowdetails',[$b->id,$b->price]) }} class="btn-one s-four">Book Now + <span></span></a></div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection('content')
