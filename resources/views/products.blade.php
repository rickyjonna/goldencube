@extends('index')

@section('main')
    <div class="bg-black">
        <div class="bg-arangapi1">
            <div class="container text-center p-5">
                <h1 class="warnagradient3">PRODUCTS</h1>
                <h5 class="warnagradient1">Golden Cube Coconut Shell Charcoal Briquette</h5>
                <h6 class="warnaputih1">Natural And High-Quality For Shisha/Hookah and BBQ.</h6>
                <div class="container">
                    <div class="row p-2">
                        <div class="col-lg-4 mt-5">
                            <img id="imgutama" src="images/product1.jpeg" alt=""
                                class="selected-image rounded w-100" style="height:auto">
                        </div>
                        <div class="col-lg-8 mt-5" style="text-align: justify">
                            <h6 class="warnaputih1">
                                COCONUT SHELL CHARCOAL BRIQUETTE
                            </h6>
                            <p class="warnaputih1">
                                Our product is made from 100% coconut shell charcoal and is perfect for Shisha and BBQ use.
                                It
                                offers a long burning time of up to 120 minutes, without smoke or odor. Our charcoal has a
                                low
                                ash content of less than 2%, and shines beautifully when burned. We pride ourselves on being
                                environmentally friendly, as no trees are harmed in the production process. In addition, our
                                charcoal is crack resistant, chemical free, and has a low moisture content. We are not only
                                provide the highest quality of coconut shell charcoal, but we also deliver the finest
                                service,
                                Let's become our partners for your briquettes needs!
                            </p>
                            <div class="row">
                                <div class="d-block">
                                    <a href="#"><img src="images/buttonproduct1.png" alt=""
                                            class="mx-2"></a>
                                    <a href="/contact"><img src="images/buttonproduct2.png" alt=""
                                            class="mx-2"></a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <img src="images/product1.jpeg" alt="" class="w-100 selected-image rounded"
                                        style="height: auto" onclick="displayImage('images/product1.jpeg', event)">
                                </div>
                                <div class="col-3">
                                    <img src="images/product2.jpeg" alt="" class="w-100 rounded"
                                        style="height: auto" onclick="displayImage('images/product2.jpeg', event)">
                                </div>
                                <div class="col-3">
                                    <img src="images/product3.jpeg" alt="" class="w-100 rounded"
                                        style="height: auto" onclick="displayImage('images/product3.jpeg', event)">
                                </div>
                                <div class="col-3">
                                    <img src="images/product4.jpeg" alt="" class="w-100 rounded"
                                        style="height: auto" onclick="displayImage('images/product4.jpeg', event)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="garisgradient1">
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
    </div>
    <script>
        function displayImage(imageSrc, event) {
            // Hapus border dari semua gambar
            var allImages = document.querySelectorAll('.col-3 img');
            allImages.forEach(function(img) {
                img.classList.remove('selected-image');
            });

            // Ubah gambar utama dengan yang dipilih
            var mainImage = document.getElementById('imgutama');
            mainImage.src = imageSrc;

            // Tambahkan border ke gambar yang dipilih
            var selectedImage = event.target;
            selectedImage.classList.add('selected-image');
        }
    </script>
@endsection
