@extends('user.layout.mainLayout.mainLayout')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&display=swap');

        .parallax {
            background-image: url('imagesCompressed/bgBrownies.jpg');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
        }

        .jargon h3 {
            font-family: "Playwrite HU";
        }

        .about {
            padding: 100px 0 0;
            background: linear-gradient(135deg, #2e2e2e, #3e2723, #1c1c1c);
        }

        .about p {
            text-align: justify;
            color: whitesmoke;
        }

        .promosi {
            margin-top: 180px;
        }

        .promosi .merk-depan {
            color: whitesmoke;
            font-family: "Playwrite HU";
        }

        .promosi .merk-belakang {
            color: chocolate;
            font-family: "Playwrite HU";
        }

        .promosi .card {
            background-color: rgb(123, 73, 38);
        }

        .promosi .card-body {
            padding: 50px 40px 30px;
        }

        .promosi .card .card-body i {
            background-color: rgb(147, 76, 26);
            padding: 1rem;
            font-size: 1.875rem;
            border-radius: 50%;
            color: white;
        }

        .promosi .card:hover .card-body i,
        .promosi .card .card-body i:hover {
            background-color: chocolate;
            transition: all 0.3s;
        }

        .menu {
            padding: 50px 0;
            background-color: #251409;
        }

        .menu .merk-depan {
            color: whitesmoke;
            font-family: "Playwrite HU";
        }

        .menu .merk-belakang {
            color: chocolate;
            font-family: "Playwrite HU";
        }

        .menu .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none !important;
            transition: all 0.3s ease;
        }

        .menu .card:hover {
            transform: translateY(-1rem);
        }

        .menu .card-body {
            background-color: #4e3c3b;
        }

        .menu .card-img-top {
            height: 300px;
            object-fit: cover;
        }

        .menu .card-body {
            color: white;
            text-align: center;
        }

        .menu hr {
            margin: 1rem auto;
        }

        .menu .row .btn {
            background-color: chocolate !important;
            color: white;
            font-weight: bold;
            padding: 1rem 1.25rem;
            font-size: 1rem;
            border: 2px solid chocolate !important;
        }

        .menu .row .btn:hover {
            background-color: transparent !important;
            transition: all 0.3s;
        }

        .menu .btn.other {
            margin-top: 60px;
            background-color: chocolate;
            color: white;
            font-weight: bold;
            padding: 16px 24px;
            text-transform: uppercase;
            font-size: 1.2rem;
            border: 3px solid chocolate !important;
        }

        .menu .btn.other:hover {
            background-color: rgb(126, 65, 21) !important;
            transition: all 0.2s;
            border: 3px solid rgb(126, 65, 21) !important;
        }

        .faq {
            background-color: #3e281d;
            padding: 150px 0 150px;
        }

        .faq hr {
            background-color: whitesmoke;
            height: 2px;
        }

        .faq p {
            color: rgb(167, 165, 165);
        }

        .faq .accordion .accordion-button {
            background-color: rgb(120, 52, 3);
            border: none !important;
            box-shadow: none !important;
            color: white !important;
        }

        .faq .accordion .accordion-button:hover {
            background-color: rgb(165, 73, 8);
        }

        .faq .accordion .accordion-button:active {
            background-color: rgb(165, 73, 8);
        }

        .faq .accordion .accordion-button::after {
            background-image: none !important;
            content: "\F282";
            text-align: center;
            font-family: "bootstrap-icons";
            color: white;
        }

        .contact {
            background-color: #663c27;
            padding: 100px 50px 50px;
            color: whitesmoke;
        }

        .card-contact {
            background: linear-gradient(135deg, #523223, #42281c);
        }

        .contact a {
            background-color: chocolate !important;
            border: 3px solid chocolate !important;
            color: white !important;
            font-size: 1rem;
            font-weight: bold;
            width: 13rem;
            height: auto;
        }

        .contact a:hover {
            background-color: transparent !important;
            transition: all 0.3s;
        }

        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
            padding: 0;
            overflow: hidden;
        }

        .embed-responsive::before {
            content: "";
            display: block;
            padding-top: 56.25%;
        }

        .embed-responsive-item {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .contact .location {
            margin-top: 4rem;
        }

        .contact .merk-depan {
            font-family: "Playwrite HU";
            color: whitesmoke;
        }

        .contact .merk-belakang {
            color: chocolate;
            font-family: "Playwrite HU";
        }

        .contact .info-contact h5 {
            margin-bottom: 0;
        }

        .contact .location .d-flex {
            margin-top: 1.875rem;
        }

        @media (min-width: 768px) and (max-width: 850px) {
            .parallax img {
                width: 300px;
                height: 300px;
                object-fit: cover;
            }

            .about img {
                width: 400px;
                height: 267px;
                object-fit: cover;
            }
        }

        @media (max-width: 500px) {
            .parallax img {
                width: 250px;
                height: 250px;
                object-fit: cover;
            }

            .about {
                padding: 100px 0 0;
            }

            .about img {
                width: 300px;
                height: 300px;
                object-fit: cover;
            }

            .about .promosi {
                padding: 0 10px;
            }

            .menu {
                padding: 50px 15px;
            }

            .contact {
                padding: 100px 0 50px;
            }

            .contact img {
                width: 300px;
                height: 300px;
            }

            .contact .card-contact p {
                text-align: justify;
            }
        }

        @media (max-width:400px) {
            .menu .btn.other {
                margin-top: 40px;
            }

            .menu {
                padding: 50px 10px;
            }

            .contact {
                padding: 100px 0 50px;
            }

            .contact .card-contact p {
                text-align: justify;
            }
        }
    </style>

    {{-- Banner --}}
    <section class="parallax">
        <div class="row justify-content-center mt-5 h-100">
            <div class="col-md-5 my-auto">
                <div class="text-center">
                    <img src="{{ asset('imagesCompressed/logo69.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-lg-6 my-md-auto text-center">
                <div class="jargon">
                    <h3 class="fs-2 text-white">
                        Sweet, Delicious, and Healthy
                    </h3>
                    <a href="#menu" class="btn btn-outline-light mt-4 btn-lg">Check Our Product!</a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Banner --}}

    {{-- About Us --}}
    <section class="container-fluid about" id="about">
        <h3 class="text-center fs-1 text-white">ABOUT US</h3>
        <div class="row justify-content-center justify-content-lg-around justify-content-xl-center mt-5" data-aos="fade-up"
            data-aos-duration="700">
            <div class="col-lg-4 text-center my-auto my-xl-0">
                <img src="{{ asset('imagesCompressed/about.jpg') }}" alt="" height="400" width="450"
                    class="object-fit-cover aboutImg">
            </div>
            <div class="col-10 col-lg-5 my-auto">
                <p class="fs-5 mt-5 mt-lg-0" data-aos="fade-right" data-aos-duration="1000">Selamat datang di Resya
                    Brownies,
                    tempat di
                    mana kelezatan dan kualitas menjadi
                    prioritas utama kami. Resya Brownies adalah UMKM yang berfokus pada pembuatan berbagai macam
                    makanan lezat yang siap memanjakan lidah Anda.</p>
                <p class="mt-3 fs-5">Kami memulai perjalanan kami dengan brownies, kue cokelat yang
                    memiliki tekstur
                    unik dan rasa yang mendalam. Setiap gigitan brownies kami dibuat dengan bahan-bahan berkualitas
                    tinggi dan cinta, menghasilkan sensasi yang tak terlupakan. Tidak hanya brownies, kami juga menyediakan
                    nasi tumpeng untuk berbagai acara spesial.</p>
            </div>

        </div>


        <div class="promosi">
            <h3 class="text-center fs-1 text-white">KENAPA MEMBELI DI <span class="merk-depan">Resya</span>
                <span class="merk-belakang">Brownies</span>
            </h3>

            <div class="container my-5">
                <div class="row justify-content-center row-gap-5">
                    <div class="col-md-8 col-xl-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="bi bi-gem text-center"></i>
                                <h4 class="fs-4 text-white my-4">Menggunakan Bahan Premium</h4>
                                <p class="fs-5 text-white">Produk yang dibuat Resya Brownies menggunakan bahan bahan yang
                                    premium sehingga memastikan bahwa setiap brownies yang dibuat memiliki kualitas rasa
                                    terbaik dan aman dikonsumsi oleh konsumen</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xl-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="bi bi-box-seam"></i>
                                <h4 class="fs-4 text-white my-4">Menggunakan Packaging yang berkualitas</h4>
                                <p class="fs-5 text-white">Packaging brownies kami dirancang khusus untuk menjaga kualitas
                                    dan keamanan produk hingga sampai ke tangan Anda. kami memastikan brownies tetap segar
                                    dan lezat setiap saat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xl-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <h4 class="fs-4 text-white my-4">Mengutamakan Kepuasan Konsumen</h4>
                                <p class="fs-5 text-white">Belanja di Resya Brownies dijamin memuaskan! Kami berkomitmen
                                    memberikan produk brownies terbaik dengan rasa yang tak tertandingi dan layanan
                                    yang ramah. Kepuasan Anda adalah prioritas utama kami.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#251409" fill-opacity="1"
                d="M0,128L26.7,117.3C53.3,107,107,85,160,112C213.3,139,267,213,320,202.7C373.3,192,427,96,480,90.7C533.3,85,587,171,640,181.3C693.3,192,747,128,800,106.7C853.3,85,907,107,960,112C1013.3,117,1067,107,1120,90.7C1173.3,75,1227,53,1280,69.3C1333.3,85,1387,139,1413,165.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
            </path>
        </svg>
    </section>
    {{-- End About Us --}}

    {{-- Rekomendasi Menu --}}
    <section class="menu" id="menu">
        <h3 class="text-center fs-1 text-white">REKOMENDASI MENU <span class="merk-depan">Resya</span> <span
                class="merk-belakang">Brownies</span> </h3>
        <div class="container my-5">

            <div class="row justify-content-center gy-5">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{{ asset('images/brownies.jpg') }}" class="card-img-top">
                        <div class="card-body py-4">
                            <h5 class="fs-4"> <span class="merk-depan">Resya</span> <span
                                    class="merk-belakang">Brownies</span> </h5>
                            <hr class="w-75">
                            <h5 class="card-title fs-4">Brownies Coklat</h5>
                            <hr class="w-75">
                            <h5 class="card-title fs-4">Rp. 150.000 / BOX</h5>
                            <hr class="w-75">
                            <a href="#" class="btn border border-0">TAMBAH KE KERANJANG</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{{ asset('images/boluGulung.jpg') }}" class="card-img-top">
                        <div class="card-body py-4">
                            <h5 class="fs-4"> <span class="merk-depan">Resya</span> <span
                                    class="merk-belakang">Brownies</span> </h5>
                            <hr class="w-75">
                            <h5 class="card-title fs-4">Bolu Gulung</h5>
                            <hr class="w-75">
                            <h5 class="card-title fs-4">Rp. 100.000 / BOX</h5>
                            <hr class="w-75">
                            <a href="#" class="btn border border-0">TAMBAH KE KERANJANG</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{{ asset('images/serabiTampah.jpg') }}" class="card-img-top">
                        <div class="card-body py-4">
                            <h5 class="fs-4"> <span class="merk-depan">Resya</span> <span
                                    class="merk-belakang">Brownies</span> </h5>
                            <hr class="w-75">
                            <h5 class="card-title fs-4">Serabi Tampah</h5>
                            <hr class="w-75">
                            <h5 class="card-title fs-4">Rp. 200.000 / BOX</h5>
                            <hr class="w-75">
                            <a href="#" class="btn border border-0">TAMBAH KE KERANJANG</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('product') }}" class="btn border border-0 other">Lihat Produk Lain</a>
            </div>
        </div>
    </section>
    {{-- End Rekomendasi Menu --}}

    {{-- Faq --}}
    <section class="faq">
        <h3 class="fs-1 text-white text-center" data-aos="fade-right" data-aos-duration="700">Frequently Ask Questions
        </h3>
        <hr class="mx-auto w-50">
        <p class="fs-5 text-center" data-aos="fade-left" data-aos-duration="700">Pertanyaan yang sering ditanyakan
            Seputar
            Resya Brownies</p>
        <div class="row mt-5 justify-content-center" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-10 col-md-9 col-lg-6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Apakah Weekend Masih Melayani Pemesanan?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Tidak, karena Pemilik sedang istirahat</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Apakah melayani pesanan dalam jumlah besar seperti untuk hajatan?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Ya, kami melayani Pemesanan dalam jumlah besar seperti hajatan
                                atau acara
                                pernikahan
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Apakah pesanan bisa di antar?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Kontol Enak aja Lu</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                Kenapa Membeli Di Resya Brownies?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        Produk yang dibuat Resya Brownies menggunakan bahan bahan yang premium sehingga
                                        memastikan bahwa
                                        setiap brownies yang dibuat memiliki kualitas rasa terbaik dan aman dikonsumsi
                                        oleh konsumen
                                    </li>
                                    <li class="mt-3">
                                        Packaging brownies kami dirancang khusus untuk menjaga kualitas dan keamanan
                                        produk hingga sampai
                                        ke tangan Anda. Dengan bahan berkualitas dan proses pengemasan yang higienis,
                                        kami memastikan
                                        brownies tetap segar dan lezat setiap saat
                                    </li>
                                    <li class="mt-3">
                                        Belanja di Resya Brownies dijamin memuaskan! Kami berkomitmen untuk memberikan
                                        produk brownies
                                        terbaik dengan rasa yang tak tertandingi dan layanan yang ramah. Kepuasan Anda
                                        adalah prioritas
                                        utama kami.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Faq --}}

    {{-- Contact --}}
    <section class="contact" id="contact">
        <h3 class="fs-1 text-center">CONTACT US</h3>
        <p class="fs-4 text-center">Berikan Kritik, Saran atau Pesan Untuk Kami
        </p>

        <div class="container my-5">
            <div class="row justify-content-center py-5 bg-primary card-contact">

                <div class="col-10 col-lg-8" data-aos="fade-right" data-aos-duration="1000">
                    <h4 class="fs-2">Ayo Diskusi Dengan Kami</h4>
                    <p class="fs-5 mt-3">
                        Beli Brownies tinggal Chat di WhatsApp kami, atau kunjungi Instagram kami
                    </p>
                </div>
                <div class="col-10 col-lg-3 col-xl-2 my-auto text-center" data-aos="fade-left" data-aos-duration="1000">
                    <a href="https://wa.me/+6285640673917?text=Halo,%20saya%20tertarik%20dengan%20produk%20Anda"
                        target="_blank" class="btn border border-0 text-white py-3">CONTACT US HERE</a>
                </div>

            </div>

            <div class="location row justify-content-center">
                <div class="col-10 col-lg-5 order-2 order-lg-1 mt-5 mt-lg-0">
                    <h3 class="fs-1 merk-depan">Resya <span class="merk-belakang">Brownies</span> </h3>
                    <p class="fs-5 mt-2 mt-lg-4">Resya Brownies menyajikan Brownies yang enak, menyehatkan dan bikin nagih
                    </p>

                    <div class="d-flex gap-3 mt-4" data-aos="fade-right" data-aos-duration="500">
                        <i class="bi bi-geo-alt-fill fs-2"></i>
                        <div class="info-contact">
                            <h5 class="fs-5">Alamat : </h5>
                            <p>Jl. Meranti Tim. Dalam III No.74</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mt-2" data-aos="fade-right" data-aos-duration="1000">
                        <i class="bi bi-envelope-at fs-2"></i>
                        <div class="info-contact">
                            <h5 class="fs-5">Email : </h5>
                            <p>ResyaBrownies20@gmail.com</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mt-2" data-aos="fade-right" data-aos-duration="1500">
                        <i class="bi bi-whatsapp fs-2"></i>
                        <div class="info-contact">
                            <h5 class="fs-5">No WhatsApp : </h5>
                            <p>+6285640673917</p>
                        </div>
                    </div>

                </div>
                <div class="col-10 col-lg-5 order-1 order-lg-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.445766844912!2d110.41789667479486!3d-7.0742045693378115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70894bd693a6a9%3A0xfc456018f255bbc6!2sJl.%20Meranti%20Tim.%20Dalam%20III%20No.74%2C%20Padangsari%2C%20Kec.%20Banyumanik%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050263!5e0!3m2!1sid!2sid!4v1721704549126!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>


        </div>

    </section>
    {{-- End Contact --}}
@endsection
