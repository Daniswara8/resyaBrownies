<style>
    body {
        overflow-x: hidden;
        max-width: 100%;
    }

    .navbar {
        transition: all 1s;
        background-color: #4e3c3b;
    }

    /* .navbar-scrolled {
        background-color: #4e3c3b;
    } */

    .navbar .navbar-brand {
        font-family: "Playwrite HU";
        color: whitesmoke;
        font-size: 16px;
    }

    .navbar .merk {
        font-family: "Playwrite HU";
        color: chocolate;
    }

    .navbar .mid .nav-link {
        font-family: "PLaywrite HU";
        color: whitesmoke;
        font-size: 14px;
        margin: 20px;
    }

    .navbar .mid .nav-link:hover {
        font-family: "PLaywrite HU";
        font-weight: bold;
        color: whitesmoke;
        font-size: 14px;
        margin: 20px;
    }

    .navbar .right .nav-link {
        color: whitesmoke;
        font-size: 1.375rem;
    }

    .navbar .right .nav-link:hover {
        color: chocolate;
        transition: all 0.2s;
        font-size: 1.375rem;
    }

    .navbar .bi-list {
        color: whitesmoke;
        font-size: 2rem;
    }

    .navbar .bi-x {
        color: whitesmoke;
        font-size: 2rem;
    }

    .navbar .navbar-toggler {
        border: none !important;
        box-shadow: none !important;
    }

    @media (min-width: 768px) and (max-width: 850px) {
        .navbar {
            background-color: #4e3c3b;
        }

        .navbar .navbar-nav.mid {
            align-items: center;
        }

        .navbar .navbar-nav.right {
            flex-direction: row;
            justify-content: center;
            gap: 20px;
        }

        .navbar .container {
            margin: 20px auto;
        }

        .navbar .right .nav-link {
            font-size: 1.875rem;
        }
    }

    @media (max-width: 500px) {
        .navbar {
            background-color: #4e3c3b;
        }

        .navbar .navbar-nav.mid {
            align-items: center;
        }

        .navbar-nav.right {
            flex-direction: row;
            justify-content: center;
            gap: 20px;
        }

        .navbar .mid .nav-link {
            font-size: 12px;
            padding: 5px;
        }

        .navbar .container {
            margin: 20px auto;
        }

        .navbar .right .nav-link {
            font-size: 1.688rem;
        }
    }

    @media (max-width: 400px) {
        .navbar {
            background-color: #4e3c3b;
        }
    }
</style>
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand">
            Resya <span class="merk">Brownies</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i id="navbar-icon" class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mid">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product') }}">PRODUCT</a>
                </li>
            </ul>

            <ul class="navbar-nav right">
                <li class="nav-item">
                    <a href="{{ route('cart') }}" class="nav-link"><i class="bi bi-cart-fill"></i></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link"><i class="bi bi-person-circle"></i></a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<script>
    // memunculkan background - color saat di scroll
    // const navEl = document.querySelector('.navbar');
    // window.addEventListener('scroll', () => {
    //     if (window.scrollY > 56) {
    //         navEl.classList.add('navbar-scrolled');
    //     } else {
    //         navEl.classList.remove('navbar-scrolled');
    //     }
    // });

    // interactive button hamburger icon dan x icon di navbar 
    document.addEventListener("DOMContentLoaded", function() {
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarIcon = document.getElementById('navbar-icon');

        function updateNavbarIcon() {
            if (navbarToggler.getAttribute('aria-expanded') === 'true') {
                navbarIcon.classList.remove('bi-list');
                navbarIcon.classList.add('bi-x');
            } else {
                navbarIcon.classList.remove('bi-x');
                navbarIcon.classList.add('bi-list');
            }
        }
        updateNavbarIcon();
        const observer = new MutationObserver(updateNavbarIcon);
        observer.observe(navbarToggler, {
            attributes: true,
            attributeFilter: ['aria-expanded']
        });
        navbarToggler.addEventListener('click', function() {
            updateNavbarIcon();
        });
    });

    // collapse when clicked 
    document.querySelectorAll('.navbar .nav-link').forEach(function(link) {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                var navbarCollapse = document.getElementById('navbarSupportedContent');
                var bsCollapse = new bootstrap.Collapse(navbarCollapse);
                bsCollapse.hide();
            }
        });
    });
</script>
