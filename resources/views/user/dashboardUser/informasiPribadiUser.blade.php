@extends('user.layout.dashboardLayout.dashboardLayout')
@section('content')
    <style>
        @media (max-width: 400px) {
            .container-fluid.form-wrapper {
                max-width: 100% !important;
                width: 90% !important;
            }
        }
    </style>

    <div class="container-fluid form-wrapper">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('pageTitle')
    <h1 class="text-center fs-3 mt-5">Informasi Pribadi</h1>
@endsection
