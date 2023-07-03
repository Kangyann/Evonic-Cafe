<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cafe Evonic, Evonic Cafe, Cafe Indonesia, Cafe Modern, New Cafe">
    <meta name="keywords" content="Cafe Hits, Cafe 23, Cafe Evonic, Evonic, Cafe Trend">
    <meta name="author" content="Kangyann">
    <title>{{ $file['title'] }}</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="shortcut icon" href="{{ $file['images']['icon'] }}icon-2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</head>

<body>
    <div class="home" id="home">
        <div class="navbar navbar-expand fixed-top">
            <div class="container">
                <div class="d-flex align-items-center">
                    <img src="{{ $file['images']['icon'] }}icon-2.png" alt="Evonic Caffe" width="48px">
                    <a href="/" class="navbar-brand">{{ $file['title'] }}</a>
                </div>
                <div class="navbar-nav align-items-center">
                    <a id="navIcon" href="#home" class="nav-link text-decoration-none d-md-block d-none active">Home</a>
                    <a id="navIcon" href="#list" class="nav-link text-decoration-none d-md-block d-none">Menu</a>
                    <a id="navIcon" href="#history" class="nav-link text-decoration-none d-md-block d-none">History</a>
                    <a id="navIcon" href="#gallery" class="nav-link text-decoration-none d-md-block d-none">Gallery</a>
                    <a id="navIcon" href="#reservation"
                        class="nav-link text-decoration-none d-md-block d-none">Reservation</a>
                    <a id="navIcon" href="#contact" class="nav-link text-decoration-none d-md-block d-none">Contact</a>
                    <a href="#offcanvas" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvas"
                        class="text-decoration-none"><span class="material-symbols-outlined d-block d-md-none"
                            id="menu">
                            menu
                        </span></a>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="offcanvas offcanvas-end w-50" id="offcanvas">
                <div class="offcanvas-header d-flex justify-content-start align-items-baseline gap-3">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    <h2>Menu List</h2>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar-nav navbar-expand">
                        <a id="navIcon" href="#home" class="nav-link text-decoration-none active">Home</a>
                        <a id="navIcon" href="#list" class="nav-link text-decoration-none ">Menu</a>
                        <a id="navIcon" href="#history" class="nav-link text-decoration-none">History</a>
                        <a id="navIcon" href="#gallery" class="nav-link text-decoration-none ">Gallery</a>
                        <a id="navIcon" href="#reservation" class="nav-link text-decoration-none ">Reservation</a>
                        <a id="navIcon" href="#contact" class="nav-link text-decoration-none ">Contact Us</a>
                    </div>
                    <div class="position-absolute bottom-0 py-1 w-100" style="right: 50%; transform: translateX(50%)">
                        <span title="Designer"
                            style="color: var(--default-font-white); font-family: 'Poppins'; font-size:12px;">Design
                            by Hagi Iksan</span>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center min-vh-100">
                <div class="col d-flex flex-column align-items-center">
                    <h2 id="main-text-1">Only the best ingredients for our dishes</h2>
                    <h2 id="main-text-2">Sytlish And Instagramable Cafe</h2>
                    <div class="mt-5">
                        <a href="/login" class="order text-decoration-none px-4 py-2">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu" id="list">
        <div class="menu_img d-flex align-items-center justify-content-center p-3">
            <div class="row text-center col-lg-4">
                <div class="col">
                    <h2>Menu</h2>
                    <hr>
                    <p>Exclusive food and drink</p>
                </div>
            </div>
        </div>
        <div class="menu_icon mt-3">
            <div class="icon_image d-flex justify-content-center">
                <div class="mx-lg-4 mx-3 d-flex flex-column align-items-center gap-2">
                    <img src="{{ $file['images']['icon'] }}breakfast.png" data-page="breakfast" alt="Breakfast"
                        id="menu_icon" width="54px" class="active">
                    <span>Breakfast</span>
                </div>
                <div class="mx-lg-4 mx-3 d-flex flex-column align-items-center gap-2">
                    <img src="{{ $file['images']['icon'] }}fast-food.png" data-page="fastfood" alt="Fast Food"
                        id="menu_icon" width="54px">
                    <span>Fast Food</span>
                </div>
                <div class="mx-lg-4 mx-3 d-flex flex-column align-items-center gap-2">
                    <img src="{{ $file['images']['icon'] }}desert.png" data-page="dessert" alt="Dessert" id="menu_icon"
                        width="54px">
                    <span>Dessert</span>
                </div>
                <div class="mx-lg-4 mx-3 d-flex flex-column align-items-center gap-2">
                    <img src="{{ $file['images']['icon'] }}drink.png" data-page="drink" alt="Drink" id="menu_icon"
                        width="54px">
                    <span>Drink</span>
                </div>
            </div>
            <div class="menu_list" id="breakfast">
                <div class="container p-5 mt-5 position-relative overflow-hidden">
                    <div class="box text-center position-absolute">
                        <div class="mt-5">
                            <span>Khusus jam</span><br>
                            <span>07:00 - 10:00</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}nasi-goreng.png" alt="Nasi Goreng" width="164"
                                height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Nasi Goreng</p>
                                <span class="text-lg-start">Nasi goreng dengan tambahan kerupuk udang,
                                    potongan tomat dan timun, serta selada se/buygar .</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 12.000,-</a>
                            </div>
                        </div>
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}nasi-goreng-ayam-bakar.png"
                                alt="Nasi Goreng Ayam Bakar" width="164" height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Nasi Goreng Ayam Bakar</p>
                                <span class="text-lg-start">Nasi goreng dengan ayam bakar dan ditambah
                                    dengan jagung, irisan wortel dan potongan telur
                                    rebus . </span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 16.000,-</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}kangkung-ayam-potong.png " alt="Kangkung Ayam Potong"
                                width="164" height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Kangkung Ayam Potong</p>
                                <span class="text-lg-start">Nasi dengan lauk potongan ayam kampung
                                    bumbu pedas serta sayuran kangkung dan buncis
                                    ditambah dengan tahu yang empuk.</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 13.000,-</a>
                            </div>
                        </div>
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}telur-mata-sapi-ikan-crispy.png "
                                alt="Telur Mata Sapi Ikan Crispy" width="164" height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Telur Mata Sapi Ikan Crispy </p>
                                <span class="text-lg-start">Nasi dengan lauk daging ikan crispy serta telur
                                    mata sapi setengah matang.</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 16.000,-</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_list" id="fastfood">
                <div class="container p-5 mt-5 position-relative overflow-hidden">
                    <div class="row mt-3">
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}kentang-goreng.jpg" alt="Kentang Goreng" width="164"
                                height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Kentang Goreng</p>
                                <span class="text-lg-start">Irisan kentang yang digoreng matang dengan
                                    rasa yang gurih dengan sedikit rasa manis .</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 10.000,-</a>
                            </div>
                        </div>
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}burger.jpg" alt="Burger" width="164" height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Burger</p>
                                <span class="text-lg-start">NBurger yang kaya dengan isi serta roti yang
                                    empuk, Tersedia beberapa macam size seperti
                                    Combo, Extra Combo, dan Max Combo. </span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 30.000,-</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}hotdog-sosis-ayam.jpg " alt="Hotdog Sosis Ayam"
                                width="164" height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Hotdog Sosis Ayam</p>
                                <span class="text-lg-start">Nasi dengan lauk potongan ayam kampung
                                    bumbu pedas serta sayuran kangkung dan buncis
                                    ditambah dengan tahu yang empuk.</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 27.000,-</a>
                            </div>
                        </div>
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}pizza.jpg " alt="Pizza" width="164" height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Pizza </p>
                                <span class="text-lg-start">Pizza yang terbuat dari roti lembut serta diberkan
                                    berbagai macam toping, Untuk toping bisa
                                    menyesuaikan sesuai selera anda.</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 26.000,-</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_list" id="dessert">
                <div class="container p-5 mt-5 position-relative overflow-hidden">
                    <div class="row mt-3">
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}cake.jpg" alt="Cake" width="164" height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Cake</p>
                                <span class="text-lg-start">Sepotong cake yang lembut dan manis dengan
                                    toping yang bermacam macam, cocok untuk
                                    anda yang menyukai rasa manis.</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 28.000,-</a>
                            </div>
                        </div>
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}kue-palmier.jpg" alt="Kue Palmier" width="164"
                                height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Kue Palmier</p>
                                <span class="text-lg-start">Kue kering yang renyah berbentuk hati dan
                                    ditaburi dengan gula pasir, terasa ringan saat
                                    dimakan . </span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 15.000,-</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}roti-bakar.jpg " alt="Roti Bakar" width="164"
                                height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Roti Bakar</p>
                                <span class="text-lg-start">Roti bakar yang diolesi oleh mentega dan
                                    disajikan dengan selai madu asli dan buah
                                    strawberry.</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 15.000,-</a>
                            </div>
                        </div>
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}donat.jpg " alt="Donat" width="164" height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Donat </p>
                                <span class="text-lg-start">Donat yang manis serta empuk dengan berbagai
                                    macam toping.</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 34.000,-</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu_list" id="drink">
                <div class="container p-5 mt-5 position-relative overflow-hidden">
                    <div class="row mt-3">
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}orange-sour.jpg" alt="Orang Sour" width="164"
                                height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Orange Sour</p>
                                <span class="text-lg-start">Jus jeruk yang segar dengan rasa asam dan
                                    sedikit manis .</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 23.000,-</a>
                            </div>
                        </div>
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}strawberry-sweet.jpg" alt="Strawberry Sweet"
                                width="164" height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Strawberry Sweet</p>
                                <span class="text-lg-start">Jus strawberry manis yang dicampur dengan
                                    susu dengan tambahan toping kue kacang. </span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 27.000,-</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}capuccino.jpg " alt="Capuccino" width="164"
                                height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Capuccino</p>
                                <span class="text-lg-start">Kopi cappuccino ditambah cream dengan hiasan
                                    gambar .</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 15.000,-</a>
                            </div>
                        </div>
                        <div class="list col-lg-6 col-12 p-3 d-flex justify-content-center text-center">
                            <img src="{{ $file['images']['menu'] }}oreo-praffuccino.jpg " alt="Oreo Frappuccino"
                                width="164" height="164">
                            <div class="mx-5 d-flex flex-column align-items-center justify-content-center">
                                <p class="mt-2">Oreo Frappuccino</p>
                                <span class="text-lg-start">Kopi cappuccino dengan tambahan ice cream
                                    coklat, Susu coklat dan biskuit oreo.</span>
                                <a href="/buy" class="text-decoration-none w-50 p-1 mt-3">Rp. 25.000,-</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <div class="history" id="history">
        <div class="d-flex justify-content-center align-items-center min-vh-100 my-1">
            <div class="container p-4">
                <div class="bg-white box">
                    <div class="d-flex gap-lg-3 justify-content-between">
                        <div class="teks mx-4 mt-4">
                            <h2>Amazing cafe since 2023</h2>
                            <div class="col-11">
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                                    volutpat
                                    mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                                    semper
                                    suscipit, posuere a, pede. Vestibulum in finibus justo, eget luctus mi. Aliquam
                                    venenatis
                                    leo
                                    non cursus tempor. Aliquam libero sem, congue ac facilisis at, laoreet vulputate
                                    sem.</span>
                            </div>
                            <div class="schedule my-3 d-flex gap-5 mx-5 text-center">
                                <div class="d-flex flex-column gap-2">
                                    <span>Senin - Jum'at</span>
                                    <span>07:00 - 23:00</span>
                                </div>
                                <div class="d-flex flex-column gap-2">
                                    <span>Sabtu - Minggu</span>
                                    <span>08:00 - 23:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ $file['images']['gallery'] }}since.jpg" alt="Since Evonic " width="240px">
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex gap-3 justify-content-between">
                        <div class="image">
                            <img src="{{ $file['images']['gallery'] }}history.jpg" alt="History Evonic" width="240px">
                        </div>
                        <div class="teks mx-3 mt-3">
                            <h2>History our cafe</h2>
                            <div class="col-11">
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                                    volutpat
                                    mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                                    semper
                                    suscipit, posuere a, pede. Vestibulum in finibus justo, eget luctus mi. Aliquam
                                    venenatis
                                    leo
                                    non cursus tempor. Aliquam libero sem, congue ac facilisis at, laoreet vulputate
                                    sem.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery" id="gallery">

        <div class="d-flex justify-content-center align-items-center mt-5 min-vh-100 position-relative py-4">
            <div class="icon ">
                <img src="{{ $file['images']['primary_icon'] }}" alt="Evonic Caffe" class="position-absolute">
                <img src="{{ $file['images']['primary_icon'] }}" alt="Evonic Caffe" class="position-absolute">
                <img src="{{ $file['images']['primary_icon'] }}" alt="Evonic Caffe" class="position-absolute">
                <img src="{{ $file['images']['primary_icon'] }}" alt="Evonic Caffe" class="position-absolute">
                <img src="{{ $file['images']['primary_icon'] }}" alt="Evonic Caffe" class="position-absolute">
                <img src="{{ $file['images']['primary_icon'] }}" alt="Evonic Caffe" class="position-absolute">
                <img src="{{ $file['images']['primary_icon'] }}" alt="Evonic Caffe" class="position-absolute">
                <img src="{{ $file['images']['primary_icon'] }}" alt="Evonic Caffe" class="position-absolute">
            </div>
            <div class="container pt-3 position-relative">
                <div class="row d-flex justify-content-center text-center">
                    <div class="d-flex justify-content-center">
                        <!-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="{{ $file['images']['gallery'] }}gallery-1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                  <img src="{{ $file['images']['gallery'] }}gallery-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                  <img src="{{ $file['images']['gallery'] }}gallery-3.jpg" class="d-block w-100" alt="...">
                                </div>
                              </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div> -->
                        <div class="images col-12 col-lg-10 d-flex gap-3 flex-wrap justify-content-center">
                            <div class="text position-absolute z-1 px-2">
                                <span>View Our Cafe</span>
                            </div>

                            <img src="{{ $file['images']['gallery'] }}gallery-1.jpg" alt="Gallery Evonic" width="200px"
                                class="z-1">
                            <img src="{{ $file['images']['gallery'] }}gallery-2.jpg" alt="Gallery Evonic" width="200px"
                                class="z-1">
                            <img src="{{ $file['images']['gallery'] }}gallery-3.jpg" alt="Gallery Evonic" width="200px"
                                class="z-1">
                            <img src="{{ $file['images']['gallery'] }}gallery-4.jpg" alt="Gallery Evonic" width="200px"
                                class="z-1">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center mt-5">
                    <div class="follow-us">
                        <a href="/follow" class="text-decoration-none px-4 py-2">Follow Us</a>
                    </div>
                    <div class="d-flex mt-5 gap-4">
                        <img src="{{ $file['images']['icon'] }}twitter.png" alt="Twitter" id="social" width="48"
                            style="cursor: pointer;">
                        <img src="{{ $file['images']['icon'] }}facebook.png" alt="Facebook" id="social" width="48"
                            style="cursor: pointer;">
                        <img src="{{ $file['images']['icon'] }}pinterest.png" alt="Pinterest" id="social" width="48"
                            style="cursor: pointer;">
                        <img src="{{ $file['images']['icon'] }}instagram.png" alt="Instagram" id="social" width="48"
                            style="cursor: pointer;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reservation min-vh-100" id="reservation">
        <div class="reservation_img d-flex align-items-center justify-content-center p-3 ">
            <div class="row text-center col-lg-3">
                <div class="col">
                    <h2>Reservation</h2>
                    <hr>
                    <p>Booking a table</p>
                </div>
            </div>
        </div>
        <form action="/" class="container d-flex justify-content-center align-items-center flex-column mt-2 px-5 py-3">
            <div class="reservation_item text-center">
                <img src="{{ $file['images']['icon'] }}bell.png" alt="Bell" width="94">
                <p>CHOOSE YOUR TABLE</p>
            </div>
            <div class="item w-75 d-flex flex-column gap-lg-4 gap-sm-4 gap-3">
                <div class="input d-flex justify-content-between align-items-center gap-lg-5 gap-sm-4 gap-3">
                    <input type="text" name="name" id="name" placeholder="Your Name" class="w-50 px-3 py-1">
                    <input type="email" name="email" id="email" placeholder="Your Email" class="w-50 px-3 py-1">
                </div>
                <div class="input d-flex justify-content-between align-items-center gap-lg-5 gap-sm-4 gap-3">
                    <input type="text" placeholder="dd/mm/yyyy" onfocus="(this.type='date')" class="w-50 px-3 py-1">
                    <input type="number" name="time" id="time" placeholder="Enter Time" class="w-50 px-3 py-1">
                </div>
                <div class="input d-flex justify-content-between align-items-center gap-lg-5 gap-sm-4 gap-3">
                    <input type="number" name="table" id="table" placeholder="Enter Table No" class="w-50 px-3 py-1">
                    <input type="number" name="phone" id="phone" placeholder="Phone" class="w-50 px-3 py-1">
                </div>
                <textarea name="message" id="message" cols="2" rows="5" placeholder="Message"
                    class="w-100 px-3 py-1"></textarea>
            </div>
            <input type="submit" value="SUBMIT NOW" class="px-4 py-2 mt-5 border-0">
        </form>
    </div>
    <div class="contact" id="contact">
        <div class="container-fluid pt-5 mt-3">
            <div class="container position-relative overflow-hidden p-4">
                <div class="columns d-flex justify-content-between gap-lg-2 text-center">
                    <div class="contact-item w-25 py-3 ">
                        <h2>Address</h2>
                        <div class="items-1 mt-4 d-flex flex-column gap-2 text-start">
                            <div class=" d-flex align-items-center">
                                <div class="px-3">
                                    <img src="{{ $file['images']['icon'] }}location.png" alt="Location" width="22px">
                                </div>
                                <span>Jln. Raya Cirendang, Kuningan, Jawa Barat, No. 105</span>
                            </div>
                            <div class=" d-flex align-items-center ">
                                <div class="px-3">
                                    <img src="{{ $file['images']['icon'] }}telephone.png" alt="Phone" width="22px">
                                </div>
                                <span>+62-8920-5434-4355</span>
                            </div>
                            <div class=" d-flex align-items-center ">
                                <div class="px-2 mx-1">
                                    <img src="{{ $file['images']['icon'] }}email.png" alt="Mail" width="34px">
                                </div>
                                <span>kangyann727@gmail.com</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="contact-item w-25 py-3">
                        <h2>Open Hours</h2>
                        <div class="items-2 mt-4 d-flex flex-column">
                            <span class="time">
                                <span>Senin - Jum'at:</span>
                                <span> 07:00 - 23:00</span>
                            </span>
                            <span class="time">
                                <span>Sabtu - Minggu:</span>
                                <span> 08:00 - 23:00</span>
                            </span>
                            <span class="time my-3">
                                <span>Booking Time: </span>
                                <span> 24 jam</span>
                            </span>
                            <span class="note mt-4">
                                <span>Note </span>
                                <span>: Tutup saat hari libur nasional</span>
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="contact-item w-25 py-3">
                        <h2>Subscribe Now</h2>
                        <div class="items-3 mt-4 d-flex flex-column align-items-center text-start">
                            <span>Daftar ke buletin kami untuk mendapatkan
                                berita item makanan terbaru dan acara baru
                                kami. Tema ini akan membantu Anda
                                mengatur situs Anda tanpa keahlian teknis
                                apa pun</span>
                            <span class="subs position-relative mt-3 overflow-hidden rounded-5">
                                <input type="email" name="email" id="email" placeholder="Email address"
                                    class="py-2 px-3 border-0">
                                <a href="/signup" class="text-decoration-none">SIGN UP</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="text-center">
                <span>&copy; 2023 Copyright Evonic Caffe</span>
            </footer>
        </div>
    </div>
</body>
<script src="assets/scripts/index.js"></script>

</html>