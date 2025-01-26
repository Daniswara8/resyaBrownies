<style>
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

    @media (min-width: 768px) and (max-width: 850px) {
        .about img {
            width: 400px;
            height: 267px;
            object-fit: cover;
        }
    }

    @media (max-width: 500px) {
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
    }
</style>

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
