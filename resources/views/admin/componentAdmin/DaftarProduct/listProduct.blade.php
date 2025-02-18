@extends('admin.layout.layoutAdmin')

@section('title')
    Daftar Product
@endsection

@section('content')
    <style>
        .container-fluid table i {
            border-radius: 9px;
        }

        .container-fluid table a {
            text-decoration: none;
        }

        a.plus-product {
            text-decoration: none;
            background-color: rgb(43, 43, 227);
            color: white;
            padding: 15px 20px;
            border-radius: 10px;
            font-size: 18px;
            margin-left: 10px;
        }

        a.plus-product:hover {
            background-color: rgb(0, 0, 201);
            transition: background-color 0.3s;
        }

        .container-fluid table a {
            color: black !important;
        }

        i.btn-edit {
            padding: 10px;
        }

        .container-fluid table.display img {
            width: 100px;
            height: 100px;
        }

            .container-fluid table.display th,
            .container-fluid table.display td {
                text-align: center;
                vertical-align: middle;
            }

        .container-fluid table.display {
            background-color: white;
        }
    </style>

    <div class="container-fluid mt-3">
        <div class="row">
            <h3 class="text-center fs-1">Daftar Product</h3>
            <div class="col-12 mt-3">
                <div class="plus-button-wrapper text-center text-md-start">
                    <a href="{{ route('admin.productCreate.show') }}" class="plus-product">
                        <i class="bi bi-bag-plus-fill"></i>
                        Tambah Product
                    </a>
                </div>
                <div class="table-responsive mt-5">
                    <table id="myTable" class="display table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Product</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Ketersediaan</th>
                                <th>Foto Product</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $index => $product)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $product->nama_product }}</td>
                                    <td>Rp {{ number_format($product->harga_product, 0, ',', '.') }}</td>
                                    <td>{{ ucfirst($product->kategori_product) }}</td>
                                    <td>{{ ucfirst($product->stok) }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $product->foto_product) }}" alt=""
                                            class="object-fit-cover">
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center column-gap-2">
                                            <a href="{{ route('admin.productEdit.show', $product->id) }}">
                                                <i class="bi bi-pencil-fill bg-warning btn-edit"></i>
                                            </a>
                                            <form id="deleteForm-{{ $product->id }}"
                                                action="{{ route('admin.product.delete', $product->id) }}" method="POST"
                                                class="d-inline p-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger p-2"
                                                    onclick="confirmDelete({{ $product->id }})">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Product</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Ketersediaan</th>
                                <th>Foto Product</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('sweetAlert')
    <script>
        function confirmDelete(productId) {
            Swal.fire({
                title: "Apakah yakin ingin menghapus produk ini?",
                text: "Tindakan ini tidak bisa dibatalkan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`deleteForm-${productId}`).submit();
                }
            });
        }

        @if (session('success'))
            Swal.fire({
                title: "Berhasil!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK"
            });
        @endif
    </script>
@endsection
