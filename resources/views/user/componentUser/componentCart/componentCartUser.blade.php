<style>
    body {
        background-color: rgb(154, 79, 26);
    }

    h1 {
        margin-top: 180px;
    }

    .cart {
        margin: 100px 0 100px;
    }

    .container.row-wrapper {
        padding: 40px 10px;
        background-color: rgb(119, 64, 25);
        border-radius: 8px;
    }

    .cart .container button.btn-minus i,
    .cart .container button.btn-plus i {
        color: white
    }

    .cart .container button.btn-minus:hover i,
    .cart .container button.btn-plus:hover i {
        font-weight: bold;
        transition: all 0.2s;
    }

    .cart .container button.btn-minus:active,
    .cart .container button.btn-plus:active {
        border: 1px solid white !important;
    }

    /* Untuk menghilangkan panah (spinner) di input quantity */
    #quantity::-webkit-inner-spin-button,
    #quantity::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: textfield;
        margin: 0;
    }

    .cart .container .trash-column i {
        color: white;
        background-color: red;
        padding: 10px;
        border-radius: 10px;
    }

    .cart .container .trash-column a:hover i {
        background-color: rgb(180, 6, 6);
        transition: all 0.3s;
    }

    .cart .container.total {
        background-color: rgb(119, 64, 25);
        padding: 30px 40px;
        border-radius: 8px;
    }

    .cart .container.total input[type="datetime-local"] {
        background-color: #8B4513;
        border: none;
        padding: 10px;
        border-radius: 8px;
        color: white;
        font-size: 1.2rem;
        text-align: center;
        outline: none;
        width: 100%;
    }

    .cart .container.total input[type="datetime-local"]::-webkit-calendar-picker-indicator {
        filter: invert(1);
        cursor: pointer;
    }

    .cart .container.total .checkout .btn-checkout {
        background-color: rgb(181, 97, 38) !important;
        padding: 10px 0;
        color: white;
        font-weight: bold;
    }

    .cart .container.total .checkout .btn-checkout:hover {
        background-color: chocolate !important;
    }


    /* Pengaturan untuk Handphone */
    @media (max-width: 500px) {
        .cart .container.row-wrapper {
            padding: 40px 20px;
            max-width: 100% !important;
            width: 90% !important;
        }

        .cart .container .row {
            row-gap: 20px;
        }

        .cart .container img {
            width: 250px;
            height: 250px;
        }
    }

    /* Pengaturan untuk tablet */
    @media (min-width: 768px) and (max-width: 800px) {
        .cart .container.row-wrapper {
            max-width: 100% !important;
            width: 95%;
            padding: 40px 25px;
        }

        .cart .container .row {
            row-gap: 20px;
        }

        .cart .container img {
            width: 100px;
            height: 100px;
        }

        .cart .container .product-column h3.fs-4 {
            font-size: 16px !important;
        }

        .cart .container .product-column h3.fs-5 {
            font-size: 14px !important;
        }
    }
</style>

