<style>
    body {
        background-color: #3e281d;
    }

    .cart {
        margin-top: 150px;
    }

    .cart .product-column img {
        height: 100px;
        width: 100px;
        object-fit: cover;
    }
</style>

<section class="cart">
    <h1 class="text-white text-center">Hello Keranjang</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-8 product-column">

                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('images/boluGulung.jpg') }}" alt="">
                        <p></p>
                    </div>
                </div>

            </div>

            <div class="col-4 total-column">
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
