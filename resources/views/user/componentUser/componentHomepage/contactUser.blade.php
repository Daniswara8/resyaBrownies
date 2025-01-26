<style>
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

    @media (max-width: 500px) {
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

    @media (max-width: 400px) {
        .contact {
            padding: 100px 0 50px;
        }

        .contact .card-contact p {
            text-align: justify;
        }
    }
</style>

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
