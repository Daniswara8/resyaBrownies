@extends('admin.layout.layoutAdmin')

@section('title')
    Menunggu Konfirmasi
@endsection

@section('content')
    <style>
        table.display {
            background-color: white;
        }

        table.display th,
        table.display td {
            text-align: center !important;
            vertical-align: middle !important;
            color: white
        }

        .container-fluid table.display {
            background-color: rgb(57, 29, 9);
        }
    </style>

    <div class="container-fluid mt-3">
        <div class="row">
            <h3 class="fs-1 text-center">Pesanan Yang Belum Dikonfirmasi</h3>
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
                            <th>Status Pengiriman</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td>Daniswara</td>
                        <td>085640673917</td>
                        <td>
                            <img src="" alt="foto_product" class="object-fit-cover" height="100" width="100">
                        </td>
                        <td>2</td>
                        <td>Rp. 100.000</td>
                        <td>2025-02-18 09:15:27</td>
                        <td>2025-02-21</td>
                        <td>Pending</td>
                        <td></td>
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
                        <th>Status Pengiriman</th>
                        <th>aksi</th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
