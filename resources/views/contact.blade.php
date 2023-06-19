@extends('layout')

@section('title', 'La Bergerie - Contact Us')
@section('description', 'Get in touch with us for more information about our beautiful house in Le Luberon, France. Our team is ready to help you plan your perfect vacation.')
@section('keywords', 'la bergerie, contact, houses, Le Luberon, France, vacation')

@extends('header')
@extends('footer')

@section('content')
@foreach ($contact as $c )
    

    <!-- Page Title -->
    <section class="page-title-one">
        <div class="auto-container">
            <div class="page-title-one-content">
                <h1 class="page-title">{{$c->page_title}}</h1>
                <div class="page-title-one-desc">{{$c->page_subtitle}}</div>
            </div>
        </div>
    </section>
    <!-- Contact Us -->
    <div class="contact-form-section" >
        <div class="auto-container" >
            <h3 class="contact-form-one-title">{{$c->title_form}}</h3>
            @endforeach
            <div class="contact-form">
                <form method="POST" id="contactform" action="{{ route('contact_path') }}" accept-charset="utf-8">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="contact-form-one-label " for="name">Your Name</label>
                            <input type="text" class="form-control contact-form-one-input" name="name" value="" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="contact-form-one-label" for="email">Your Email</label>
                            <input type="email" class="form-control contact-form-one-input" name="email" value="" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="contact-form-one-label" for="phone">Your Phone Number</label>
                            <input type="text" class="form-control contact-form-one-input" name="phone" value="" id="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="contact-form-one-label" for="message">Message</label>
                            <textarea name="message" id="message" class="form-control contact-form-one-input" placeholder="Write a message"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                        <button class="btn-one"  type="submit" data-loading-text="Please wait..." style="float: left">Submit Now+<span></span></button>
                        </div>
                        <div class="form-group col-md-12">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection('content')
