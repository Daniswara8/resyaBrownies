<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    {{-- Cdn Css Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- link icon website title --}}
    <link rel="icon" href="{{ asset('imagesCompressed/logo69.png') }}" type="image/x-icon">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

        body {
            background: linear-gradient(135deg, #6a2d11, #ff5733);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container .form-wrapper {
            padding: 40px;
            background: rgba(0, 0, 0, 0.85);
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
        }

        .container form {
            margin-top: 50px;
        }

        .container .form-wrapper label {
            color: white;
        }

        .container input.form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
        }

        /* Style saat input di tekan */
        .container input.form-control:focus {
            background-color: rgba(255, 255, 255, 0.2);
            border: 2px solid rgb(152, 76, 21);
            color: white;
            box-shadow: none !important;
        }

        .container form span.input-group-text {
            background-color: rgb(30, 29, 29);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        /* Untuk menghilangkan panah (spinner) di input number */
        #inputNomorTelepon::-webkit-inner-spin-button,
        #inputNomorTelepon::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: textfield;
            margin: 0;
        }

        .container form span.input-group-text i {
            color: grey
        }

        /* Merubah warna pada placeholder */
        .container form input.form-control::placeholder {
            color: grey;
        }

        .button-wrapper a.btn-register {
            background-color: #a83c24 !important;
            color: white;
            border: none;
            transition: all 0.3s;
        }

        .button-wrapper a.btn-register:hover {
            background-color: #c4462a !important;
        }

        .button-wrapper a.btn-login:focus {
            border: none !important;
        }


        /* Pengaturan Untuk Handphone */
        @media (max-width: 600px) {
            body {
                height: 100vh;
            }

            .container,
            .container .row,
            .container .form-wrapper {
                height: 100%;
            }

            .container .form-wrapper {
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                border-radius: 0;
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 form-wrapper my-auto">
                <h3 class="text-center text-white mb-4">Registrasi Akun</h3>
                <form>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input type="text" class="form-control" id="inputNamaLengkap" autocomplete="off"
                                placeholder="Masukkan Nama Lengkap Anda">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-telephone-fill"></i>
                            </span>
                            <input type="number" class="form-control" id="inputNomorTelepon" autocomplete="off"
                                placeholder="Masukkan Nomor Telepon">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-at-fill"></i>
                            </span>
                            <input type="text" class="form-control" id="inputEmail"
                                placeholder="Masukkan Email Anda">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" id="inputPassword"
                                placeholder="Masukkan Password ">
                        </div>
                    </div>
                    <div class="button-wrapper text-center">
                        <a href="#" class="btn-register btn w-100">Register</a>
                        <a href="{{ route('login') }}" class="btn btn-login text-white mt-4">Sudah Punya Akun? Login
                            Sekarang</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
