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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Services List</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <!-- <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">services</li> -->
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Services Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="#">
                                <figure class="image-anime">
                                    <!-- <img src="images/service-img-1.jpg" alt=""> -->
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <h3>Insurance</h3>
                                <p>Kickstart your insurance journey for just ₹49! Secure your peace of mind without breaking the bank!</p>
                            </div>
                            <!-- Service Content End -->

                            <!-- Service Button Start -->
                            <div class="service-btn">
                                <a href="Script" class="readmore-btn"><img src="{{url('images/icon-arrow.svg')}}" alt=""></a>
                            </div>
                            <!-- Service Button End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <figure>
                                <!-- <img src="images/service-img-2.jpg" alt=""> -->
                            </figure>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <h3>E-learn</h3>
                                <p>Unlock your potential with our top-notch courses and grab your certification for only ₹149! Your future starts here!</p>
                            </div>
                            <!-- Service Content End -->

                            <!-- Service Button Start -->
                            <div class="service-btn">
                                <a href="https://learn.wecares.in" class="readmore-btn"><img src="{{url('images/icon-arrow.svg')}}" alt=""></a>
                            </div>
                            <!-- Service Button End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <figure>
                                <!-- <img src="images/service-img-3.jpg" alt=""> -->
                            </figure>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <h3>E-Commerce</h3>
                                <p>Get your product listed on our platform for just ₹499 a month—let’s boost your sales together!</p>
                            </div>
                            <!-- Service Content End -->

                            <!-- Service Button Start -->
                            <div class="service-btn">
                                <a href="{{url('404')}}" class="readmore-btn"><img src="{{url('images/icon-arrow.svg')}}" alt=""></a>
                            </div>
                            <!-- Service Button End -->
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services End -->

    @include('footer')
</body>

</html>