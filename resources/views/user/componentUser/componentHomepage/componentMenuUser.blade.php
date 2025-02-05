<style>
    .menu {
        padding: 50px 0;
        background-color: #251409;
    }

    .menu .merk-depan {
        color: whitesmoke;
        font-family: "Playwrite HU";
    }

    .menu .merk-belakang {
        color: chocolate;
        font-family: "Playwrite HU";
    }

    .menu .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: none !important;
        transition: all 0.3s ease;
    }

    .menu .card:hover {
        transform: translateY(-1rem);
    }

    .menu .card-body {
        background-color: #4e3c3b;
    }

    .menu .card-img-top {
        height: 300px;
        object-fit: cover;
    }

    .menu .card-body {
        color: white;
        text-align: center;
    }

    .menu hr {
        margin: 1rem auto;
    }

    .menu .row .btn {
        background-color: chocolate !important;
        color: white;
        font-weight: bold;
        padding: 1rem 1.25rem;
        font-size: 1rem;
        border: 2px solid chocolate !important;
    }

    .menu .row .btn:hover {
        background-color: transparent !important;
        transition: all 0.3s;
    }

    .menu .btn.other {
        margin-top: 60px;
        background-color: chocolate;
        color: white;
        font-weight: bold;
        padding: 16px 24px;
        text-transform: uppercase;
        font-size: 1.2rem;
        border: 3px solid chocolate !important;
    }

    .menu .btn.other:hover {
        background-color: rgb(126, 65, 21) !important;
        transition: all 0.2s;
        border: 3px solid rgb(126, 65, 21) !important;
    }

    @media (max-width: 850px) {
        .menu .btn.other {
            font-size: 1rem;
        }
    }

    @media (max-width: 500px) {
        .menu {
            padding: 50px 15px;
        }
    }

    @media (max-width:400px) {
        .menu .btn.other {
            margin-top: 40px;
        }

        .menu {
            padding: 50px 10px;
        }

    }
</style>

<section class="menu" id="menu">
    <h3 class="text-center fs-1 text-white">REKOMENDASI MENU <span class="merk-depan">Resya</span> <span
            class="merk-belakang">Brownies</span> </h3>
    <div class="container my-5">

        <div class="row justify-content-center gy-5">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/brownies.jpg') }}" class="card-img-top">
                    <div class="card-body py-4">
                        <h5 class="fs-4"> <span class="merk-depan">Resya</span> <span
                                class="merk-belakang">Brownies</span> </h5>
                        <hr class="w-75">
                        <h5 class="card-title fs-4">Brownies Coklat</h5>
                        <hr class="w-75">
                        <h5 class="card-title fs-4">Rp. 150.000 / BOX</h5>
                        <hr class="w-75">
                        <a href="#" class="btn border border-0">TAMBAH KE KERANJANG</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/boluGulung.jpg') }}" class="card-img-top">
                    <div class="card-body py-4">
                        <h5 class="fs-4"> <span class="merk-depan">Resya</span> <span
                                class="merk-belakang">Brownies</span> </h5>
                        <hr class="w-75">
                        <h5 class="card-title fs-4">Bolu Gulung</h5>
                        <hr class="w-75">
                        <h5 class="card-title fs-4">Rp. 100.000 / BOX</h5>
                        <hr class="w-75">
                        <a href="#" class="btn border border-0">TAMBAH KE KERANJANG</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/serabiTampah.jpg') }}" class="card-img-top">
                    <div class="card-body py-4">
                        <h5 class="fs-4"> <span class="merk-depan">Resya</span> <span
                                class="merk-belakang">Brownies</span> </h5>
                        <hr class="w-75">
                        <h5 class="card-title fs-4">Serabi Tampah</h5>
                        <hr class="w-75">
                        <h5 class="card-title fs-4">Rp. 200.000 / BOX</h5>
                        <hr class="w-75">
                        <a href="#" class="btn border border-0">TAMBAH KE KERANJANG</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('product') }}" class="btn border border-0 other">Lihat Produk Lain</a>
        </div>
    </div>
</section>
