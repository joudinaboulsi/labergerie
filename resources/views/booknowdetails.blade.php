@extends('layout')
@section('title', 'La Bergerie - Book Now Details')
@section('description', 'Book your dream getaway to Le Luberon with our exclusive package deals. Enjoy luxurious
accommodations and stunning views.')
@section('keywords', 'la bergerie, booking, package, Le Luberon, luxury accommodations, views')

@extends('header')
@extends('footer')

@section('content')

<!-- Page Title -->
<section class="page-title-one">
    <div class="auto-container">
        @foreach ($data as $d )


        <div class="page-title-one-content">
            <h1 class="page-title">{{$d->page_titleDetail}}</h1>
            <div class="page-title-one-desc">{{$d->page_subtitleDetail}}</div>
        </div>
        @endforeach
    </div>
</section>
<!-- End Page Title -->


<section class="booking-form-section">
    <div class="auto-container">
        @foreach ($details as $detail )
        <form method="GET" id="" action="" accept-charset="utf-8">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 booking-form-column">
                    <!--check in/out-->
                    <div class="">
                        <div id="nd_booking_open_calendar_from" class="">
                            <h4 class="nd_booking_date_label">From</h4>
                            <div class="flex-box">
                                <h2 id="nd_booking_date_number_from_front" class="nd_booking_date_number_from_front">
                                    {{$detail->from_day}}</h2>
                                <h3 id="nd_booking_date_month_from_front" class="nd_booking_date_month_from_front">
                                    {{$detail->from_month}}</h3>
                            </div>
                        </div>
                        <input type="hidden" id="nd_booking_date_month_from" class="">
                        <input type="hidden" id="nd_booking_date_number_from" class="">
                        <input placeholder="Check In" class="opacity-0" type="text" name="form-name"
                            id="nd_booking_archive_form_date_range_from" value="" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 booking-form-column">
                    <div class="">
                        <div id="nd_booking_open_calendar_to" class="">
                            <h4 class="nd_booking_date_label">To</h4>
                            <div class="flex-box">
                                <h2 id="nd_booking_date_number_to_front" class="nd_booking_date_number_from_front">
                                    {{$detail->to_day}}</h2>
                                <h3 id="nd_booking_date_month_to_front" class="nd_booking_date_month_from_front">
                                    {{$detail->to_month}}</h3>
                            </div>
                        </div>
                        <input type="hidden" id="nd_booking_date_month_to" class="">
                        <input type="hidden" id="nd_booking_date_number_to" class="">
                        <input placeholder="Check Out" class="opacity-0" type="text" name="form-name"
                            id="nd_booking_archive_form_date_range_to" value="" />
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</section>

<div class="contact-form-section" style="margin-top:100px">
    <div class="auto-container">
        <h3 class="contact-form-one-title">Please fill the blank</h3>
        <div class="contact-form">
            <form method="POST" id="" action="{{route('dataStore')}}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="contact-form-one-label " for="name">Your Name</label>
                        <input type="text" class="form-control contact-form-one-input" name="name" value="" id="name"
                            placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="contact-form-one-label" for="email">Your Email</label>
                        <input type="email" class="form-control contact-form-one-input" name="email" value="" id="email"
                            placeholder="Your Email" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="contact-form-one-label" for="phone">Start Date</label>
                        <input type="date" class="form-control contact-form-one-input" name="start" value="" id="phone"
                            placeholder="Phone Number" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="contact-form-one-label" for="phone">End Date</label>
                        <input type="date" class="form-control contact-form-one-input" name="end" value="" id="phone"
                            placeholder="Phone Number" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="contact-form-one-label" for="phone">Your Phone Number</label>
                        <input type="text" class="form-control contact-form-one-input" name="phone" value="" id="phone"
                            placeholder="Phone Number" required>
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
@endsection('content')