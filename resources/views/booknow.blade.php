@extends('layout')
@section('title', 'La Bergerie - Book Now')
@section('description', 'Book your dream vacation in La Bergerie with ease. Our booking page offers a user-friendly
platform to reserve your stay in our charming house. Book now and experience the beauty of France.')
@section('keywords', 'la bergerie, book, vacation, Le Luberon, booking page, reserve, stay, charming houses, France')

@extends('header')
@extends('footer')
@section('content')
<style>
    .w3-container {
        padding: 0.01em 16px;
    }

    .w3-display-topright {
        position: absolute;
        right: 0;
        top: 0;
    }

    .w3-button {
        border: none;
        display: inline-block;
        padding: 8px 16px;
        vertical-align: middle;
        overflow: hidden;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
        white-space: nowrap;
        font-family: Verdana, sans-serif;
        font-size: 15px;
        line-height: 1.5;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .w3-black,
    .w3-hover-black:hover {
        color: #fff !important;
        background-color: #000 !important;
    }

    .w3-button:hover {
        color: #000 !important;
        background-color: #ccc !important;
    }

    .w3-modal {
        z-index: 3;
        display: none;
        padding-top: 100px;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .w3-modal-content {
        margin: auto;
        background-color: #fff;
        position: relative;
        padding: 0;
        outline: 0;
        width: 600px;
    }

    @media (max-width: 600px) {
        .w3-modal-content {
            margin: 0 10px;
            width: auto !important;
        }

        .w3-modal {
            padding-top: 30px;
        }
    }

    @media (max-width: 768px) {
        .w3-modal-content {
            width: 500px;
        }

        .w3-modal {
            padding-top: 50px;
        }
    }

    @media (min-width: 993px) {
        .w3-modal-content {
            width: 900px;
        }
    }
</style>
<!-- Page Title -->
@foreach ($data as $d)
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
        {{-- <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open
            Modal</button> --}}


        <div class="row">
            @foreach ($book as $b )
            <div class="col-lg-6 col-md-6">
                <div class="room-one-block">
                    <div class="room-one-like"><i class="far fa-heart"></i></div>
                    <div class="room-one-image img_hover_3">
                        <img src="/assets/book/{{$b->image_one}}" alt="packages image">
                    </div>
                    <div class="room-one-content style-two">
                        <div class="room-one-info">Starting From <span>${{$b->price}}</span> {{$b->subtitle_per}}</div>
                        <h4 class="room-one-title">{{$b->title}}</h4>
                        <div class="room-one-desc">{!!$b->description !!}</div>
                        <div class="row">
                            <div class="col-sm-6 room-one-info">

                                <div class="room-one-info">Status: <span>{{$b->status}}</span></div>
                                <div class="room-one-info">Person: <strong>: {{$b->person}}</strong></div>
                                </ul>

                            </div>
                        </div>
                     
                      @if(empty(($b->from_day)  && ($b->from_day) && ($b->to_day) && ($b->to_month)))
                      <div class="row" style="display: none">
                        
                            <div class="room-one-info">Benefit from our offers</div>
                            <div class="row justify-content">
                                <div class="col-lg-3 col-md-6 booking-form-column">
                                    <!--check in/out-->
                        
                                    <div id="nd_booking_open_calendar_from" class="">
                                        <h4 class="nd_booking_date_label">From</h4>
                                        <div class="flex-box">
                                            <h2 id="nd_booking_date_number_from_front" class="nd_booking_date_number_from_front">
                                                {{$b->from_day}}</h2>
                                            <h3 id="nd_booking_date_month_from_front" class="nd_booking_date_month_from_front">
                                                {{$b->from_month}}</h3>
                                        </div>
                                    </div>
                        
                                </div>
                                <div class="col-lg-3 col-md-6 booking-form-column">
                        
                                    <div id="nd_booking_open_calendar_to" class="">
                                        <h4 class="nd_booking_date_label">To</h4>
                                        <div class="flex-box">
                                            <h2 id="nd_booking_date_number_to_front" class="nd_booking_date_number_from_front">
                                                {{$b->to_day}}</h2>
                                            <h3 id="nd_booking_date_month_to_front" class="nd_booking_date_month_from_front">
                                                {{$b->to_month}}</h3>
                                        </div>
                                    </div>
                        
                                </div>
                            </div>
                        </div>
@else
<div class="row">

    <div class="room-one-info">Benefit from our offers</div>
    <div class="row justify-content">
        <div class="col-lg-3 col-md-6 booking-form-column">
            <!--check in/out-->

            <div id="nd_booking_open_calendar_from" class="">
                <h4 class="nd_booking_date_label">From</h4>
                <div class="flex-box">
                    <h2 id="nd_booking_date_number_from_front" class="nd_booking_date_number_from_front">
                        {{$b->from_day}}</h2>
                    <h3 id="nd_booking_date_month_from_front" class="nd_booking_date_month_from_front">
                        {{$b->from_month}}</h3>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6 booking-form-column">

            <div id="nd_booking_open_calendar_to" class="">
                <h4 class="nd_booking_date_label">To</h4>
                <div class="flex-box">
                    <h2 id="nd_booking_date_number_to_front" class="nd_booking_date_number_from_front">
                        {{$b->to_day}}</h2>
                    <h3 id="nd_booking_date_month_to_front" class="nd_booking_date_month_from_front">
                        {{$b->to_month}}</h3>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
                        <div class="room-one-link-btn">
                            <a onclick="document.getElementById('[$b->id,$b->price]').style.display='block'"
                                class="btn-one s-four">Book Now + <span></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="[$b->id,$b->price]" class="w3-modal" style="display: none;">
                <div class="w3-modal-content">
                    <div class="w3-container">
                        <span onclick="document.getElementById('[$b->id,$b->price]').style.display='none'"
                            class="w3-button w3-display-topright">&times;</span>
                        <div class="contact-form-section">
                            <div class="auto-container">
                                <h3 class="contact-form-one-title">Details
                                    <div style="margin: 20px 0">

                                        <h3 class="contact-form-one-label">Status:<span> {{$b->status}}</span></h3>
                                        <h3 class="contact-form-one-label">Person: <strong>{{$b->person}}</strong></h3>
                                        <h3 class="contact-form-one-label">Price: <strong>${{$b->price}}</strong></h3>
                                    </div>
                            </div>
                            <div class="auto-container">

                                <h3 class="contact-form-one-title">Please fill the blank</h3>
                                <div class="contact-form">
                                    <form method="POST" id="" action="{{route('dataStore')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="contact-form-one-label" for="name">Your Name</label>
                                                <input type="text" class="form-control contact-form-one-input"
                                                    name="name" value="" id="name" placeholder="Your Name" required>
                                            </div>
                                            <input type="hidden" id="price" name="price" value="{{$b->price}}" />
                                            <div class="form-group col-md-6">
                                                <label class="contact-form-one-label" for="email">Your Email</label>
                                                <input type="email" class="form-control contact-form-one-input"
                                                    name="email" value="" id="email" placeholder="Your Email" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="contact-form-one-label" for="phone">Start Date</label>
                                                <input type="date" class="form-control contact-form-one-input"
                                                    id="start-date" name="start" min="<?=date('Y-m-d')?>" value=""
                                                    id="start" placeholder="Phone Number" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="contact-form-one-label" for="phone">End Date</label>
                                                <input type="date" class="form-control contact-form-one-input"
                                                    id="end-date" name="end" value="" id="end"
                                                    min="<?php echo date('Y-m-d'); ?>" placeholder="Phone Number"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="contact-form-one-label" for="phone">Your Phone
                                                    Number</label>
                                                <input type="text" class="form-control contact-form-one-input"
                                                    name="phone" value="" id="phone" placeholder="Phone Number"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button class="btn-one" type="submit" data-loading-text="Please wait..."
                                                    style="float: left">Book
                                                    Now+<span></span></button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection('content')