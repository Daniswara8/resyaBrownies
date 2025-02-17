@extends('logRes.logResLayout.logResLayout')
@section('title')
    Login
@endsection

@section('content')
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

        /* Style ini akan muncul jika value input tidak valid */
        .is-invalid {
            border: 2px solid red !important;
            background-color: #ffe6e6;
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

        .button-wrapper button.btn-login {
            background-color: #a83c24 !important;
            color: white;
            border: none;
            transition: all 0.3s;
        }

        .button-wrapper button.btn-login:hover {
            background-color: #c4462a !important;
        }

        .button-wrapper a.btn-register:focus {
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 form-wrapper my-auto">
                <h3 class="text-center text-white mb-4">Login Akun</h3>
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-at-fill"></i>
                            </span>
                            <input type="text" class="form-control" id="inputEmail" placeholder="Masukkan Email Anda"
                                name="email" data-placeholder="Masukkan Email Anda">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Masukkan Password"
                                name="password" data-placeholder="Masukkan Password" autocomplete="off">
                        </div>
                    </div>
                    <div class="button-wrapper text-center">
                        <button type="submit" class="btn-login btn w-100">Login</button>
                        <a href="{{ route('register.index') }}" class="btn btn-register text-white mt-4">Belum Punya Akun?
                            Register
                            Disini</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('sweetAlert')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector("form");
            const inputs = form.querySelectorAll("input");
            const emailInput = document.getElementById("inputEmail");
            const passwordInput = document.getElementById("inputPassword")

            form.addEventListener("submit", function(event) {
                let isValid = true;

                // Validasi Jika Salah satu input kosong
                inputs.forEach(input => {
                    if (input.value.trim() === "") {
                        input.classList.add("is-invalid");
                        input.value = "";
                        input.placeholder = `Masukkan ${input.dataset.placeholder} dengan benar!`;
                        isValid = false;
                    } else {
                        input.classList.remove("is-invalid");
                    }
                });

                // Validasi Email
                if (!emailInput.value.includes("@")) {
                    emailInput.classList.add("is-invalid");
                    emailInput.value = "";
                    emailInput.placeholder = "Email harus mengandung @!";
                    isValid = false;
                } else {
                    emailInput.classList.remove("is-invalid");
                }

                // Validasi minimum password
                if (passwordInput.value.length < 8) {
                    passwordInput.classList.add("is-invalid");
                    passwordInput.value = "";
                    passwordInput.placeholder = "Passowrd Minimal 8 Karakter!";
                    isValid = false;
                } else {
                    noTelepon.classList.remove("is-invalid");
                }

                if (!isValid) {
                    event.preventDefault();
                }
            });

            // Hilangkan class is-invalid jika user mengisi input kembali
            inputs.forEach(input => {
                input.addEventListener("input", function() {
                    this.classList.remove("is-invalid");
                    this.placeholder = this.dataset.placeholder;
                });
            });
        });
    </script>

    {{-- SweetAlert Saat Sudah bisa Register --}}
    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK',
                });
            });
        </script>
    @endif

    {{-- SweetAlert saat login gagal --}}
    @if (session('error'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'error',
                    title: 'login Gagal',
                    text: '{{ session('error') }}',
                    confirmButtonText: 'OK',
                });
            });
        </script>
    @endif
@endsection
