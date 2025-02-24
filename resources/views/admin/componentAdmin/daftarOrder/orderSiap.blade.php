@extends('admin.layout.layoutAdmin')

@section('title')
    Pesanan Siap
@endsection

@section('content')
    <style>
        table.display th,
        table.display td {
            text-align: center !important;
            vertical-align: middle !important;
            color: white
        }

        .container-fluid table.display {
            background-color: rgb(57, 29, 9);
        }

        .container-fluid table.display button.btn-kemas {
            background-color: green;
            color: white
        }

        .container-fluid table.display button.btn-batal {
            background-color: red;
            color: white;
        }
    </style>

    <div class="container-fluid mt-3">
        <div class="row">
            <h3 class="fs-1 text-center">Pesanan Yang Siap Diambil</h3>
            <div class="col-12 mt-3">
                <table id="myTable" class="display table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Foto Product</th>
                            <th>Kuantitas</th>
                            <th>Harga</th>
                            <th>Tanggal Pesan</th>
                            <th>Tanggal Diambil</th>
                            <th>Status Pemesanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $index => $order)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $order->user->nama }}</td>
                                <td>{{ $order->user->no_telepon }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $order->product->foto_product) }}"
                                        alt="{{ $order->product->nama_product }}" class="object-fit-cover" height="100"
                                        width="100">
                                </td>
                                <td>{{ $order->quantity }}</td>
                                <td>Rp. {{ number_format($order->jumlah_harga, 0, ',', '.') }}</td>
                                <td>{{ \Carbon\Carbon::parse($order->tanggal_pesan)->format('d-m-Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($order->tanggal_diambil)->format('d-m-Y') }}</td>
                                <td>{{ ucfirst($order->status_pemesanan) }}</td>
                                <td>
                                    <div class="d-flex flex-column row-gap-3 align-items-center">
                                        <form id="confirmSelesai-{{ $order->id }}"
                                            action="{{ route('admin.listSelesai.store', $order->id) }}" method="POST">
                                            @csrf
                                            <button type="button" class="btn btn-kemas"
                                                onclick="confirmSelesai({{ $order->id }})">
                                                <i class="bi bi-bag-check-fill"></i>
                                            </button>
                                        </form>

                                        <form id="confirmBatal-{{ $order->id }}"
                                            action="{{ route('admin.listBatal.store', $order->id) }}" method="POST">
                                            @csrf
                                            <button type="button" class="btn btn-batal"
                                                onclick="confirmBatal({{ $order->id }})">
                                                <i class="bi bi-bag-x-fill"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nomor Telepon</th>
                        <th>Foto Product</th>
                        <th>Kuantitas</th>
                        <th>Harga</th>
                        <th>Tanggal Pesan</th>
                        <th>Tanggal Diambil</th>
                        <th>Status Pemesanan</th>
                        <th>aksi</th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('sweetAlert')
    <script>
        @if (session('success'))
            Swal.fire({
                title: "Berhasil!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK"
            });
        @endif

        function confirmSelesai(orderId) {
            Swal.fire({
                title: "Apakah produk ini sudah siap diambil?",
                text: "Tindakan ini tidak bisa dibatalkan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, Siap!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`confirmSelesai-${orderId}`).submit();
                }
            });
        }

        function confirmBatal(orderId) {
            Swal.fire({
                title: "Apakah yakin ingin membatalkan pesanan ini?",
                text: "Tindakan ini tidak bisa dibatalkan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, batalkan!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`confirmBatal-${orderId}`).submit();
                }
            });
        }
    </script>
@endsection
