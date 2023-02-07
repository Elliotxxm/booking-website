<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>BookPortugal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Vollkorn:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">
    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-width:575px){
            .availability-form{
            margin-top: 25px;
            padding: 0 35px;
        }
        }
        /* Navbar edit */
        #navbar{
        position:fixed;
        top:0;
        left:0;
        width:100%;
        color:white;
        /*Define a height for NavBar*/
        height:80px;
        transition: 0.5s;
        /*and a transition time for a smooth appearence*/
        }
    </style>
</head>
<body class="bg-white">
    <!----NavBar---->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <!---<a class="navbar-brand me-5 fw-bold fs-3" href="index.php">BookPortugal</a>--->
        <a href="index.php"><img id="logo" class="navbar-brand me-5 fs-3 img-responsive" src="logo.png" width="80px" height="80px"></a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact</a>
            </li>
        </ul>
         <div class="d-flex">
            <!----Logout Button---->
            <a href="logout.php"><button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
             Logout
            </button></a>
            <!---end logout button--->
        </div>
        </div>
    </div>
    </nav>
    <!----EndNavBar---->
    
    <div class="container-fluid px-lg-4">
        <!-- Swiper (Carousel)-->
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.png" class="w-100 d-block"/>
        </div>
      </div>
    </div>
    <!--End swiper(Carousel)-->
    </div>
        <!--Availability form-->
        <div class="container availability-form">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">Booking Availability</h5>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight:500">Check-in</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight:500">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight:500">Adult</label>
                                <select class="form-select shadow-none">
                                    <option selected>Select</option>
                                    <option value="1">0</option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                </select>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight:500">Children</label>
                                <select class="form-select shadow-none">
                                    <option selected>Select</option>
                                    <option value="1">0</option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn text-white shadow-none custom-bg">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End availability form-->
        <!-- Rooms-->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Rooms</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 my-3">
                    <div class="card" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>My charm Lisbon Suites</h5>
                        <h6 class="mb-4">63€ per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 single bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Free Wi-fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Hair dryer
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Air conditioner
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Room cleaning (daily)
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Safe box
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 single bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Free Wi-fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Hair dryer
                        </div>
                        <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="https://secure.guestcentric.net/api/bg/book.php?startDay=0&nrNights=2&preselect=room1&apikey=341dc31bff1a6afcc463ce7f2582575e&url=https%3A%2F%2Fwww.mycharmlisbon.com%2Fen%2Fhotel-rooms&channelKey=58e5de4e971fc00be29aa10492813ad4&ck=1111&_ga=2.109161861.1021579024.1674211709-1714127428.1674211709" class="btn btn-sm text-white custom-bg shadow-none">Book now!</a>
                        <a href="#"class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                        
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-3">
                    <div class="card" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>My charm Lisbon Suites</h5>
                        <h6 class="mb-4">63€ per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 single bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Free Wi-fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Hair dryer
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Air conditioner
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Room cleaning (daily)
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Safe box
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 single bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Free Wi-fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Hair dryer
                        </div>
                        <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="https://secure.guestcentric.net/api/bg/book.php?startDay=0&nrNights=2&preselect=room1&apikey=341dc31bff1a6afcc463ce7f2582575e&url=https%3A%2F%2Fwww.mycharmlisbon.com%2Fen%2Fhotel-rooms&channelKey=58e5de4e971fc00be29aa10492813ad4&ck=1111&_ga=2.109161861.1021579024.1674211709-1714127428.1674211709" class="btn btn-sm text-white custom-bg shadow-none">Book now!</a>
                        <a href="#"class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                        
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-3">
                    <div class="card" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>My charm Lisbon Suites</h5>
                        <h6 class="mb-4">63€ per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 single bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Free Wi-fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Hair dryer
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Air conditioner
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Room cleaning (daily)
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Safe box
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 single bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Free Wi-fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Hair dryer
                        </div>
                        <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="https://secure.guestcentric.net/api/bg/book.php?startDay=0&nrNights=2&preselect=room1&apikey=341dc31bff1a6afcc463ce7f2582575e&url=https%3A%2F%2Fwww.mycharmlisbon.com%2Fen%2Fhotel-rooms&channelKey=58e5de4e971fc00be29aa10492813ad4&ck=1111&_ga=2.109161861.1021579024.1674211709-1714127428.1674211709" class="btn btn-sm text-white custom-bg shadow-none">Book now!</a>
                        <a href="#"class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                        
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More rooms</a>
                </div>
            </div>
        <!--End rooms-->
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <!---Hide and show nav bar--->
        <script>
         var lastScrollTop;
        navbar = document.getElementById('navbar');
        window.addEventListener('scroll',function(){
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if(scrollTop > lastScrollTop){
        navbar.style.top='-80px';
        }
        else{
        navbar.style.top='0';
        }
        lastScrollTop = scrollTop;
        });
        </script>
        <!---End Hide and show nav bar--->

        <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction:false,
        }
      });
    </script>
        <!--End initialize swiper-->
</body>
</html>