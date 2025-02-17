@extends('user.layout.dashboardLayout.dashboardLayout')
@section('content')
    <style>
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            white-space: nowrap;
        }

        .container-fluid {
            max-width: 100% !important;
            width: 95% !important;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>Jakarta</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Doe</td>
                                <td>jane@example.com</td>
                                <td>Bandung</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Budi Santoso</td>
                                <td>budi@example.com</td>
                                <td>Surabaya</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Siti Aminah</td>
                                <td>siti@example.com</td>
                                <td>Yogyakarta</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ahmad Zaki</td>
                                <td>ahmad@example.com</td>
                                <td>Medan</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Lina Kartini</td>
                                <td>lina@example.com</td>
                                <td>Bali</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
