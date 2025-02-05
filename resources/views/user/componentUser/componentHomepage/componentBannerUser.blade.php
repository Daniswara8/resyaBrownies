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

    @media (min-width: 768px) and (max-width: 850px) {
        .parallax img {
            width: 300px;
            height: 300px;
            object-fit: cover;
        }
    }

    @media (max-width: 500px) {
        .parallax img {
            width: 250px;
            height: 250px;
            object-fit: cover;
        }
    }
</style>

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
