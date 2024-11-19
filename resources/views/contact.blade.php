<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('head')
</head>

<body>
    @include('nav')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact Us</h1>
                        <nav class="wow fadeInUp">
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="contact-us bg-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Contact Information Start -->
                        <div class="contact-information">
                            <!-- Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{url('images/icon-phone.svg')}}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>contact</h3>
                                    <p>+91 8169598364</p>
                                    <p>+91 7887380238</p>
                                </div>
                            </div>
                            <!-- Contact Item End -->

                            <!-- Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="{{url('images/icon-email.svg')}}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>email</h3>
                                    <p>support@wecares.in</p>
                                    <p>info@wecares.in</p>
                                </div>
                            </div>
                            <!-- Contact Item End -->

                            <!-- Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{url('images/icon-location.svg')}}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>address</h3>
                                    <p>Mumbai Maharashtra, India</p>
                                </div>
                            </div>
                            <!-- Contact Item End -->
                        </div>
                        <!-- Contact Information End -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us Form Start -->
        <div class="contact-us-form">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch with our experts</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>

                    <div class="col-lg-6 col-md-4">
                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="tel:8169598364" class="btn-default contact-btn">+91 8169598364</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Google Map Start -->
                        <div class="google-map">
                            <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Mumbai+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://dissertationschreibenlassen.com/dissertation-medizin/'>Medizin Dissertation</a>
                            <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=3fd10cd96f42bd93360eadcc0fd248a42f3f39a9'></script>
                        </div>
                        <!-- Google Map End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <!-- Contact Form Title Start -->
                            <div class="contact-form-title wow fadeInUp">
                                <h2>Have any questions?</h2>
                            </div>
                            <!-- Contact Form Title End -->

                            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.25s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone No" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-highlighted">submit message</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact InfUs Form End -->
    </div>
    <!-- Page Contact Us End -->

    @include('footer')
</body>

</html>