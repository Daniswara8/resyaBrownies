@extends('admin.layout.layoutAdminLte')

@section('title')
    Edit Product
@endsection

@section('titleHeader')
    Edit Product Yang Sudah Ada
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
                <form action="{{ route('admin.productEdit.store', $product->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="namaProduct" class="col-sm-2 col-form-label">Nama Product</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namaProduct" placeholder="Masukkan Nama Product"
                                name="nama_product" value="{{ old('nama_product', $product->nama_product) }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="hargaProduct" class="col-sm-2 col-form-label">Harga Product</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control price-input" id="hargaProduct"
                                placeholder="Masukkan Harga Product (Rp)" name="harga_product"
                                value="{{ old('harga_product', $product->harga_product) }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kategoriProduct" class="col-sm-2 col-form-label">Kategori Product</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="kategoriProduct"
                                name="kategori_product">
                                <option disabled>Pilih
                                    Kategori Product</option>
                                <option class="value-category" value="snackCemilan" @selected(old('kategori_product', $product->kategori_product) == 'snackCemilan')>Snack &
                                    Cemilan</option>
                                <option class="value-category" value="nasiLauk" @selected(old('kategori_product', $product->kategori_product) == 'nasiLauk')>Nasi & Lauk
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="stok" class="col-sm-2 col-form-label">Ketersediaan Stok</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="stok" name="stok">
                                <option disabled>Tersedia / Tidak Tersedia</option>
                                <option value="tersedia" @selected(old('stok', $product->stok) == 'tersedia')>Tersedia</option>
                                <option value="tidakTersedia @selected(old('stok', $product->stok) == 'tidakTersedia')">Tidak Tersedia</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fotoProduct" class="col-sm-2 col-form-label">Foto Product</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto_product">
                            @if ($product->foto_product)
                                <img src="{{ asset('storage/' . $product->foto_product) }}" alt="Foto Produk"
                                    class="object-fit-cover">
                            @endif
                        </div>
                    </div>
                    <div class="row button-wrapper mt-3 justify-content-end">
                        <div class="col-12 col-lg-2 text-end">
                            <button type="submit" class="btn btn-submit">Update</button>
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
