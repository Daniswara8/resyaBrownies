@extends('user.layout.dashboardLayout.dashboardLayout')

@section('title')
    Daftar Pemesanan
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
    <div class="container-fluid">
        <h1 class="text-center fs-3">Daftar Pemesanan</h1>
        <div class="row">
            <div class="col-lg-12">
                <table id="myTable" class="display table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
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
                                <td>
                                    <img src="{{ asset('storage/' . $order->product->foto_product) }}"
                                        alt="{{ $order->product->foto_product }}" class="object-fit-cover" height="100"
                                        width="100">
                                </td>
                                <td>{{ $order->quantity }}</td>
                                <td>Rp. {{ number_format($order->jumlah_harga, 0, ',', '.') }}</td>
                                <td>{{ \Carbon\Carbon::parse($order->tanggal_pesan)->format('d-m-Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($order->tanggal_diambil)->format('d-m-Y') }}</td>
                                <td class="fs-5 text-uppercase fw-bold">{{ $order->status_pemesanan }}</td>
                                <td>
                                    <form id="confirmBatal-{{ $order->id }}"
                                        action="{{ route('profile.orderBatal.store', $order->id) }}" method="POST">
                                        @csrf
                                        <button type="button" class="btn btn-batal"
                                            onclick="confirmBatal({{ $order->id }})"
                                            @if ($order->status_pemesanan !== 'pending') disabled @endif>
                                            <i class="bi bi-bag-x-fill"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Foto Product</th>
                            <th>Kuantitas</th>
                            <th>Harga</th>
                            <th>Tanggal Pesan</th>
                            <th>Tanggal Diambil</th>
                            <th>Status Pemesanan</th>
                            <th>Aksi</th>
                        </tr>
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
