@php
$setting = \App\Models\Setting::find(1);
@endphp
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="{{route('home')}}"><img src="{{$setting->website_logo_light}}" alt="{{$setting->title}}" title="{{$setting->title}}" style="width: 50%" /></a>
                                </div>
                                <div class="text">{{$setting->meta_description}}</div>
                                <ul class="list-style-two">
                                    <li><span class="icon fa fa-phone"></span> {{$setting->phone}}</li>
                                    <li><span class="icon fa fa-envelope"></span> {{$setting->email}}</li>
                                    <li><span class="icon fa fa-home"></span>{{$setting->address}}</li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>Links</h4>
                                <ul class="list-link">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="">Services</a></li>
                                    <li><a href="{{route('home.about')}}">About us</a></li>
                                    <li><a href="">Testimonials</a></li>
                                    <li><a href="">News</a></li>
                                    <li><a href="{{route('home.contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>Support</h4>
                                <ul class="list-link">
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Submit a Ticket</a></li>
                                    <li><a href="">Visit Knowledge Base</a></li>
                                    <li><a href="">Support System</a></li>
                                    <li><a href="">Refund Policy</a></li>
                                    <li><a href="">Professional Services</a></li>
                                </ul>
                            </div>
                        </div>

                     

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Copyright Column -->
                <div class="copyright-column col-lg-6 col-md-6 col-sm-12">
                    <div class="copyright">{{Date('Y')}} &copy; All rights reserved by <a href="#">{{$setting->website_title}}</a></div>
                </div>

                <!-- Social Column -->
                <div class="social-column col-lg-6 col-md-6 col-sm-12">
                    <ul>
                        <li class="follow">Follow us: </li>
                        <li><a href="{{$setting->facebook}}"><span class="fa fa-facebook-square"></span></a></li>
                        <li><a href="{{$setting->instagram}}"><span class="fa fa-twitter-square"></span></a></li>
                        <li><a href="{{$setting->linkedin}}"><span class="fa fa-linkedin-square"></span></a></li>
                        {{-- <li><a href="#"><span class="fa fa-google-plus-square"></span></a></li> --}}
                        {{-- <li><a href="#"><span class="fa fa-rss-square"></span></a></li> --}}
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>

