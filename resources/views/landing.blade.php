@extends('layouts.landing')
@section('content')
    <!-- banner starts -->
    <section class="banner overflow-hidden">
        <div class="slider top50">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image"
                                style="background-image:url({{ asset('assets-landing/images/11.jpg') }})"></div>
                            <div class="swiper-content">
                                <div class="entry-meta mb-2">
                                    <h5 class="entry-category mb-0 white">Wisata Bukit Kehi, Pamekasan Jawa Timur</h5>
                                </div>
                                <h1 class="mb-2"><a href="tour-single.html" class="white">Temukan Destinasi Wisata Terbaik di Bukit Kehi Pamekasan</a>
                                </h1>
                                <p class="white mb-4">"Temukan Petualangan Baru Bersama Kami"</p>
                                <a href="{{ route('landing.destination') }}" class="nir-btn">Discover More</a>
                            </div>
                            <div class="dot-overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image"
                                style="background-image:url({{ asset('assets-landing/images/12.jpg') }})"></div>
                            <div class="swiper-content">
                                <div class="entry-meta mb-2">
                                    <h5 class="entry-category mb-0 white">Wisata Bukit Kehi, Pamekasan Jawa Timur</h5>
                                </div>
                                <h1 class="mb-2"><a href="tour-single.html" class="white">Mulai Merencanakan Liburan Impian Anda Bersama Kami</a>
                                </h1>
                                <p class="white mb-4">"Rencanakan Liburan Impian Anda Bersama Kami"</p>
                                <div class="slider-button d-flex justify-content-center">
                                    <a href="{{ route('ticket') }}" class="nir-btn me-4">Beli Tiket</a>
                                    <a href="{{ route('landing.contact') }}" class="nir-btn-black">Hubungi Kami</a>
                                </div>
                            </div>
                            <div class="dot-overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image"
                                style="background-image:url({{ asset('assets-landing/images/slider/1.jpg') }})"></div>
                            <div class="swiper-content">
                                <div class="entry-meta mb-2">
                                    <h5 class="entry-category mb-0 white">Wisata Bukit Kehi, Pamekasan Jawa Timur</h5>
                                </div>
                                <h1 class="mb-2"><a href="tour-single.html" class="white">Temukan Petualangan Baru Bersama Kami</a>
                                </h1>
                                <p class="white mb-4">"Temukan Petualangan Baru Bersama Kami"</p>
                                <a href="{{ route('landing.destination') }}" class="nir-btn">Discover More</a>
                            </div>
                            <div class="dot-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>
    <!-- banner ends -->

    <!-- about-us starts -->
    <section class="about-us pb-6 pt-10"
        style="background-image:url({{ asset('assets-landing/images/kh3.jpg') }}); background-position:center;">
        <div class="container">

            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">Core Features</h4>
                <h2 class="mb-1">Temukan <span class="theme">Kesempurnaan Perjalanan</span></h2>
                <p>"Temukan Petualangan Baru Bersama Kami"</p>
            </div>

            <!-- why us starts -->
            <div class="why-us">
                <div class="why-us-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="icon-flag theme"></i>
                                    </div>
                                    <h4><a>Tell Us What You want To Do</a></h4>
                                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia.</p>
                                    <p class="mb-0 theme">100+ Reviews</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="icon-location-pin theme"></i>
                                    </div>
                                    <h4><a>Share Your Travel Locations</a></h4>
                                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia.</p>
                                    <p class="mb-0 theme">100+ Reviews</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="icon-directions theme"></i>
                                    </div>
                                    <h4><a>Share Your Travel Preference</a></h4>
                                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia.</p>
                                    <p class="mb-0 theme">100+ Reviews</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                <div class="why-us-content">
                                    <div class="why-us-icon mb-1">
                                        <i class="icon-compass theme"></i>
                                    </div>
                                    <h4><a>Here 100% Trusted Tour Agency</a></h4>
                                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia.</p>
                                    <p class="mb-0 theme">100+ Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- why us ends -->
        </div>
        <div class="white-overlay"></div>
    </section>
    <!-- about-us ends -->

    <!-- about-us starts -->
    <section class="about-us pt-6"
        style="background-image:url(images/background_pattern.png); background-position:bottom right;">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 ps-4">
                        <div class="about-content text-center text-lg-start">
                            <h4 class="theme d-inline-block mb-0">Get To Know Us</h4>
                            <h2 class="border-b mb-2 pb-1">Pesona Wisata Bukit Kehi Pamekasan</h2>
                            <p class="border-b mb-2 pb-2">Cikal bakal nama "Bukit Kehi" berasal dari gagasan brilian
                                Kepala Desa Kertagena, Hj. Zainani, yang memiliki visi untuk mengubah lahan kosong tersebut
                                menjadi tempat yang memikat bagi wisatawan. Terdapat sebuah cerita menarik tentang bagaimana
                                sebuah tanah tak bertuan, yang dalam bahasa Madura disebut "tanah hihi," bertransformasi
                                menjadi salah satu destinasi wisata yang paling dicari dan instagrameable di daerah ini.
                                Awalnya, tanah ini hanya dijadikan lapangan futsal untuk pemuda dan anak-anak desa setempat.
                                Namun, tak disangka, lapangan itu menjadi tempat beragam aktivitas warga, dan Bukit Kehi pun
                                mulai berkembang menjadi spot selfie yang unik dan memesona.</p>
                          
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 pe-4">
                        <div class="about-image" style="animation:none; background:transparent;">
                            <iframe src="https://www.youtube.com/embed/zRuJ-dKYBZM?si=zCiPGP2LZUiD10Ui"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen
                                style="width: 100%; height: 300px; object-fit: cover;"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- Counter -->
                        <div class="counter-main w-75 float-start z-index3 position-relative">
                            <div class="counter p-4 pb-0 box-shadow bg-white rounded mt-minus">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">{{ $destinations->count() }}</h2>
                                                <span class="m-0">Destinasi Wisata</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">{{ $tickets->count() }}</h2>
                                                <span class="m-0">Paket Wisata</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">{{ $products->count() }}</h2>
                                                <span class="m-0">Produk Wisata</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Counter -->
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
    </section>
    <!-- top Destination starts -->
    <section class="trending pb-3 pt-0">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">Top Destinations</h4>
                <h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>
                <p>Temukan destinasi wisata terbaik di Bukit Kehi Pamekasan</p>
            </div>
            <div class="row align-items-center">
                @foreach ($destinations as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item1">
                            <div class="trend-image position-relative rounded">
                                <a href="{{ route('destination.detail', $item->slug) }}"><img src="{{ asset('storage/destination/' . $item->image) }}" alt="image" style="width: 100%; height: 300px; object-fit: cover;"></a>
                                <div
                                    class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                    <div class="trend-content-title">
                                        <h5 class="mb-0"><a href="{{ route('destination.detail', $item->slug) }}" class="theme1">{{ $item->name }}</a></h5>
                                        <h3 class="mb-0 white"><a href="{{ route('destination.detail', $item->slug) }}" style="color: white"> {{ $item->name }}</a></h3>
                                    </div>
                                </div>
                                <div class="color-overlay"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- top Destination ends -->

    <!-- best tour Starts -->
    <section class="trending bg-grey pt-17 pb-6">
        <div class="section-shape top-0" style="background-image: url({{ asset('assets-landing/images/shape8.png') }});">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-between mb-6 ">
                <div class="col-lg-7">
                    <div class="section-title text-center text-lg-start">
                        <h4 class="mb-1 theme1">Top Pick</h4>
                        <h2 class="mb-1">Best <span class="theme">Tour Ticket Packages</span></h2>
                        <p>Temukan Paket Wisata Terbaik di Bukit Kehi Pamekasan</p>
                            labore.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                </div>
            </div>
            <div class="trend-box">
                <div class="row item-slider">
                    @foreach ($tickets as $ticket)
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item rounded box-shadow bg-white">
                                <div class="trend-image position-relative">
                                    <img src="{{ asset('storage/ticket/' . $ticket->photo) }}" alt="image"
                                        class="" style="width: 100%; height: 200px; object-fit: cover;">
                                    <div class="color-overlay"></div>
                                </div>
                                <div class="trend-content p-4 pt-5 position-relative">

                                    <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Pamekasan, Jawa Timur
                                    </h5>
                                    <h3 class="mb-1"><a href="{{ route('ticket') }}">{{ $ticket->name }}</a></h3>

                                    <div class="entry-meta">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0"><span class="theme fw-bold fs-5">Rp.
                                                    {{ number_format($ticket->price, 2) }}</span> | Per person</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- best tour Ends -->
    <!-- our teams starts -->
    <section class="our-team pb-0">
        <div class="container">

            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">Aparatur</h4>
                <h2 class="mb-1">Meet Our <span class="theme">Excellent Aparatur</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="team-main">
                <div class="row shop-slider">
                    @foreach ($aparatur as $item)
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="team-list rounded">
                                <div class="team-image">
                                    <img src="{{ asset('storage/aparatur/' . $item->image) }}" alt="team"
                                        style="width: 100%; height: 300px; object-fit: cover;">
                                </div>
                                <div class="team-content text-center p-3 bg-theme">
                                    <h4 class="mb-0 white">{{ $item->name }}</h4>
                                    <p class="mb-0 white">{{ $item->position }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- our teams Ends -->

    <!-- recent-articles starts -->
    <section class="trending recent-articles pb-6 pt-5">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">Our Blogs Offers</h4>
                <h2 class="mb-1">Recent <span class="theme">Articles & Posts</span></h2>
                <p>Temukan Berita Terbaru Tentang Wisata Bukit Kehi Pamekasan</p>
            </div>
            <div class="recent-articles-inner">
                <div class="row">
                    @foreach ($news as $item)
                        <div class="col-lg-4">
                            <div class="trend-item box-shadow bg-white mb-4 rounded">
                                <div class="trend-image">
                                    <img src="{{ asset('storage/news/' . $item->image) }}" alt="image"
                                        style="width: 100%; height: 200px; object-fit: cover;">
                                </div>
                                <div class="trend-content-main p-4">
                                    <div class="trend-content">
                                        <h5 class="theme mb-1">Berita Tentang Wisata Bukit Kehi Pamekasan</h5>
                                        <h4 class="mb-0"><a
                                                href="{{ route('landing.news.detail', $item->slug) }}">{{ $item->title }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- recent-articles ends -->
@endsection