<h1 class="text-white text-center">Keranjang Anda Kosong</h1>
<section class="cart d-flex flex-column row-gap-5">

    <div class="container row-wrapper">
        <div class="row justify-content-lg-center justify-content-xl-around">
            <div class="col-md-2 col-lg-3 col-xl-2 my-auto text-center">
                <img src="{{ asset('images/brownies.jpg') }}" alt="Brownies" class="object-fit-cover" height="150"
                    width="150">
            </div>
            <div class="col-md-3 col-lg-3 my-auto product-column">
                <h3 class="text-white fs-4 text-center text-lg-start">Brownies Coklat</h3>
                <h3 class="text-white fs-5 text-center text-lg-start">Kategori : Snack & Cemilan</h3>
            </div>
            <div class="col-md-3 col-lg-3 d-flex align-items-center justify-content-center quantity-column">
                <button class="btn btn-minus px-3 py-2" onclick="changeQuantity(-1)">
                    <i class="bi bi-dash-lg"></i>
                </button>

                <input id="quantity" min="1" name="quantity" value="1" type="number"
                    class="form-control text-center mx-2 border-0 shadow-sm"
                    style="max-width: 70px; font-size: 1.2rem;">

                <button class="btn btn-plus px-3 py-2" onclick="changeQuantity(1)">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>
            <div class="col-md-3 col-lg-2 my-auto price-column">
                <h4 class="fs-4 text-white text-center text-lg-start text-xl-center">Rp. 100.000</h4>
            </div>
            <div class="col-md-1 col-lg-1 my-auto trash-column text-end text-lg-start text-xl-center">
                <a href="#">
                    <i class="bi bi-trash3-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container row-wrapper">
        <div class="row justify-content-lg-center justify-content-xl-around">
            <div class="col-md-2 col-lg-3 col-xl-2 my-auto text-center">
                <img src="{{ asset('images/nasiTumpeng.jpg') }}" alt="Brownies" class="object-fit-cover" height="150"
                    width="150">
            </div>
            <div class="col-md-3 col-lg-3 my-auto product-column">
                <h3 class="text-white fs-4 text-center text-lg-start">Nasi Tumpeng</h3>
                <h3 class="text-white fs-5 text-center text-lg-start">Kategori : Nasi & Lauk</h3>
            </div>
            <div class="col-md-3 col-lg-3 d-flex align-items-center justify-content-center quantity-column">
                <button class="btn btn-minus px-3 py-2" onclick="changeQuantity(-1)">
                    <i class="bi bi-dash-lg"></i>
                </button>

                <input id="quantity" min="1" name="quantity" value="1" type="number"
                    class="form-control text-center mx-2 border-0 shadow-sm"
                    style="max-width: 70px; font-size: 1.2rem;">

                <button class="btn btn-plus px-3 py-2" onclick="changeQuantity(1)">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>
            <div class="col-md-3 col-lg-2 my-auto price-column">
                <h4 class="fs-4 text-white text-center text-lg-start text-xl-center">Rp. 250.000</h4>
            </div>
            <div class="col-md-1 col-lg-1 my-auto trash-column text-end text-lg-start text-xl-center">
                <a href="#">
                    <i class="bi bi-trash3-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container total">
        <div class="row justify-content-between">
            <div class="col-6 col-lg-3 col-xl-2">
                <h3 class="fs-4 fs-lg-1 text-white">Total Harga :</h3>
            </div>
            <div class="col-6 col-lg-2">
                <h3 class="fs-4 fs-lg-1 text-white text-end">Rp. 350.000</h3>
            </div>
        </div>

        <hr class="w-100 text-white">

        <div class="row justify-content-between checkout">
            <div class="col-lg-7">
                <h3 class="fs-4 text-danger fw-bold">PERINGATAN : </h3>
                <p class="text-white fs-4" style="text-align: justify">Cek history pembelian di dashboard, Jika 3 jam
                    setelah checkout pada jam operasional (09.00 - 20.00 WIB) tidak terjadi
                    perubahan pada status pembelian (tetap menunggu konfirmasi), maka silahkan hubungi admin melalui
                    whatsapp. Namun ketika pesanan sudah dikonfirmasi admin, maka pesanan tidak dapat dibatalkan!</p>
            </div>
            <div class="col-lg-4 col-xl-3 text-center text-lg-end">
                <form action="#" class="d-flex flex-column row-gap-3">
                    <label for="birthdaytime" class="text-white fs-4 fw-bold">Pesan Maksimal H-3</label>
                    <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                    <a href="" class="btn btn-checkout">CHECKOUT</a>
                </form>
            </div>
        </div>
    </div>

</section>

<script>
    function changeQuantity(amount) {
        let input = document.getElementById("quantity");
        let newValue = parseInt(input.value) + amount;
        if (newValue >= 0) {
            input.value = newValue;
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        let dateInput = document.getElementById("birthdaytime");
        let today = new Date();
        today.setDate(today.getDate() + 3); // Set minimal pemesanan H-3
        let minDate = today.toISOString().slice(0, 16); // Format YYYY-MM-DDTHH:MM
        dateInput.min = minDate;
    });
</script>
