@extends('admin.layout.layoutAdmin')

@section('title')
    Tambah Product
@endsection

@section('content')
    <style>
        .container-fluid {
            max-width: 100% !important;
            width: 90% !important;
        }

        .container-fluid .row .form-wrapper {
            background-color: rgb(78, 40, 13);
            padding: 40px 80px;
            border-radius: 10px;
        }

        .container-fluid .form-wrapper img {
            width: 200px;
            height: 200px;
        }

        .container-fluid input {
            background-color: rgb(137, 70, 22);
            border: 2px solid chocolate;
            color: rgb(225, 223, 223);
        }

        .container-fluid input:focus {
            background-color: rgb(137, 70, 22);
            border: 2px solid chocolate;
            color: white;
            box-shadow: none !important;
        }

        .container-fluid input::placeholder {
            color: rgb(225, 223, 223);
        }

        .container-fluid select {
            background-color: rgb(137, 70, 22);
            border: 2px solid chocolate;
            color: white;
        }

        .container-fluid select.form-select {
            background-image: none !important;
        }

        .container-fluid option {
            background-color: white;
            color: black;
        }

        .container-fluid form button.btn-submit {
            border-radius: 10px;
            color: white !important;
            background-color: rgb(191, 94, 24) !important;
            width: 100%;
        }

        .container-fluid form button.btn-reset {
            border-radius: 10px;
            color: white !important;
            background-color: red !important;
            width: 100%;
        }

        .price-input::-webkit-inner-spin-button,
        .price-input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: textfield;
            margin: 0;
        }

        /* .form-select option.value-category, */
        .form-select option.value-category:hover,
        .form-select option.value-category:focus {
            background-color: blue !important;
            color: white !important;
        }

        @media (max-width: 800px) {

            .container-fluid {
                max-width: 100% !important;
                width: 95% !important;
            }

            .container-fluid .row .form-wrapper {
                padding: 30px 50px;
            }

            .container-fluid form button.btn-reset,
            .container-fluid form button.btn-submit {
                width: 100% !important;

            }
        }

        @media (max-width: 500px) {

            .container-fluid .row .form-wrapper {
                padding: 30px 40px;
            }

            .container-fluid form .button-wrapper {
                row-gap: 10px;
            }
        }
    </style>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12 form-wrapper text-center">
                <img src="{{ asset('imagesCompressed/logo69.png') }}" alt="" class="object-fit-cover">
                <h3 class="fs-3 text-center">Tambah Product</h3>
                <form action="{{ route('admin.productCreate.store') }}" class="mt-5" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <input type="text" class="form-control" id="namaProduct"
                                    placeholder="Masukkan Nama Product" name="nama_product">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <input type="number" class="form-control price-input" id="hargaProduct"
                                    placeholder="Masukkan Harga Product (Rp)" name="harga_product">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <select class="form-select" aria-label="Default select example" id="kategoriProduct"
                                    name="kategori_product">
                                    <option selected>Pilih Kategori Product</option>
                                    <option class="value-category" value="snackCemilan">Snack & Cemilan</option>
                                    <option class="value-category" value="nasiLauk">Nasi & Lauk</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <select class="form-select" aria-label="Default select example" id="stok"
                                    name="stok">
                                    <option selected>Tersedia / Tidak Tersedia</option>
                                    <option value="tersedia">Tersedia</option>
                                    <option value="tidakTersedia">Tidak Tersedia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <input type="file" class="form-control" name="foto_product">
                    </div>
                    <div class="row button-wrapper mt-3 justify-content-center row-gap-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-submit">Submit</button>
                        </div>
                        <div class="col-12">
                            <button type="reset" class="btn btn-reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('sweetAlert')
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: "error",
                title: "Validasi Gagal!",
                html: `{!! implode('<hr>', $errors->all()) !!}`
            });
        </script>
    @endif
@endsection
