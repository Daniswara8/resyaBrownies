@extends('admin.layout.layoutAdminLte')

@section('title')
    Tambah Product
@endsection

@section('titleHeader')
    Tambahkan Product Baru
@endsection

@section('content')
    <style>
        .container-fluid form button.btn-submit {
            border-radius: 10px;
            color: white !important;
            background-color: rgb(191, 94, 24) !important;
            min-width: 150px !important;
        }

        .container-fluid form button.btn-reset {
            border-radius: 10px;
            color: white !important;
            background-color: red !important;
            min-width: 150px;
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

        @media (max-width: 500px) {

            .container-fluid form button.btn-reset,
            .container-fluid form button.btn-submit {
                width: 100% !important;
            }

            .container-fluid form .button-wrapper {
                row-gap: 10px;
            }
        }
    </style>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.productCreate.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="namaProduct" class="col-sm-2 col-form-label">Nama Product</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namaProduct" placeholder="Masukkan Nama Product"
                                name="nama_product">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="hargaProduct" class="col-sm-2 col-form-label">Harga Product</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control price-input" id="hargaProduct"
                                placeholder="Masukkan Harga Product (Rp)" name="harga_product">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kategoriProduct" class="col-sm-2 col-form-label">Kategori Product</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="kategoriProduct"
                                name="kategori_product">
                                <option selected>Pilih Kategori Product</option>
                                <option class="value-category" value="snackCemilan">Snack & Cemilan</option>
                                <option class="value-category" value="nasiLauk">Nasi & Lauk</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="stok" class="col-sm-2 col-form-label">Ketersediaan Stok</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="stok" name="stok">
                                <option selected>Tersedia / Tidak Tersedia</option>
                                <option value="tersedia">Tersedia</option>
                                <option value="tidakTersedia">Tidak Tersedia</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fotoProduct" class="col-sm-2 col-form-label">Foto Product</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto_product">
                        </div>
                    </div>
                    <div class="row button-wrapper mt-3 justify-content-end">
                        <div class="col-12 col-lg-2 text-end">
                            <button type="submit" class="btn btn-submit">Submit</button>
                        </div>
                        <div class="col-12 col-lg-2">
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
