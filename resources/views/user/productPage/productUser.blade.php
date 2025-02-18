@extends('user.layout.mainLayout.mainLayout')

{{-- Title Dinamis --}}
@section('title')
    Halaman Product
@endsection
{{-- End Title --}}

@section('content')
    <style>
        body {
            background-color: #3e281d;
        }

        .menu {
            margin: 180px 0 100px;
        }

        .menu .container {
            margin-top: 60px;
        }

        .menu .button-category a {
            background-color: rgb(161, 86, 32);
            color: white;
            border-radius: 40px;
            width: 200px;
            font-size: 1.125rem;
        }

        .menu .button-category a:active {
            color: white;
        }

        .menu .button-category a.active {
            background-color: rgb(109, 55, 17);
            color: white;
            border-radius: 40px;
            width: 200px;
            font-size: 1.125rem;
        }

        .menu .button-category a:hover {
            background-color: rgb(109, 55, 17);
            transition: all 0.2s;
        }

        .menu .button-category .row {
            @media (min-width: 1024px) and (max-width: 1200px) {
                column-gap: 60px !important;
            }
        }

        .menu .button-category .search-bar input {
            background-color: rgb(161, 86, 32);
            color: white;
            border: 2px solid rgb(161, 86, 32);
            border-radius: 40px;
            font-size: 1rem;
            width: 100%;
            transition: box-shadow 0.3s ease;
            padding: 1rem 3rem 1rem 1.25rem;
        }

        .menu .button-category .search-bar i {
            position: absolute;
            top: 50%;
            right: 1.375rem;
            transform: translateY(-50%);
            color: white;
            font-size: 1.25rem;
            pointer-events: none;
        }

        .menu .button-category .search-bar input:focus {
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
            outline: none;
        }

        .menu .button-category .search-bar input::placeholder {
            color: white;
            opacity: 1;
        }

        .menu .card-wrapper .row {
            margin-top: 60px !important
        }

        .menu .card-wrapper .card span.merk-depan {
            color: whitesmoke;
            font-family: "Playwrite HU";
        }

        .menu .card-wrapper .card span.merk-belakang {
            color: chocolate;
            font-family: "Playwrite HU";
        }

        .menu .card-wrapper .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none !important;
            transition: all 0.3s ease;
        }

        .menu .card-wrapper .card:hover {
            transform: translateY(-1rem);
        }

        .menu .card-wrapper .card-body {
            background-color: #4e3c3b;
        }

        .menu .card-wrapper img.card-img-top {
            height: 300px;
            object-fit: cover;
        }

        .menu .card-wrapper .card-body {
            color: white;
            text-align: center;
        }

        .menu .card-wrapper .card hr {
            margin: 1rem auto;
        }

        .menu .card-wrapper .card span.stok-tidakTersedia {
            text-decoration: line-through;
        }

        .menu .card-wrapper .row .card .btn {
            background-color: chocolate !important;
            color: white;
            font-weight: bold;
            padding: 1rem 1.25rem;
            font-size: 1rem;
            border: 2px solid chocolate !important;
        }

        .menu .row .card .btn:hover {
            background-color: transparent !important;
            transition: all 0.3s;
        }

        @media (max-width:850px) {

            .menu .button-category .btn-snack,
            .menu .button-category .btn-nasi {
                display: none;
            }
        }

        @media (max-width: 500px) {
            .menu {
                padding: 0 20px;
            }
        }

        @media (max-width: 400px) {

            .menu .button-category .btn-snack,
            .menu .button-category .btn-nasi {
                display: none;
            }
        }
    </style>

    <section class="menu">

        <h3 class="fs-1 text-white text-center">DAFTAR MENU</h3>

        <div class="container">

            <div class="button-category">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-lg-2 col-xl-2">
                        <a href="" class="btn btn-snack border-0 py-3 px-4">Snack & Cemilan</a>
                    </div>
                    <div class="col-lg-3 col-xl-2">
                        <a href="" class="btn btn-nasi border-0 py-3 px-4">Nasi & Lauk</a>
                    </div>
                    <div class="col-10 col-md-8 col-lg-3 col-xl-4 my-auto mx-auto mx-lg-0 ms-lg-auto">
                        <div class="search-bar d-flex position-relative">
                            <input type="text" id="search" class="form-control" placeholder="Cari Disini">
                            <i class="bi bi-search position-absolute"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-wrapper">
                <div class="row justify-content-center row-gap-5 mt-5">
                    @foreach ($products as $product)
                        <div class="col-md-6 col-lg-4 {{ $product->kategori_product }}">
                            <div class="card">
                                <img src="{{ asset('storage/' . $product->foto_product) }}" class="card-img-top">
                                <div class="card-body py-4">
                                    <h5 class="fs-4"> <span class="merk-depan">Resya</span> <span
                                            class="merk-belakang">Brownies</span> </h5>
                                    <hr class="w-75">
                                    <h5 class="card-title fs-4">{{ $product->nama_product }}</h5>
                                    <hr class="w-75">
                                    <h5 class="card-title fs-4">Rp {{ number_format($product->harga_product, 0, ',', '.') }}
                                        / BOX</h5>
                                    <hr class="w-75">
                                    <h5 class="card-title fs-4">Stok :
                                        <span class="stok-{{ $product->stok }}">{{ $product->stok }}</span>
                                    </h5>
                                    <hr class="w-75">
                                    <a href="#" class="btn border border-0">TAMBAH KE KERANJANG</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const snackBtn = document.querySelector(".btn-snack");
            const nasiBtn = document.querySelector(".btn-nasi");
            const allItems = document.querySelectorAll(".card-wrapper .col-md-6");

            snackBtn.addEventListener("click", function(e) {
                e.preventDefault();
                setActiveButton(snackBtn);
                filterItems("snackCemilan");
            });

            nasiBtn.addEventListener("click", function(e) {
                e.preventDefault();
                setActiveButton(nasiBtn);
                filterItems("nasiLauk");
            });

            function filterItems(category) {
                allItems.forEach(item => {
                    if (item.classList.contains(category)) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            }

            function setActiveButton(activeBtn) {
                [snackBtn, nasiBtn].forEach(btn => btn.classList.remove("active"));
                activeBtn.classList.add("active");
            }
        });
    </script>
@endsection
