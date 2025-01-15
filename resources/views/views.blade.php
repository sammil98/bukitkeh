@extends('layouts.landing')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14"
        style="background-image: url({{ asset('assets-landing/images/bg/bg1.jpg') }});">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url({{ asset('assets-landing/images/shape8.png') }});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Views</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Views</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- top Destination starts -->
    <section class="trending pb-0 pt-6 mb-3">
        <div class="container-fluid">
            {{-- <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">Our Facilities</h4>
                <h2 class="mb-1">Explore <span class="theme">Our Facilities</span></h2>
            </div> --}}
            <div class="row align-items-center multiple-scenes">

                <!-- Tambahkan div pembungkus untuk #pano -->
                <div class="pano-container">
                    <div id="pano"></div>

                    <div id="sceneList">
                        <ul class="scenes">
                            <a href="javascript:void(0)" class="scene" data-id="0-tampak-1">
                                <li class="text">View 1</li>
                            </a>
                            <a href="javascript:void(0)" class="scene" data-id="1-tampak-2">
                                <li class="text">View 2</li>
                            </a>
                            <a href="javascript:void(0)" class="scene" data-id="2-tampak-3">
                                <li class="text">View 3</li>
                            </a>
                            <a href="javascript:void(0)" class="scene" data-id="3-tampak-4">
                                <li class="text">View 4</li>
                            </a>
                            <a href="javascript:void(0)" class="scene" data-id="4-tampak-5">
                                <li class="text">View 5</li>
                            </a>
                            <a href="javascript:void(0)" class="scene" data-id="5-tampak-6">
                                <li class="text">View 6</li>
                            </a>
                        </ul>
                    </div>

                    <div id="titleBar">
                        <h4 class="sceneName"></h4>
                    </div>

                    <a href="javascript:void(0)" id="autorotateToggle">
                        <img class="icon off" src="{{ asset('assets-landing/images/play.png') }}" />
                        <img class="icon on" src="{{ asset('assets-landing/images/pause.png') }}" />
                    </a>

                    <a href="javascript:void(0)" id="sceneListToggle">
                        <img class="icon off" src="{{ asset('assets-landing/images/expand.png') }}" />
                        <img class="icon on" src="{{ asset('assets-landing/images/collapse.png') }}" />
                    </a>

                    <a href="javascript:void(0)" id="viewUp" class="viewControlButton viewControlButton-1">
                        <img class="icon" src="{{ asset('assets-landing/images/up.png') }}" />
                    </a>
                    <a href="javascript:void(0)" id="viewDown" class="viewControlButton viewControlButton-2">
                        <img class="icon" src="{{ asset('assets-landing/images/down.png') }}" />
                    </a>
                    <a href="javascript:void(0)" id="viewLeft" class="viewControlButton viewControlButton-3">
                        <img class="icon" src="{{ asset('assets-landing/images/left.png') }}" />
                    </a>
                    <a href="javascript:void(0)" id="viewRight" class="viewControlButton viewControlButton-4">
                        <img class="icon" src="{{ asset('assets-landing/images/right.png') }}" />
                    </a>
                    <a href="javascript:void(0)" id="viewIn" class="viewControlButton viewControlButton-5">
                        <img class="icon" src="{{ asset('assets-landing/images/plus.png') }}" />
                    </a>
                    <a href="javascript:void(0)" id="viewOut" class="viewControlButton viewControlButton-6">
                        <img class="icon" src="{{ asset('assets-landing/images/minus.png') }}" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- top Destination ends -->

    {{-- script 360 preview --}}
    <script>
        var urlPrefix = "{{ asset('assets-landing/tiles') }}";
        var iconLink = "{{ asset('assets-landing/images/link.png') }}";
        var iconInfo = "{{ asset('assets-landing/images/info.png') }}";
        var iconClose = "{{ asset('assets-landing/images/close.png') }}";
    </script>
    <script src="{{ asset('assets-landing/vendor/screenfull.min.js') }}"></script>
    <script src="{{ asset('assets-landing/vendor/bowser.min.js') }}"></script>
    <script src="{{ asset('assets-landing/vendor/marzipano.js') }}"></script>

    <script src="{{ asset('assets-landing/js/data.js') }}"></script>
    <script src="{{ asset('assets-landing/js/360preview.js') }}"></script>
@endsection
