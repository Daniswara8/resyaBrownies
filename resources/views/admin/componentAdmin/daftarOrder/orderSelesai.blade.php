@extends('admin.layout.layoutAdmin')

@section('title')
    Pesanan Selesai
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
            <h3 class="fs-1 text-center">Pesanan Yang Sudah Diambil (Selesai)</h3>
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
                                <td class="fs-5 text-success fw-bold text-uppercase">{{ ucfirst($order->status_pemesanan) }}
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
    </script>
@endsection
