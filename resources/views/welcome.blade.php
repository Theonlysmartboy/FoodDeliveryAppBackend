<!doctype html>
<html lang="en">
    <!--
    Page    : index / MobApp
    Version : 1.0
    Author  : Otema Technologies
    URI     : https://otemainc.com
    -->
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FoodFuzz | Get it hot</title>
        <!--Fav Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('dist/img/icon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('dist/img/icon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('dist/img/icon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dist/img/icon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('dist/img/icon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('dist/img/icon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('dist/img/icon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('dist/img/icon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('dist/img/icon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('dist/img/icon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('dist/img/icon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('dist/img/icon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dist/img/icon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('dist/img/icon/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('dist/img/icon/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Food fuzz - Food delivery system in western kenya">
        <meta name="keywords" content="Food, Drinks, mobile, app, Food delivery, ios, android, Kisumu">
        <!-- Font -->
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('front_end/css/bootstrap.min.css')}}">
        <!-- Themify Icons -->
        <link rel="stylesheet" href="{{asset('front_end/css/themify-icons.css')}}">
        <!-- Owl carousel -->
        <link rel="stylesheet" href="{{asset('front_end/css/owl.carousel.min.css')}}">
        <!-- Main css -->
        <link href="{{asset('front_end/css/style.css')}}" rel="stylesheet">
    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="30">
        <!-- Nav Menu -->
        <div class="nav-menu fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-dark navbar-expand-lg">
                            <a class="navbar-brand" href="index.html"><img src="{{asset('dist/img/logo.png')}}" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#features">FEATURES</a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#gallery">GALLERY</a> </li>
                                    <!--li class="nav-item"> <a class="nav-link" href="#pricing">PRICING</a> </li-->
                                    <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li>
                                    <li class="nav-item"><a class="nav-link" href="{{url('/admin')}}">Admin/Vendor Login</a></li>
                                    <li class="nav-item"><a target="blank" href="https://play.google.com/store/apps/details?id=com.otemainc.foodfuzzapp" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Download</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <header class="bg-gradient" id="home">
            <div class="container mt-5">
                <h1>Food Fuzz</h1>
                <p class="tagline">A family picnic in the park. Your date night at home. That late-night study session. Spend more time doing the things that matter to you most — we’ll take care of the rest. </p>
            </div>
            <div class="img-holder mt-3"><img src="{{asset('front_end/images/screen1.png')}}" alt="phone" class="img-fluid"></div>
        </header>
        <div class="client-logos my-5">
            <div class="container text-center">
                <img src="{{asset('front_end/images/client-logos.png')}}" alt="client logos" class="img-fluid">
            </div>
        </div>
        <div class="section light-bg" id="features">
            <div class="container">
                <div class="section-title">
                    <small>HIGHLIGHTS</small>
                    <h3>Features you love</h3>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card features">
                            <div class="card-body">
                                <div class="media">
                                    <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                    <div class="media-body">
                                        <h4 class="card-title">Simple</h4>
                                        <p class="card-text">At most three tappings and your order is placed. Nothing more </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card features">
                            <div class="card-body">
                                <div class="media">
                                    <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                    <div class="media-body">
                                        <h4 class="card-title">Fast</h4>
                                        <p class="card-text">Before you loose your appetite, the food is on your table </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card features">
                            <div class="card-body">
                                <div class="media">
                                    <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                    <div class="media-body">
                                        <h4 class="card-title">Secure</h4>
                                        <p class="card-text">Using the most secure payment methods of MPESA and CASH on delivery. Nothing can beat that. It is always convenient </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // end .section -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                        <h2>Discover our App</h2>
                        <p class="mb-4">The new FOODFUZZ app is eye catching, beautyfully designed and here to make your next order for food as simple as laying on your bed, placing the order and enjoying without moving a muscle </p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
                <div class="perspective-phone">
                    <img src="{{asset('front_end/images/screen7.png')}}" alt="perspective phone" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- // end .section -->
        <div class="section light-bg">
            <div class="container">
                <div class="section-title">
                    <small>FEATURES</small>
                    <h3> What you can do with our app</h3>
                </div>
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#communication">Viewing food and drink varieties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#schedule">Placing an order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages">Making payments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#livechat">Tracking process</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="communication">
                        <div class="d-flex flex-column flex-lg-row">
                            <img src="{{asset('front_end/images/graphic.png')}}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                            <div>

                                <h2>Let your fingers do the navigation</h2>
                                <p class="lead">As your taste buds do the selection. </p>
                                <p>We have a wide variety of foods and drinks from your most loved restaurants and hotels all you need to do is make a choice</p>
                                <p> If choosing is difficult, then why not sample from each category and enjoy the result without much hustle</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="schedule">
                        <div class="d-flex flex-column flex-lg-row">
                            <div>
                                <h2>Delivering when you want where you want</h2>
                                <p class="lead">As fast as you need wherever you need it, we make the delivery</p>
                                <p>We have you sorted, all you need to do is tap on the food you want to add it to cart, make changes on quantity.
                                </p>
                                <p> And we shall deliver it tom you as fast as you deserve it. No waits, No hustles just tap</p>
                            </div>
                            <img src="{{asset('front_end/images/graphic.png')}}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="messages">
                        <div class="d-flex flex-column flex-lg-row">
                            <img src="{{asset('front_end/images/graphic.png')}}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                            <div>
                                <h2>It is very much affordable and easy</h2>
                                <p class="lead">Because we understand that it is a need not a want. </p>
                                <p>You can choose to pay via mpesa/airtel money/TKash/equitel.</p>
                                <p> You you may decide to pay once we have delivered your meal</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="livechat">
                        <div class="d-flex flex-column flex-lg-row">
                            <div>
                                <h2>Be assured</h2>
                                <p class="lead">Comfortably Monitor the progress of your delivery. </p>
                                <p>You can know the status of your order and when it will reach you</p>
                                <p> All you need to do is tap on the order and you will be able to comfortably monitor it's status</p>
                            </div>
                            <img src="{{asset('front_end/images/graphic.png')}}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // end .section -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('front_end/images/screen2.png')}}" alt="dual phone" class="img-fluid">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div>
                            <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                            <h2>Get the App</h2>
                            <p class="mb-4">The app is currently available on google play store but we are soon launching it on apple's app store  </p>
                            <a href="https://play.google.com/store/apps/details?id=com.otemainc.foodfuzzapp" class="btn btn-primary">Download</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // end .section -->
        <div class="section light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <ul class="list-unstyled ui-steps">
                            <li class="media">
                                <div class="circle-icon mr-4">1</div>
                                <div class="media-body">
                                    <h5>Create an Account</h5>
                                    <p>Enter all the required details in the registration screen to create an account. Note that the password should be easy for you to remember but should not be easy for
                                        anyone to guess <small class="text-danger">(Make it secure using a password at least six(6) characters long having at least one special character, one upper case letter, one lower case letter, one number won't harm your brain but will secure your account)</small></p>
                                </div>
                            </li>
                            <li class="media my-4">
                                <div class="circle-icon mr-4">2</div>
                                <div class="media-body">
                                    <h5>Make an order</h5>
                                    <p>Choose from our wide variety of drinks and meals from various restaurants and hotels tapping on the ones you love to add them to your cart</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="circle-icon mr-4">3</div>
                                <div class="media-body">
                                    <h5>Check out</h5>
                                    <p>Simply tap on the check out button to proceed to checkout section then enter your preferred delivery location or you can let us get your location automatically<small class="text-success">(We promise not to share it with any other person but to use it just for the sake of this delivery)</small> </p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="circle-icon mr-4">4</div>
                                <div class="media-body">
                                    <h5>Make payment</h5>
                                    <p>Submit the required amount that includes the delivery fee via your preferred payment platform  </p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="circle-icon mr-4">5</div>
                                <div class="media-body">
                                    <h5>Enjoy your meal</h5>
                                    <p>Our delivery perosnnell wil call you to deliver order. All you need to do is be there or have someone<small class="text-success">(We shall need confirmation in case it is a different person receiving so have it ready)</small> to receive the order  </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('front_end/images/screen6.png')}}" alt="iphone" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- // end .section -->
        <div class="section">
            <div class="container">
                <div class="section-title">
                    <small>TESTIMONIALS</small>
                    <h3>What our Customers Says</h3>
                </div>
                <div class="testimonials owl-carousel">
                    <div class="testimonials-single">
                        <img src="{{asset('front_end/images/client.png')}}" alt="client" class="client-img">
                        <blockquote class="blockquote">Small sized app, large number of food and drink category, fast delivery</blockquote>
                        <h5 class="mt-4 mb-2">Joseph Odhiambo</h5>
                        <p class="text-primary">Kisumu</p>
                    </div>
                    <div class="testimonials-single">
                        <img src="{{asset('front_end/images/client1.png')}}" alt="client" class="client-img">
                        <blockquote class="blockquote">I love the food variety and the affordability.</blockquote>
                        <h5 class="mt-4 mb-2">Tee</h5>
                        <p class="text-primary">Kisumu</p>
                    </div>
                    <div class="testimonials-single">
                        <img src="{{asset('front_end/images/client.png')}}" alt="client" class="client-img">
                        <blockquote class="blockquote">The best food delivery app so far.</blockquote>
                        <h5 class="mt-4 mb-2">Neeve</h5>
                        <p class="text-primary">Kisumu</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- // end .section -->
        <div class="section light-bg" id="gallery">
            <div class="container">
                <div class="section-title">
                    <small>GALLERY</small>
                    <h3>App Screenshots</h3>
                </div>
                <div class="img-gallery owl-carousel owl-theme">
                    <img src="{{asset('front_end/images/screen1.png')}}" alt="image">
                    <img src="{{asset('front_end/images/screen2.png')}}" alt="image">
                    <img src="{{asset('front_end/images/screen3.png')}}" alt="image">
                    <img src="{{asset('front_end/images/screen4.png')}}" alt="image">
                </div>
            </div>
        </div>
        <!-- // end .section -->
        <!--div class="section" id="pricing">
            <div class="container">
                <div class="section-title">
                    <small>PRICING</small>
                    <h3>Upgrade to Pro</h3>
                </div>
                <div class="card-deck">
                    <div class="card pricing">
                        <div class="card-head">
                            <small class="text-primary">PERSONAL</small>
                            <span class="price">$14<sub>/m</sub></span>
                        </div>
                        <ul class="list-group list-group-flush">
                            <div class="list-group-item">10 Projects</div>
                            <div class="list-group-item">5 GB Storage</div>
                            <div class="list-group-item">Basic Support</div>
                            <div class="list-group-item"><del>Collaboration</del></div>
                            <div class="list-group-item"><del>Reports and analytics</del></div>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                        </div>
                    </div>
                    <div class="card pricing popular">
                        <div class="card-head">
                            <small class="text-primary">FOR TEAMS</small>
                            <span class="price">$29<sub>/m</sub></span>
                        </div>
                        <ul class="list-group list-group-flush">
                            <div class="list-group-item">Unlimited Projects</div>
                            <div class="list-group-item">100 GB Storage</div>
                            <div class="list-group-item">Priority Support</div>
                            <div class="list-group-item">Collaboration</div>
                            <div class="list-group-item">Reports and analytics</div>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                        </div>
                    </div>
                    <div class="card pricing">
                        <div class="card-head">
                            <small class="text-primary">ENTERPRISE</small>
                            <span class="price">$249<sub>/m</sub></span>
                        </div>
                        <ul class="list-group list-group-flush">
                            <div class="list-group-item">Unlimited Projects</div>
                            <div class="list-group-item">Unlimited Storage</div>
                            <div class="list-group-item">Collaboration</div>
                            <div class="list-group-item">Reports and analytics</div>
                            <div class="list-group-item">Web hooks</div>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                        </div>
                    </div>
                </div>
        <!-- // end .pricing -->
        <!--/div>
    </div-->
        <!-- // end .section -->
        <div class="section pt-0">
            <div class="container">
                <div class="section-title">
                    <small>FAQ</small>
                    <h3>Frequently Asked Questions</h3>
                </div>
                <div class="row pt-4">
                    <div class="col-md-6">
                        <h4 class="mb-3">Can I Place an order and have it delivered to a different place from my current location?</h4>
                        <p class="light-font mb-5">Yes. All you need to do is ensure that you select a delivery zone and vividly describe the location where you want it delivered to <small class='text-danger'>(Note that in this case there will be no pay on delivery)</small> </p>
                        <h4 class="mb-3">What payment methods do you accept?</h4>
                        <p class="light-font mb-5">We currently accept Mpesa, Airtel Money, Tkash, Equitel but we are working to support other payment mehords and they will be available soon. </p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-3">Can I change my mind after placing an order?</h4>
                        <p class="light-font mb-5">No. We encourage you to carefully make your selections. Though if you changing your mind involves adding the quantity of an order or more food/drink variety then we you can do so by placing a new order and they will all be delivered. </p>
                        <h4 class="mb-3">Do you have a contract?</h4>
                        <p class="light-font mb-5">Yes we do have contaracts with vendors who would like to sell on our platform. To be one, please see our contact sections and give us a call </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- // end .section -->
        <div class="section bg-gradient">
            <div class="container">
                <div class="call-to-action">
                    <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                    <h2>Download Anywhere</h2>
                    <p class="tagline">Available for all major mobile and desktop platforms. Rapidiously visualize optimal ROI rather than enterprise-wide methods of empowerment. </p>
                    <div class="my-4">
                        <a href="#" class="btn btn-light"><img src="{{asset('front_end/images/appleicon.png')}}" alt="icon"> App Store</a>
                        <a href="https://play.google.com/store/apps/details?id=com.otemainc.foodfuzzapp" target="blank" class="btn btn-light"><img src="{{asset('front_end/images/playicon.png')}}" alt="icon"> Google play</a>
                    </div>
                    <p class="text-primary"><small class="text-success"><i>*Works on iOS 10.0.5+, Android Kitkat and above. </i></small></p>
                </div>
            </div>
        </div>
        <!-- // end .section -->
        <div class="light-bg py-5" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <p class="mb-2"> <span class="ti-location-pin mr-2"></span> P.O Box Kisumu</p>
                        <div class=" d-block d-sm-inline-block">
                            <p class="mb-2">
                                <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:support@foodfuzz.co.ke">support@foodfuzz.co.ke</a>
                            </p>
                        </div>
                        <div class="d-block d-sm-inline-block">
                            <p class="mb-0">
                                <span class="ti-headphone-alt mr-2"></span> <a href="tel:51836362800">518-3636-2800</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="social-icons">
                            <a href="#"><span class="ti-facebook"></span></a>
                            <a href="#"><span class="ti-twitter-alt"></span></a>
                            <a href="#"><span class="ti-instagram"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // end .section -->
        <footer class="my-5 text-center">
            <!-- Copyright removal is not prohibited! -->
            <p class="mb-2"><small>COPYRIGHT © 2019. ALL RIGHTS RESERVED. DESIGNED AND DEVELOPED BY <a href="https://otemainc.com">OTEMA TECHNOLOGIES</a></small></p>
            <small>
                <a href="#" class="m-2">PRESS</a>
                <a href="#" class="m-2">TERMS</a>
                <a href="#" class="m-2">PRIVACY</a>
            </small>
        </footer>
        <!-- jQuery and Bootstrap -->
        <script src="{{asset('front_end/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('front_end/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Plugins JS -->
        <script src="{{asset('front_end/js/owl.carousel.min.js')}}"></script>
        <!-- Custom JS -->
        <script src="{{asset('front_end/js/script.js')}}"></script>
    </body>
</html>