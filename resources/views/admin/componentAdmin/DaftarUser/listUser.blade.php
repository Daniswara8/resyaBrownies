@extends('admin.layout.layoutAdmin')

@section('title')
    Daftar User
@endsection

@section('content')
    <style>
        .container-fluid table.display {
            background-color: white;
        }

        .container-fluid table.display th,
        .container-fluid table.display td {
            text-align: center;
            vertical-align: middle;
        }

        .container-fluid table.display {
            background-color: rgb(57, 29, 9);
        }

        table th,
        table td {
            color: white !important;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center fs-1">Daftar User</h3>
                <div class="table-responsive mt-4">
                    <table id="myTable" class="display table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat Email</th>
                                <th>Alamat</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->no_telepon }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->alamat }}</td>
                                    <td>{{ $user->role }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat Email</th>
                            <th>Alamat</th>
                            <th>Role</th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
