<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title')
    </title>

    {{-- Bootstrap Cdn Css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Datatables Cdn Css --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">

    {{-- link icon --}}
    <link rel="icon" href="{{ asset('imagesCompressed/logo69.png') }}" type="image/x-icon">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

        ::after,
        ::before {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        h1 {
            font-weight: 600;
            font-size: 1.5rem;
        }

        body {
            font-family: "Poppins", sans-serif;
            color: white;
        }

        .wrapper {
            display: flex;
        }

        .main {
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
            transition: all 0.35s ease-in-out;
            background-color: #fafbfe;
            background-color: rgb(158, 83, 30)
        }

        #sidebar {
            width: 80px;
            min-width: 80px;
            z-index: 1000;
            transition: all 0.25s ease-in-out;
            background-color: rgb(57, 29, 9);
            display: flex;
            flex-direction: column;
        }

        #sidebar.expand {
            width: 260px;
            min-width: 260px;
        }

        .toggle-wrapper {
            background-color: rgb(137, 70, 22);
            padding: 10px 0;
        }

        .toggle-btn {
            background-color: transparent;
            cursor: pointer;
            border: 0;
        }

        .toggle-btn i {
            font-size: 2rem;
            color: white;
        }

        .toggle-btn i:hover {
            font-size: 2rem;
            font-weight: bold !important;
        }

        a.logout-btn {
            background-color: transparent;
            cursor: pointer;
            border: 0;
        }

        a.logout-btn i {
            font-size: 2rem;
            color: white;
        }

        a.logout-btn span {
            color: white;
        }

        /* #sidebar:not(.expand) .sidebar-logo, */
        #sidebar:not(.expand) a.sidebar-link span,
        #sidebar:not(.expand) .logo-sidebar h3 {
            display: none;
        }

        #sidebar .logo-sidebar {
            padding: 0.625rem 0.75rem;
        }

        #sidebar img {
            width: 50px;
            height: 50px;
        }

        .sidebar-nav {
            padding: 4.5rem 0;
            flex: 1 1 auto;
        }

        a.sidebar-link {
            padding: 1rem 1.625rem;
            color: #fff;
            display: block;
            font-size: 0.9rem;
            white-space: nowrap;
            border-left: 3px solid transparent;
        }

        .sidebar-link i {
            font-size: 1.1rem;
            margin-right: 0.75rem;
        }

        a.sidebar-link:hover {
            background-color: rgba(255, 255, 255, 0.075);
            border-left: 3px solid #3b7ddd;
        }

        a.sidebar-link.active {
            background-color: blue;
        }

        .sidebar-item {
            position: relative;
        }

        #sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
            position: absolute;
            top: 0;
            left: 70px;
            background-color: #0e2238;
            padding: 0;
            min-width: 15rem;
            display: none;
        }

        #sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
            display: block;
            max-height: 15em;
            width: 100%;
            opacity: 1;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
            border: solid;
            border-width: 0 0.075rem 0.075rem 0;
            content: "";
            display: inline-block;
            padding: 2px;
            position: absolute;
            right: 1.5rem;
            top: 1.4rem;
            transform: rotate(-135deg);
            transition: all 0.2s ease-out;
        }

        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
            transform: rotate(45deg);
            transition: all 0.2s ease-out;
        }


        /* Sidebar Hilang pada resolusi <=768px */
        @media (max-width: 768px) {
            #sidebar {
                position: fixed;
                left: -80px;
                height: 100vh;
            }

            #sidebar.expand {
                left: 0;
            }

            a.logout-btn span.logout-text {
                display: none;
            }

            .wrapper {
                position: relative;
            }

            .main {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::routeIs('profile.show') ? 'active' : '' }}"
                        href="{{ route('profile.show') }}">
                        <i class="bi bi-person-fill"></i>
                        <span>Informasi Pribadi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::routeIs('profile.order') ? 'active' : '' }}"
                        href="{{ route('profile.order') }}">
                        <i class="bi bi-cart-fill"></i>
                        <span>Daftar Pemesanan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('home') }}" class="sidebar-link">
                        <i class="bi bi-arrow-return-left"></i>
                        <span>Kembali Ke Home</span>
                    </a>
                </li>
            </ul>
        </aside>
        <div class="main pb-3">

            {{-- Navbar Wrapper --}}
            <div class="d-flex justify-content-between toggle-wrapper px-3">
                <button class="toggle-btn" type="button">
                    <i class="bi bi-list"></i>
                </button>
                <a href="#" class="logout-btn d-flex column-gap-2" type="button" id="logoutBtn">
                    <span class="logout-text my-auto fs-5">Logout</span>
                    <i class="bi bi-box-arrow-right my-auto"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            {{-- End Navbar Wrapper --}}

            {{-- Main Content --}}
            <div class="mt-5 body-content">
                @yield('content')
            </div>
        </div>
    </div>

    {{-- Bootstrap Cdn Js --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

    {{-- SweetAlert Cdn Js --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('sweetAlert')

    <script>
        const sidebar = document.querySelector("#sidebar");
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function(e) {
            e.stopPropagation();
            sidebar.classList.toggle("expand");
        });

        document.addEventListener("click", function(e) {
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(e.target)) {
                    sidebar.classList.remove("expand");
                }
            }
        });

        sidebar.addEventListener("click", function(e) {
            e.stopPropagation();
        });

        document.getElementById('logoutBtn').addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: "Anda yakin ingin logout?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, logout",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            });
        });

        new DataTable('#myTable', {
            scrollX: true
        });
    </script>
</body>

</html>
