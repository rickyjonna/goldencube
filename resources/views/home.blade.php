@extends('index')

@section('main')
    <div class="bg-black">
        <div class="bg-kelapa1">
            <div class="container p-5">
                <div class="row mb-5">
                    <div class="col-lg-6 p-3">
                        <div class="bg-gradient">Exporting Company</div>
                        <h6 class="warnagradient1" style="font-weight:bold">Natural High-Quality Coconut Shell
                            Charcoal Briquette
                        </h6>
                        <img src="images/goldencube1.png" alt="" class="img-fluid w-100">
                        <img src="images/indonesia1.png" alt="" class="img-fluid w-100">
                    </div>
                    <div class="col-lg-6">
                        <div id="myCarousel" class="carousel border rounded border-warning" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0"
                                    aria-label="Slide 1" class="active"></button>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                                    aria-label="Slide 2" class=""></button>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                                    aria-label="Slide 3" class=""></button>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3"
                                    aria-label="Slide 4" class=""></button>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4"
                                    aria-label="Slide 5" class=""></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/carousel1.png" alt="" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/carousel2.png" alt="" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/carousel3.png" alt="" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/carousel4.png" alt="" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/carousel5.png" alt="" class="d-block w-100">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn-grad1">
                        <a href="/products">Products</a>
                    </button>
                    <button class="btn-grad2">
                        <a href="/contact" class="warnagradient1" style="font-weight: bold">Contacts</a>
                    </button>
                </div>
                <div class="row">
                    <h4 class="warnagradient1 text-center" style="letter-spacing:3px">
                        100% Coconut
                        Shell Charcoal</h4>
                </div>
            </div>
        </div>
        <div class="bg-api1">
            <div class="container p-5">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">
                            <img src="images/LogoNamaPT.png" alt="">
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="images/hookahshisha.png" alt="" class="d-block w-100">
                            </div>
                            <div class="col">
                                <img src="images/barbeque.png" alt="" class="d-block w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 p-2">
                        <div class="bg-black border-gradient1 h-100 p-3">
                            <p class="m-0" style="text-align: justify; font-size:19px">
                                Golden Cube is a manufacturer of briquette charcoal products,
                                made from 100% genuine coconut
                                shells.
                                Sourced from carefully selected coconut plantations in Sulawesi, Indonesia. Our product
                                is
                                perfect
                                for BBQ and shisha/hookah use. We pride ourselves on using only the highest-quality
                                coconut
                                materials to ensure that our customers experience complete satisfaction.
                            </p>
                            <p class="warnagradient1" style="text-align: justify; font-size:19px">
                                We are not only provide the highest quality of coconut shell charcoal, but we also
                                deliver
                                the
                                finest service.
                            </p>
                            <div class="d-flex justify-content-center">
                                <button class="btn-grad3 rounded-pill">
                                    <a href="/aboutus" class="warnaputih1">About Us</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-api2">
            <div class="container p-5">
                <h1 class="warnagradient2" style="font-weight: bold">TOP QUALITY GOLDEN CUBE</h1>
                <h2 class="warnacokelat1">We prioritize the quality of Coconut Shell Briquette</h2>
                <h3 class="warnaputih1">Using the best coconut shell raw materials.</h3>
                <div class="row pt-5 mb-5">
                    <div class="col-7 pt-2">
                        <img src="images/iconquality1.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-5">
                        <img src="images/kelapa3.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="containerngambang">
            <div class="line"></div>
            <div class="box1 border-gradient1">
                <h1 class="warnagradient2 p-2">Product & Specs</h1>
            </div>
        </div>
        <div class="bg-kuning1">
            <div class="container p-5 text-center">
                <h4 class="warnagradient1 mt-4">Only Provide High-Quality Coconut Shell Charcoal Briquettes</h4>
                <h4 class="warnaputih1">Golden Cube offers various shapes of coconut charcoal for hookah,</h4>
                <h4 class="warnaputih1 mb-3"> we can customize the size according to your order requirement.</h4>
                <div class="row mb-3">
                    <div class="col"><img src="images/shape1.png" alt="" class="w-100"></div>
                    <div class="col"><img src="images/shape2.png" alt="" class="w-100"></div>
                    <div class="col"><img src="images/shape3.png" alt="" class="w-100"></div>
                    <div class="col"><img src="images/shape4.png" alt="" class="w-100"></div>
                    <div class="col"><img src="images/shape5.png" alt="" class="w-100"></div>
                </div>
                <img src="images/specification1.png" alt="" class="w-100 mb-5">
            </div>
        </div>
        <div class="containerngambang">
            <div class="line"></div>
            <div class="box1 border-gradient1">
                <h1 class="warnagradient2 p-2">LABORATORY TEST</h1>
            </div>
        </div>
        <div class="bg-arang">
            <div class="container p-5 text-center">
                <h3 class="warnagradient1 mt-4">GOLDEN CUBE PRODUCT CERTIFICATION</h3>
                <h4 class="warnaputih1 mb-3">Golden Cube coconut shell charcoal briquettes have been
                    certified by a reputable laboratory, confirming their high quality and purity.</h4>
                <div class="row">
                    <div class="col">
                        <figure>
                            <img src="images/lab.jpeg" alt="" class="img-fluid mb-3">
                            <figcaption>
                                <p class="warnaputih1">PT. Golden Cube Indonesia</p>
                                <a class="mb-3" href="www.bejkorindo.co.id">www.goldencubeid.co.id</a>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- <div class="col">
                        <figure>
                            <img src="images/lab.jpeg" alt="" class="w-100 mb-3">
                            <figcaption>
                                <p class="warnaputih1">PT. Carusin</p>
                                <a href="www.carsurin.co.id">www.carsurin.co.id</a>
                            </figcaption>
                        </figure>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="containerngambang">
            <div class="line"></div>
            <div class="box1 border-gradient1">
                <h1 class="warnagradient2 p-2">OUR BRAND</h1>
            </div>
        </div>
        <div class="bg-black">
            <div class="container p-5 text-center mb-5">
                <h3 class="warnagradient1 mt-4">GOLDEN CUBE BRAND PRODUCT</h3>
                <h4 class="warnaputih1 mb-3">if you do not have your own brand, you can also use our brand.</h4>
                <div class="bg-hijau1 text-center p-3">
                    <h1 style="font-family: Arial">Select Category</h1>
                    <div class="d-block px-5">
                        <button class="btn-cokelat1" id="btn-cube">CUBE</button>
                        <button class="btn-cokelat1" id="btn-stick">STICK</button>
                        <button class="btn-cokelat1" id="btn-hexa">HEXA</button>
                        <button class="btn-cokelat1" id="btn-flat">FLAT</button>
                        <button class="btn-cokelat1" id="btn-kaloud">KALOUD</button>
                    </div>
                    <div class="mt-3">
                        <div class="row">
                            <div class="col">
                                <div class="row" style="justify-content: center">
                                    <img src="images/cubecaption1.png" alt="" class="w-50">
                                </div>
                                <div class="row">
                                    <img src="images/cubeimage1.png" alt="" class="w-100 hoverimage">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row" style="justify-content: center">
                                    <img src="images/cubecaption2.png" alt="" class="w-50">
                                </div>
                                <div class="row">
                                    <img src="images/cubeimage2.png" alt="" class="w-100 mt-5 hoverimage">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row" style="justify-content: center">
                                    <img src="images/cubecaption3.png" alt="" class="w-50">
                                </div>
                                <div class="row">
                                    <img src="images/cubeimage3.png" alt="" class="w-100 mt-3 hoverimage">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row" style="justify-content: center">
                                    <img src="images/cubecaption4.png" alt="" class="w-50">
                                </div>
                                <div class="row">
                                    <img src="images/cubeimage4.png" alt="" class="w-100 mt-3 hoverimage">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="containerngambang">
            <div class="line"></div>
            <div class="box1 border-gradient1">
                <h1 class="warnagradient2 p-2">PAYMENT & SHIPMENT TERMS</h1>
            </div>
        </div>
        <div class="bg-black">
            <div class="container p-5 text-center">
                <h3 class="warnagradient1 mt-4 pt-4">OUR CORPORATE BANK ACCOUNT</h3>
                <h4 class="warnaputih1 mb-3">For the payment process, we only use bank transfers (T/T Via SWIFT)</h4>
                <div class="row mb-5">
                    <div class="col">
                        <img src="images/cpb.png" alt="" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="images/sd.png" alt="" class="img-fluid">
                    </div>
                </div>
                <img src="images/past.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <script>
        const btnCube = document.getElementById("btn-cube");
        const btnStick = document.getElementById("btn-stick");
        const btnHexa = document.getElementById("btn-hexa");
        const btnFlat = document.getElementById("btn-flat");
        const btnKaloud = document.getElementById("btn-kaloud");
    </script>
@endsection
