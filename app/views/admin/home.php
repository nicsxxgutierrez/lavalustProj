<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="admin/assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link href="public/admin/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="public/admin/css/styles.css" rel="stylesheet" />
    <link href="public/assets/select2.min.css" rel="stylesheet">
    <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="admin/assets/js/select2.min.js"></script>
    <script type="text/javascript" src="public/assets/jquery.datetimepicker.full.min.js"></script>

</head>
<body>
    <style>
        span.float-right.summary_icon {
            font-size: 3rem;
            position: absolute;
            right: 1rem;
            color: #ffffff96;
        }
        .imgs{
            margin: .5em;
            max-width: calc(100%);
            max-height: calc(100%);
        }
        .imgs img{
            max-width: calc(100%);
            max-height: calc(100%);
            cursor: pointer;
        }
        #imagesCarousel,#imagesCarousel .carousel-inner,#imagesCarousel .carousel-item{
            height: 60vh !important;background: black;
        }
        #imagesCarousel .carousel-item.active{
            display: flex !important;
        }
        #imagesCarousel .carousel-item-next{
            display: flex !important;
        }
        #imagesCarousel .carousel-item img{
            margin: auto;
        }
        #imagesCarousel img{
            width: auto!important;
            height: auto!important;
            max-height: calc(100%)!important;
            max-width: calc(100%)!important;
        }
        .collapse a{
		text-indent:10px;
        }
        nav#sidebar{
            background: white !important
        }
    </style>
        <nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;min-height: 3.5rem">
            <div class="container-fluid mt-2 mb-2">
                <div class="col-lg-12">
                    <div class="col-md-1 float-left" style="display: flex;">
                    </div>
                <div class="col-md-4 float-left text-white">
                    <large><b>Event Management System</b></large>
                </div>
                    <div class="float-right">
                    <div class=" dropdown mr-4">
                        <a href="#" class="text-white dropdown-toggle"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrator </a>
                            <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                                <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
                                <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                    </div>
                </div>
            </div>
            <nav id="sidebar" class='mx-lt-5 bg-dark' >
                <div class="sidebar-list">
                        <a href="/admin/home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
                        <a href="/admin/venue_booking" class="nav-item nav-booking"><span class='icon-field'><i class="fa fa-th-list"></i></span> Venue Book List</a>
                        <a href="index.php?page=audience" class="nav-item nav-audience"><span class='icon-field'><i class="fa fa-th-list"></i></span> Event Audience List</a>
                        <a href="index.php?page=venue" class="nav-item nav-venue"><span class='icon-field'><i class="fa fa-map-marked-alt"></i></span> Venues</a>
                        <a href="index.php?page=events" class="nav-item nav-events"><span class='icon-field'><i class="fa fa-calendar"></i></span> Events</a>
                        <a  class="nav-item nav-reports" data-toggle="collapse" href="#reportCollpase" role="button" aria-expanded="false" aria-controls="reportCollpase"><span class='icon-field'><i class="fa fa-file"></i></span> Reports <i class="fa fa-angle-down float-right"></i></a>
                        <div class="collapse" id="reportCollpase">
                            <a href="index.php?page=audience_report" class="nav-item nav-audience_report"><span class='icon-field'></span> Audience Report</a>
                            <a href="index.php?page=venue_report" class="nav-item nav-venue_report"><span class='icon-field'></span> Venue Report</a>
                        </div>
                        <a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
                        <a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> System Settings</a>
                </div>
            </nav>
            <div class="containe-fluid">
                    <div class="row mt-3 ml-3 mr-3">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php echo "Welcome Back Administrator!" ?>
                                    <hr>
                                </div>
                            </div>      			
                        </div>
                    </div>
                </div>
</body>
</html>