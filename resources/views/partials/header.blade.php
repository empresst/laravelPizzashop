<style>

    .hero {
        width: 100vw;
        height: 100vh;
        text-align: center;
        color: #CCC;
        position: relative;
        text-transform: uppercase;
        font-family: 'Amatic SC', sans-serif;
        letter-spacing: 17.5px;
    }

    .hero-one {
        top: 0;
        position: absolute;
        width: 60%;
        background-color: black;
        height: 100vh;
        clip-path: polygon(0 0, 60vw 0, 40vw 100vh, 0 100vh);
        z-index: 1;
        background-image:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url({{ asset('/uploads/other/pizza1.jpg') }});
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .hero-two {
        position: absolute;
        top: 0;
        right: 0;
        width: 60%;
        background-color: green;
        height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.5)), url({{ asset('/uploads/other/pizza.jpg') }});
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .header-title {
        z-index: 2;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .header-primary {
        font-size: 2em;
        display: block;
        font-weight: 700;
    }
    @media only screen and (max-width: 500px) {
        .header-primary {
            font-size: 30px;
            display: block;

        }
        .header-title {
            font-size: 20px;
        }
        .hero-one {
            width: 60%;
            height: 50vh;
        }
        .hero-two {
            width: 60%;
            height: 50vh;
        }
        .hero {
            width: 100vw;
            height: 50vh;
        }


    }

</style>

<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

<div class='hero'>
    <div class="hero-one"></div>
    <div class="hero-two"></div>
    <h1 class="header-title"><span class="header-primary">Pizza</span><span class="header-sub">and your deepest desire</span></h1>
</div>



