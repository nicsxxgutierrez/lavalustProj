<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Venue</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
  <link href="admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="public/css/styles.css" rel="stylesheet" />
  <link href="admin/assets/css/select2.min.css" rel="stylesheet">
  <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
  <script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="admin/assets/js/select2.min.js"></script>
  <script type="text/javascript" src="admin/assets/js/jquery.datetimepicker.full.min.js"></script>

    <style>
        header.masthead {
		    background-image: url("/public/homebg.jpg");
		    background-repeat: no-repeat;
		    background-size: cover;
		}

        #portfolio .img-fluid{
            width: calc(100%);
            height: 30vh;
            z-index: -1;
            position: relative;
            padding: 1em;
        }

        .venue-list{
            cursor: pointer;
            border: unset;
            flex-direction: inherit;
        }
        
        .venue-list .carousel,.venue-list .card-body {
            width: calc(50%)
        }

        .venue-list .carousel img.d-block.w-100 {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            min-height: 50vh;
        }

        span.hightlight{
            background: yellow;
        }
        .carousel,.carousel-inner,.carousel-item{
            min-height: calc(100%)
        }

        header.masthead,header.masthead:before {
            min-height: 50vh !important;
            height: 50vh !important
        }

        .row-items{
            position: relative;
        }

        .card-left{
            left:0;
        }

        .card-right{
            right:0;
        }

        .rtl{
            direction: rtl ;
        }
        
        .venue-text{
            justify-content: center;
            align-items: center ;
        }

        footer {
            position: absolute;
            height: 350px;
            width: 100%;
            background-color: #333333;
        }

        p.copyright {
            position: absolute;
            width: 100%;
            color: #fff;
            line-height: 40px;
            font-size: 1.5em;
            text-align: center;
            bottom: 0;
        }
    </style>

    <body>
        <header class="masthead"></header>
            <div class="container-fluid mt-3 pt-2">
                <h4 class="text-center text-white">List of Our Event Venues</h4>
                <hr class="divider">
                <div class="row-items">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="row h-100 align-items-center justify-content-center text-center">
                                <div class="card venue-list">
                                    <div id="imagesCarousel_card-img-top" class="carousel slide" data-ride="carousel"><img src="/public/venuepics/ujwallpaper.png" alt="Uncle Jov's"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center justify-content-center text-center h-100">
                                                <div class="">
                                                    <div>
                                                        <h3><b class="filter-txt">Uncle Jov's</b></h3>
                                                        <small><i>Roxas Dr 5200 Calapan Oriental Mindoro</i></small>
                                                    </div>
                                                    <div>
                                                        <span class="truncate" style="font-size: inherit;"><small>Uncle Jov's is famous for their burgers, this place is perfect for Celebrating Parties and hanging out with family and friends.</small></span>
                                                        <br>
                                                        <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 300</span>
                                                        <br><br>
                                                        <button class="btn btn-primary book-venue align-self-end" type="button">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>
                            <div class="row h-100 align-items-center justify-content-center text-center">
                                <div class="card venue-list">
                                    <div id="imagesCarousel_card-img-top" class="carousel slide" data-ride="carousel"><img src="/public/venuepics/ujwallpaper.png" alt="Uncle Jov's"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center justify-content-center text-center h-100">
                                                <div class="">
                                                    <div>
                                                        <h3><b class="filter-txt">Uncle Jov's</b></h3>
                                                        <small><i>Roxas Dr 5200 Calapan Oriental Mindoro</i></small>
                                                    </div>
                                                    <div>
                                                        <span class="truncate" style="font-size: inherit;"><small>Uncle Jov's is famous for their burgers, this place is perfect for Celebrating Parties and hanging out with family and friends.</small></span>
                                                        <br>
                                                        <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 300</span>
                                                        <br><br>
                                                        <button class="btn btn-primary book-venue align-self-end" type="button">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>
                            <div class="row h-100 align-items-center justify-content-center text-center">
                                <div class="card venue-list">
                                    <div id="imagesCarousel_card-img-top" class="carousel slide" data-ride="carousel"><img src="/public/venuepics/ujwallpaper.png" alt="Uncle Jov's"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center justify-content-center text-center h-100">
                                                <div class="">
                                                    <div>
                                                        <h3><b class="filter-txt">Uncle Jov's</b></h3>
                                                        <small><i>Roxas Dr 5200 Calapan Oriental Mindoro</i></small>
                                                    </div>
                                                    <div>
                                                        <span class="truncate" style="font-size: inherit;"><small>Uncle Jov's is famous for their burgers, this place is perfect for Celebrating Parties and hanging out with family and friends.</small></span>
                                                        <br>
                                                        <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 300</span>
                                                        <br><br>
                                                        <button class="btn btn-primary book-venue align-self-end" type="button">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./">Event Management System</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="home">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="venue">Venues</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login">Logout</a></li>                     
                    </ul>
                </div>
            </div>
            </nav>

            <footer class="py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2 class="mt-0 text-white">Contact us</h2>
                            <hr class="divider my-4" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                            <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                            <div class="text-white">+639488542623</div>
                        </div>
                        <div class="col-lg-4 mr-auto text-center">
                            <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                            <a class="d-block" href="mailto:event@gmail.com">event@gmail.com</a>
                        </div>
                    </div>
                </div>
                    <p class="copyright">&copy;Copyright | <a href="https://youtu.be/D8VEhcPeSlc?si=1Z0Jf_6w1xaFRWD9"> Event </a></p>
            </footer>
  </body>
</html>