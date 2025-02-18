@extends('user.layout.dashboardLayout.dashboardLayout')

@section('title')
    Profile User
@endsection

@section('content')
    <style>
        .form-wrapper {
            background-color: rgb(57, 29, 9);
            padding: 50px 60px 70px;
            border-radius: 10px;
        }

        .form-wrapper input {
            background-color: rgb(137, 70, 22);
            border: 2px solid chocolate;
            color: rgb(225, 223, 223);
        }

        .form-wrapper input:focus {
            background-color: rgb(137, 70, 22);
            border: 2px solid chocolate;
            color: white;
            box-shadow: none !important;
        }

        .form-wrapper input::placeholder {
            color: rgb(225, 223, 223);
        }

        .form-wrapper span.input-group-text {
            background-color: rgb(101, 54, 20);
            border: 2px solid chocolate;
            color: rgb(206, 203, 203);
        }

        .form-control:disabled {
            background-color: rgb(137, 70, 22) !important;
        }

        button.btn-edit {
            background-color: rgb(203, 132, 0);
            padding: 10px;
            color: white !important;
            border-radius: 10px;
        }

        button.btn-edit:hover {
            background-color: rgb(156, 101, 0);
            transition: background-color 0.3s;
        }

        button.btn-edit:active {
            background-color: rgb(156, 101, 0) !important;
            border: none !important;
        }

        button.btn-simpan {
            background-color: blue;
            padding: 10px;
            color: white !important;
            border-radius: 10px;
            display: none;
        }

        button.btn-simpan:hover {
            background-color: rgb(13, 13, 209);
            transition: background-color 0.3s;
        }

        button.btn-simpan:active {
            background-color: rgb(13, 13, 209) !important;
            border: none !important;
        }

        button.btn-hapus {
            background-color: red;
            color: white;
            padding: 10px;
            border-radius: 10px;
        }

        button.btn-hapus:hover {
            background-color: rgb(211, 0, 0);
            transition: background-color 0.3s;
        }

        button.btn-hapus:active {
            background-color: rgb(211, 0, 0) !important;
            border: none !important;
        }

        @media (max-width: 500px) {
            .form-wrapper {
                padding: 50px 30px 70px;
            }
        }
    </style>

    <div class="container-fluid">
        <h1 class="fs-2 text-center">Informasi Pribadi</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-11 col-md-10 form-wrapper">
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row justify-content-center row-gap-4">
                        <div class="col-lg-6">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" value="{{ auth()->user()->nama }}"
                                name="nama" disabled>
                        </div>
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}"
                                name="email" disabled>
                        </div>
                        <div class="col-lg-6">
                            <label for="no_telepon" class="form-label">No Telepon</label>
                            <input type="tel" class="form-control" id="no_telepon"
                                value="{{ auth()->user()->no_telepon }}" name="no_telepon" disabled>
                        </div>
                        <div class="col-lg-6">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" disabled>
                                <span class="input-group-text" id="togglePassword">
                                    <i class="bi bi-eye-fill"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="alamat" class="form-label ">Alamat</label>
                            <input type="text" class="form-control" id="alamat" value="{{ auth()->user()->alamat }}"
                                name="alamat" disabled>
                        </div>
                    </div>
                    <div class="row justify-content-center btn-wrapper mt-4 row-gap-4">
                        <div class="col-lg-10 text-center">
                            <button type="button" class="btn btn-edit w-100 justify-content-center" id="editProfile">
                                <div class="d-flex justify-content-center column-gap-2">
                                    <i class="bi bi-pencil"></i>
                                    Edit Profile
                                </div>
                            </button>
                            <button type="submit" class="btn btn-simpan w-100" id="saveButton">
                                <div class="d-flex justify-content-center column-gap-2">
                                    <i class="bi bi-bookmark-check"></i>
                                    Simpan Perubahan
                                </div>
                            </button>
                        </div>
                    </div>
                </form>

                {{-- Delete Form --}}
                <form action="{{ route('profile.delete') }}" method="POST" class="mt-4" id="deleteProfileForm">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                            <button type="button" class="btn btn-hapus w-100" id="deleteProfile">
                                <div class="d-flex justify-content-center column-gap-2">
                                    <i class="bi bi-trash"></i>
                                    Hapus Akun
                                </div>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const editButton = document.getElementById("editProfile");
            const saveButton = document.getElementById("saveButton");
            const inputs = document.querySelectorAll("input");

            editButton.addEventListener("click", function() {
                inputs.forEach(input => {
                    input.disabled = false;
                });

                editButton.style.display = "none";
                saveButton.style.display = "block";
            });

            const togglePassword = document.getElementById("togglePassword");
            const passwordField = document.getElementById("password");

            togglePassword.addEventListener("click", function() {
                if (passwordField.type === "password") {
                    passwordField.type = "text";
                    togglePassword.innerHTML = '<i class="bi bi-eye-slash-fill"></i>';
                } else {
                    passwordField.type = "password";
                    togglePassword.innerHTML = '<i class="bi bi-eye-fill"></i>';
                }
            });
        });
    </script>
@endsection

@section('sweetAlert')
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: "error",
                title: "Validasi Gagal!",
                html: `{!! implode('<hr>', $errors->all()) !!}`
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK"
            });
        </script>
    @endif

    <script>
        document.getElementById('deleteProfile').addEventListener('click', function(e) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Akun Anda akan dihapus secara permanen!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteProfileForm').submit();
                }
            });
        });
    </script>
@endsection
