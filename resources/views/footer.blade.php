
@section('footer')

<!--footer section  -->
<footer class="main-footer">
    <div class="auto-container">
        <div class="footer-widgets-section">
            <div class="row clearfix">
                <div class="column col-lg-4 col-md-4">
                    <div class="widget footer-logo">
                        <div class="image"><a href={{ route('home') }}><img style="width:215px" src="/cms/logo/{{ app('contact')->logo }}" alt="La bergerie footer logo"></a></div>
                    </div>
                </div>
                <div class="column col-lg-4 col-md-4">
                    <div class="widget about-widget">
                        <h3 class="widget-title">About Us</h3>
                        <div class="widget-content">
                            <ul>
                                <li>Email. <a href="mailto:{{ app('contact')->email }}">{{ app('contact')->email }}</a></li>
                                <li>Tel. <a href="tel:{{ app('contact')->phone }}">{{ app('contact')->phone }}</a></li>
                                <li>Mob. <a href="tel:{{ app('contact')->mobile }}">{{ app('contact')->mobile }}</a></li>
                                <div class="about-wdget-text mt-5">{{ app('contact')->main }}</div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column col-lg-4 col-md-4">
                    <div class="widget contact-widget">
                        <h2 class="widget-title">{{ app('contact')->address }} <span>{{ app('contact')->title }}</span></h2>
                        <div class="contact-widget-text">{{ app('contact')->subtitle }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="copyright-text">
                    Copyright ©labergerie. All Rights Reserved. by <a href="https://www.webneoo.com" target="_blank" rel="noopener noreferrer">Webneoo</a>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->
@endsection('footer')
