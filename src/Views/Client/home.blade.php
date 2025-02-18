@extends('layouts.master')
@section('content')
    @include('layouts.banner')
    <main>
        <section class="popular-places" id="popular">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Courses</span>
                            <h2>Information Technology</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    @foreach ($courses as $item)
                        <div class="item popular-item">
                            <div class="thumb">
                                <a href="/courses/{{ $item['id'] }}"><img src="{{ $item['c_thumbnail'] }}"
                                        alt="" /></a>
                                <div class="text-content">
                                    <h4>{{ $item['c_name'] }}</h4>
                                    <span>{{ $item['c_total_register'] }} listings</span>
                                </div>
                                <div class="plus-button">
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section class="featured-places" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Featured Places</span>
                            <h2>Praesent nec dui sed urna</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <img src="assets/Client/img/featured_item_1.jpg" alt="" />
                                <div class="overlay-content">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="date-content">
                                    <h6>28</h6>
                                    <span>August</span>
                                </div>
                            </div>
                            <div class="down-content">
                                <h4>Lorem ipsum dolor</h4>
                                <span>Category One</span>
                                <p>
                                    Vestibulum id est eu felis vulputate hendrerit. Suspendisse
                                    dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.
                                </p>
                                <div class="row">
                                    <div class="col-md-6 first-button">
                                        <div class="text-button">
                                            <a href="#">Add to favorites</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-button">
                                            <a href="#">Continue Reading</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <img src="assets/Client/img/featured_item_2.jpg" alt="" />
                                <div class="overlay-content">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="date-content">
                                    <h6>20</h6>
                                    <span>September</span>
                                </div>
                            </div>
                            <div class="down-content">
                                <h4>Nullam nibh lacus</h4>
                                <span>Category Two</span>
                                <p>
                                    Mauris sit amet quam congue, pulvinar urna et, congue diam.
                                    Suspendisse eu lorem massa. Integer sit amet posuere.
                                </p>
                                <div class="row">
                                    <div class="col-md-6 first-button">
                                        <div class="text-button">
                                            <a href="#">Add to favorites</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-button">
                                            <a href="#">Continue Reading</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <img src="assets/Client/img/featured_item_3.jpg" alt="" />
                                <div class="overlay-content">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="date-content">
                                    <h6>12</h6>
                                    <span>October</span>
                                </div>
                            </div>
                            <div class="down-content">
                                <h4>Suspendisse semper non</h4>
                                <span>Category Three</span>
                                <p>
                                    Praesent iaculis gravida elementum. Proin fermentum neque
                                    facilisis semper pharetra. Sed vestibulum vehicula tincidunt.
                                </p>
                                <div class="row">
                                    <div class="col-md-6 first-button">
                                        <div class="text-button">
                                            <a href="#">Add to favorites</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-button">
                                            <a href="#">Continue Reading</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-services" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Our Services</span>
                            <h2>Best Template Site</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="assets/Client/img/service_icon_1.png" alt="" />
                            </div>
                            <h4>High Quality Design</h4>
                            <p>
                                Etiam viverra nibh at lorem hendrerit porta non nec ligula.
                                Donec hendrerit porttitor pretium. Suspendisse fermentum nec
                                risus.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="assets/Client/img/service_icon_2.png" alt="" />
                            </div>
                            <h4>Fully Customizable</h4>
                            <p>
                                Vivamus nec vehicula felis, sit amet convallis ex. Aenean dolor
                                risus, rutrum at tincidunt eget, placerat ac mauris.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="assets/Client/img/service_icon_3.png" alt="" />
                            </div>
                            <h4>Best HTML CSS Layout</h4>
                            <p>
                                Praesent nec dui sed urna pharetra dapibus at ac elit. Aenean
                                hendrerit metus leo, quis viverra purus condimentum nec.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="down-services">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="left-content">
                                        <h4>In hac habitasse platea dictumst</h4>
                                        <p>
                                            Aenean hendrerit metus leo, quis viverra purus condimentum
                                            nec. Pellentesque a sem semper, lobortis mauris non,
                                            varius urna. Quisque sodales purus eu tellus fringilla.<br /><br />Mauris
                                            sit amet quam congue, pulvinar urna et, congue diam.
                                            Suspendisse eu lorem massa. Integer sit amet posuere
                                            tellus, id efficitur leo. In hac habitasse platea
                                            dictumst.
                                        </p>
                                        <div class="blue-button">
                                            <a href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="accordions">
                                        <ul class="accordion">
                                            <li>
                                                <a>Ut in dapibus ipsum</a>
                                                <p>
                                                    Nulla eget aliquet dui, vitae tincidunt nulla. Sed
                                                    sagittis odio vitae auctor volutpat. In semper ex
                                                    neque, ut hendrerit mauris rutrum eget. Integer
                                                    consectetur neque eu enim dictum porta. Sed et risus
                                                    ac sapien congue mattis.
                                                </p>
                                            </li>
                                            <li>
                                                <a>Vivamus ligula metus</a>
                                                <p>
                                                    Integer vel augue arcu. Fusce ac turpis cursus,
                                                    malesuada nulla quis, lobortis dui. Etiam blandit,
                                                    erat efficitur rhoncus pellentesque, ligula turpis
                                                    tempor dolor.
                                                </p>
                                            </li>
                                            <li>
                                                <a>Suspendisse dapibus</a>
                                                <p>
                                                    Nullam nibh lacus, rhoncus sit amet feugiat vel,
                                                    porttitor sit amet nibh. Pellentesque feugiat justo
                                                    nec enim pretium, sed faucibus lacus aliquam. Sed ac
                                                    interdum mauris.
                                                </p>
                                            </li>
                                        </ul>
                                        <!-- / accordion -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                    <span>Video Presentation</span>
                    <h2>Sed et risus ac sapien congue mattis.</h2>
                    <a href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
                </div>
            </div>
            <video autoplay="" loop="" muted>
                <source src="assets/Client/highway-loop.mp4" type="video/mp4" />
            </video>
        </section>

        <section class="pricing-tables">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Pricing Tables</span>
                            <h2>Duis molestie ipsum id faucibus fermentum</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="table-item">
                            <div class="top-content">
                                <h4>Starter Plan</h4>
                                <h1>$25</h1>
                                <span>/monthly</span>
                            </div>
                            <ul>
                                <li><a href="#">100 Suspendisse dapibus</a></li>
                                <li><a href="#">10x Paleo celiac enamel</a></li>
                                <li><a href="#">Williamsburg organic post ironic</a></li>
                                <li><a href="#">Helvetica pinterest yuccie</a></li>
                                <li><a href="#">Plaid shabby chic godard</a></li>
                            </ul>
                            <div class="blue-button">
                                <a href="#">Buy It Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="table-item">
                            <div class="top-content">
                                <h4>Premium Plan</h4>
                                <h1>$45</h1>
                                <span>/monthly</span>
                            </div>
                            <ul>
                                <li><a href="#">200 Suspendisse dapibus</a></li>
                                <li><a href="#">20x Paleo celiac enamel</a></li>
                                <li><a href="#">Williamsburg organic post ironic</a></li>
                                <li><a href="#">Helvetica pinterest yuccie</a></li>
                                <li><a href="#">Plaid shabby chic godard</a></li>
                            </ul>
                            <div class="blue-button">
                                <a href="#">Buy It Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="table-item">
                            <div class="top-content">
                                <h4>Advanced Plan</h4>
                                <h1>$85</h1>
                                <span>/monthly</span>
                            </div>
                            <ul>
                                <li><a href="#">400 Suspendisse dapibus</a></li>
                                <li><a href="#">40x Paleo celiac enamel</a></li>
                                <li><a href="#">Williamsburg organic post ironic</a></li>
                                <li><a href="#">Helvetica pinterest yuccie</a></li>
                                <li><a href="#">Plaid shabby chic godard</a></li>
                            </ul>
                            <div class="blue-button">
                                <a href="#">Buy It Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
