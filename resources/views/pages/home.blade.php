@extends('layouts.app')


@section('content')
    @include('components.navbar')
    <div class="">
        {{-- <div class="header mt-5 pt-4" style="background-color: #ED1D25">
            <section class="container pb-lg-5 mt-lg-5 pt-lg-3 pb-lg-3">
                <div class="container align-items-center  d-md-flex justify-content-between"
                    style="padding-bottom: 100px; padding-top: 100px;">
                    <div class="col-lg-6  d-md-none">
                        <div class="text-center mt-2">
                            <img src="{{ asset('images/human1.png') }}" width="300px" class="" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <div class="header mb-2" style="font-size: 35px">
                                <b>Bintang Technology Solusindo</b>
                            </div>
                            <div class="mt-2">
                                <p style="font-size: 17px">
                                    PT. Bintang Technology Solusindo adalah suatu perusahaan yang bergerak di bidang
                                    pengembangan perangkat lunak. Khususnya aplikasi web dan mobile. Memberikan solusi IT
                                    bagi perusahaan perusahaan di dalam negeri maupun di luar negeri.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-md-block">
                        <div class="text-center">
                            <img src="{{ asset('img/undraw_pwa.png') }}" width="500" class="" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div> --}}


        <div class="header" style="padding-top: 100px">
            <!--Content before waves-->
            <div class="container">
                <div class=" inner-header flex justify-center">
                    <div class="">
                        <div class="text-center mb-2" style="font-size: 37px; color: #454545">
                            <img src="{{ Storage::url($setting->logo) }}" width="60" alt="">
                            <b>{{ $setting->perusahaan }}</b>
                        </div>
                        <div class="mt-2">
                            <p style="font-size: 19px; color: #454545;">
                                {{ $setting->singkat }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Waves Container-->
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="#E77175" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="#E75B60" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#E94147" />
                    </g>
                </svg>
            </div>
            <!--Waves end-->

        </div>
        <!--Header ends-->


        <div id="about" class="About ">
            <section class="" style="background-color: #E94147; padding-top: 180px; padding-bottom: 180px">
                <div class="container pt-4 pb-4 align-items-center d-md-flex justify-content-between">
                    <div class="col-lg-6 d-lg-block d-none d-flex align-items-center justify-content-center">
                        <div class="text-center d-flex align-items-center  justify-content-center">
                            <img src="{{ asset('img/product_tour.svg') }}" width="350px" class="bg-transparent"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="text-dark pt-3 pb-3" style="color: #16213E">
                            <div class="" style="font-size: 30px; color: white">
                                <b>ABOUTS</b>
                            </div>
                            <div class="mt-3">
                                <p class="text-white" style="font-size: 16px">
                                    {{ $setting->singkat }}
                                </p>
                                {{-- <p class="mt-4">
                                        <a href="{{ url('tentang') }}" class="text-danger text-white">Selengkapnya >></a>
                                    </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="techstack pt-4 pb-4" style="background-color: white">
                <div class="container d-flex align-content-center flex-lg-wrap justify-content-between">
                    <div class="mx-2">
                        <img src="{{ asset('img/php.png') }}" width="60" height="60" alt="">
                    </div>
                    <div class="mx-2">
                        <img src="{{ asset('img/logos_laravel.png') }}" width="60" height="60" alt="">
                    </div>
                    <div class="mx-2">
                        <img src="{{ asset('img/logos_vue.png') }}" width="60" height="60" alt="">
                    </div>
                    <div class="mx-2">
                        <img src="{{ asset('img/mysql.png') }}" width="60" height="60" alt="">
                    </div>
                    <div class="mx-2">
                        <img src="{{ asset('img/logos_postgresql.png') }}" width="60" height="60" alt="">
                    </div>
                    <div class="mx-2">
                        <img src="{{ asset('img/oracle.png') }}" width="60" height="60" alt="">
                    </div>
                    <div class="mx-2">
                        <img src="{{ asset('img/flutter.png') }}" width="60" height="60" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="product" class="" style="background-color: #E94147">
        <div class="text-center container  align-items-center" style='padding-top: 85px; padding-bottom: 120px;'>
            <b style="font-size: 28px; color: #ffffff">PRODUCT</b>
            {{-- <div class="" style="width: 120px">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#E94147"
                    d="M65.5,-22.9C72.4,0,57,28.6,36.7,41.1C16.5,53.5,-8.5,49.9,-29,35.9C-49.4,22,-65.3,-2.2,-59.7,-23.3C-54.1,-44.4,-27.1,-62.4,1.1,-62.8C29.3,-63.1,58.5,-45.8,65.5,-22.9Z"
                    transform="translate(100 100)" />
            </svg>
        </div> --}}
            <br>
            <div class="list-produk mt-4">
                <div #swiperRef="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($products as $data)
                            <div class="swiper-slide">
                                <a href="{{ $data->url }}" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ Storage::url($data->cover) }}" class="w-100 shadow-sm"
                                        height="320" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next text-danger"></div>
                    <div class="swiper-button-prev text-danger"></div>
                    <div class="swiper-pagination"></div>
                </div>

                {{-- <p class="append-buttons">
                    <button class="prepend-2-slides">Prepend 2 Slides</button>
                    <button class="prepend-slide">Prepend Slide</button>
                    <button class="append-slide">Append Slide</button>
                    <button class="append-2-slides">Append 2 Slides</button>
                </p> --}}
                {{-- @forelse ($products as $data)
                    <div class="produk d-flex align-items-center mb-4">
                        <div class="col-lg-6 text-center">
                            <img src="{{ Storage::url($data->cover) }}" width="350px" height="200" alt="">
                        </div>
                        <div class="col-lg-6 text-start">
                            <img src="{{ Storage::url($data->logo) }}" width="60" height="60" alt="logo">
                            <div class="mt-3">
                                {{ $data->deskripsi }}
                            </div>
                            <p class="mt-3">
                                <a href="{{ $data->url }}" class="text-danger">Selengkapnya >></a>
                            </p>
                        </div>
                    </div>

                @empty
                    Belum mengisi produk
                @endforelse --}}
                {{-- <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner ">
                        @foreach ($products as $data)
                            <div class="carousel-item @if ($data->first()) active @endif"
                                data-bs-interval="5000">
                                <div class="produk d-flex align-items-center mb-4">
                                    <div class="col-lg-6 text-center">
                                        <img src="{{ Storage::url($data->cover) }}" width="350px" height="200"
                                            alt="">
                                    </div>
                                    <div class="col-lg-6 text-start">
                                        <img src="{{ Storage::url($data->logo) }}" width="60" height="60"
                                            alt="logo">
                                        <div class="mt-3">
                                            {{ $data->deskripsi }}
                                        </div>
                                        <p class="mt-3">
                                            <a href="{{ $data->url }}" class="text-danger">Selengkapnya >></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item pb-4 @if ($data->id == $data->first()->id) active @endif"
                                data-bs-interval="2000">
                                <center>
                                    <div class="card shadow col-lg-4">
                                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                            <img src="{{ Storage::url($data->cover) }}" class="w-100" height="320" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-body mb-3">
                                            <img src="{{ Storage::url($data->logo) }}" width="60" height="60"
                                                alt="logo">
                                            <p class="card-text mt-2">{{ $data->deskripsi }}</p>

                                            <a href="{{ $data->url }}" target="_blank" rel="noopener noreferrer"
                                                class="btn btn-danger rounded-pill">Lihat</a>
                                        </div>
                                    </div>
                                </center>
                            </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev text-muted" type="button"
                        data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next text-muted" type="button"
                        data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> --}}
            </div>
        </div>
    </div>




    {{-- partner --}}
    <div class="" id="partner" style="background-color: white">
        <div class="text-center  align-items-center"
            style='padding-top:
        80px; padding-bottom: 100px; background-color: ##E94147;'>
            <b style="font-size: 28px; color: rgb(7, 7, 7)">PARTNERS</b>
            <br>

            <div class="mt-3 d-flex justify-content-center">
                <div class="col-9 d-flex flex-wrap justify-content-center">
                    @forelse ($partners as $data)
                        <a href="{{ $data->url }}" class="my-2 mx-2 rounded">
                            <img src="{{ Storage::url($data->img) }}" class="p-3 bg-white shadow-sm rounded"
                                height="80px" alt="">
                        </a>
                    @empty
                        Belum isi data
                    @endforelse

                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="" style="background-color: #E94147">
        <div id="" class="container text-center  align-items-center"
            style='padding-top: 60px; padding-bottom: 110px;'>
            <b style="font-size: 28px; color: #ffffff;">CONTACTS</b>
            <br>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center text-start">
                        <div class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                            </svg>
                        </div>
                        <div class="ms-4">
                            <div class="text-white">Main Office</div>
                            <div class="text-white">
                                {{ $setting->alamat }}
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-start mt-3 mb-3">
                        <div class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>
                        </div>
                        <div class="ms-4">
                            <div class="text-white">Email</div>
                            <div class="text-white">
                                {{ $setting->email }}
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-6 text-start">
                    {!! $setting->iframe !!}
                </div>
            </div>
        </div>
    </div>




    <canvas class="background"></canvas>


    @include('components.footer')
@endsection


@push('style')
    {{-- style header --}}
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300:400);

        body {
            margin: 0;
        }

        h1 {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            letter-spacing: 2px;
            font-size: 48px;
        }

        p {
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size: 14px;
            color: #333333;
        }

        .header {
            position: relative;
            text-align: center;
            background: linear-gradient(60deg, #ffffff 0%, #f8f8f8 100%);
            color: white;
        }

        .logo {
            width: 50px;
            fill: white;
            padding-right: 15px;
            display: inline-block;
            vertical-align: middle;
        }

        .inner-header {
            height: 65vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .flex {
            /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: -7px;
            /*Fix for safari gap*/
            min-height: 100px;
            max-height: 150px;
        }

        .content {
            position: relative;
            height: 20vh;
            text-align: center;
            background-color: white;
        }

        /* Animation */

        .parallax>use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax>use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax>use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax>use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax>use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        /*Shrinking for mobile*/
        @media (max-width: 768px) {
            .waves {
                height: 40px;
                min-height: 40px;
            }

            .content {
                height: 30vh;
            }

            h1 {
                font-size: 24px;
            }
        }

        /* lainnnya */

        html,
        body {

            margin: 0;

            padding: 0;
        }

        .background {

            position:
                absolute;

            display:
                block;

            top: 0;

            left: 0;

            z-index: 0;
        }
    </style>



    {{-- swipe js --}}
    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            width: 100%;
            height: 300px;
            margin: 20px auto;
        }

        .append-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .append-buttons button {
            display: inline-block;
            cursor: pointer;
            border: 1px solid #007aff;
            color: #007aff;
            text-decoration: none;
            padding: 4px 10px;
            border-radius: 4px;
            margin: 0 10px;
            font-size: 13px;
        }
    </style>
@endpush


@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
    <script>
        window.
        onload
            = function() {
                Particles.
                init
                    ({

                        // normal options
                        selector: '.background',
                        maxParticles: 90,
                        connectParticles: true,
                        color: '#d12e2e',

                        // options for breakpoints
                        responsive: [{
                            breakpoint: 992,
                            options: {
                                maxParticles: 60,
                                color: '#d12e2e',
                                connectParticles: false
                            }
                        }, {
                            breakpoint: 768,
                            options: {
                                maxParticles: 60,
                                color: '#d12e2e',
                                connectParticles: false
                            }
                        }, {
                            breakpoint: 425,
                            options: {
                                maxParticles: 100,
                                connectParticles: false
                            }
                        }, {
                            breakpoint: 320,
                            options: {
                                maxParticles: 5

                                // disables particles.js
                            }
                        }]
                    });
            };
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var appendNumber = 4;
        var prependNumber = 1;
        document
            .querySelector(".prepend-2-slides")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.prependSlide([
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                ]);
            });
        document
            .querySelector(".prepend-slide")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.prependSlide(
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
                );
            });
        document
            .querySelector(".append-slide")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.appendSlide(
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
                );
            });
        document
            .querySelector(".append-2-slides")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.appendSlide([
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                ]);
            });
    </script>
@endpush
