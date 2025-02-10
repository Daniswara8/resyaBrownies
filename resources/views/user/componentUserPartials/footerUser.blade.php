<style>
    .footer {
        background-color: #4e3c3b;
    }

    .footer .merk-depan {
        font-family: "Playwrite HU";
        font-size: 25px;
        color: whitesmoke;
    }

    .footer .merk-belakang {
        color: chocolate;
        font-family: "Playwrite HU";
        font-size: 25px;
    }

    .footer a {
        font-size: 1rem;
        cursor: pointer;
    }

    .footer .footer-contact p {
        margin-bottom: 5px !important;
    }

    .footer .bi-whatsapp {
        font-size: 1rem;
    }

    .footer .bi-envelope {
        font-size: 1rem;
    }

    .footer .bi-pin-map-fill {
        font-size: 1rem;
    }

    .footer .email {
        color: whitesmoke;
        font-size: 1rem;
    }

    .footer .map {
        color: whitesmoke;
        font-size: 1rem;
    }

    .quick-link a {
        text-decoration: none;
        color: whitesmoke;
    }

    @media (max-width: 850px) {
        .footer .footer-about p {
            margin-bottom: 5px !important;
        }
    }
</style>



<footer class="text-white py-4 footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 footer-about">
                <h4 class="text-white merk-depan fs-5 mt-2 mt-lg-0">Resya <span class="merk-belakang fs-5">Brownies</span>
                </h4>
                <p class="text-white mt-lg-3">Resya Brownies menyajikan Brownies yang enak, menyehatkan dan bikin
                    nagih
                </p>
                <p class="text-white">© 2024 Reserved by Daniswara Zavier Putra Akmal</p>
            </div>

            <div class="col-lg-4">

            </div>

            <div class="col-lg-2 mt-3 mt-lg-0 footer-contact">
                <h4 class="fs-5">Hubungi Kami</h4>
                <p class="mt-md-2 mt-lg-3">
                    <a href="https://wa.me/+6285640673917?text=Halo,%20saya%20tertarik%20dengan%20produk%20Anda"
                        target="_blank" class="text-white text-decoration-none instagram">
                        <i class="bi bi-whatsapp"></i> <span class="ms-1">WhatsApp</span>
                    </a>
                </p>
                <p>
                    <a href="https://www.instagram.com/resya_brownies/" target="_blank"
                        class="text-white text-decoration-none instagram">
                        <i class="bi bi-instagram"></i> <span class="ms-1">resya_brownies</span>
                    </a>
                </p>
                <p class="">
                    <a href="#" class="text-white text-decoration-none email">
                        <i class="bi bi-envelope-at"></i> <span class="ms-1">Email Here</span>
                    </a>
                </p>
                <p class="">
                    <a href="https://www.google.com/maps/@-7.0741034,110.420641,3a,75y,204.03h,68.48t/data=!3m7!1e1!3m5!1sYXtGALpj_kVbip09OOtsGA!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DYXtGALpj_kVbip09OOtsGA%26cb_client%3Dsearch.gws-prod.gps%26w%3D86%26h%3D86%26yaw%3D236.7331%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192?coh=205409&entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D"
                        target="_blank" class="text-white text-decoration-none map">
                        <i class="bi bi-pin-map"></i> <span class="ms-1">Location</span>
                    </a>
                </p>
            </div>

            <div class="col-lg-2 quick-link mt-3 mt-lg-0">
                <h4 class="text-white fs-5">Quick Links</h4>
                <ul class="list-unstyled mt-md-2 mt-lg-3 d-flex flex-column gap-1">
                    <li>
                        <a href="{{ route('home') }}#about">About</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#menu">Menu</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#testimoni">Testimoni</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#contact">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</footer>
