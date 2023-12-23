<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Event Management System</title>
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
		    background-image: url("homeimg.jpg");
		    background-repeat: no-repeat;
		    background-size: cover;
		}
    
        #viewer_modal .btn-close {
            position: absolute;
            z-index: 999999;
            /*right: -4.5em;*/
            background: unset;
            color: white;
            border: unset;
            font-size: 27px;
            top: 0;
        }

        #viewer_modal .modal-dialog {
                width: 80%;
            max-width: unset;
            height: calc(90%);
            max-height: unset;
        }
        
        #viewer_modal .modal-content {
            background: black;
            border: unset;
            height: calc(100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #viewer_modal img,#viewer_modal video{
            max-height: calc(100%);
            max-width: calc(100%);
        }
        
        body, footer {
            background: #000000e6 !important;
        }

        footer {
            position: relative;
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

        #portfolio .img-fluid{
            width: calc(100%);
            height: 30vh;
            z-index: -1;
            position: relative;
            padding: 1em;
        }

        .event-list{
        cursor: pointer;
        }

        span.hightlight{
            background: yellow;
        }

        .banner{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 26vh;
                width: calc(30%);
        }
        .banner img{
            width: calc(100%);
            height: calc(100%);
            cursor :pointer;
        }

        .event-list{
            cursor: pointer;
            border: unset;
            flex-direction: inherit;
        }

        .event-list .banner {
            width: calc(40%)
        }

        .event-list .card-body {
            width: calc(60%)
        }

        .event-list .banner img {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            min-height: 50vh;
        }

        span.hightlight{
            background: yellow;
        }

        .banner{
            min-height: calc(100%)
        }
 </style>

    <body id="page-top">
      <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white"></div>
      </div>
      <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Welcome to Event Management System</h3>
                        <hr class="divider my-4" />                       
                    </div>
                    
                </div>
            </div>
        </header>
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
       
    <div class="modal fade" id="confirm_modal" role='dialog'>
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
          </div>
          <div class="modal-body">
            <div id="delete_content"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="uni_modal" role='dialog'>
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title"></h5>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </div>
      </div>
    </div>
  
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-righ t"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
    <div class="modal fade" id="viewer_modal" role='dialog'>
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
                <img src="" alt="">
            </div>
        </div>
    </div>
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
                <p class="copyright">&copy;Copyright<a href="https://youtu.be/D8VEhcPeSlc?si=1Z0Jf_6w1xaFRWD9"> Event </a></p>
        </footer>

          <script>
            $('.read_more').click(function(){
                location.href = "event"+$(this).attr('data-id')
            })
            $('.banner img').click(function(){
               viewer_modal($(this).attr('src'))
            })
            $('#filter').keyup(function(e){
              var filter = $(this).val()
              $('.card.event-list .filter-txt').each(function(){
                var txto = $(this).html();
                  txt = txto
                  if((txt.toLowerCase()).includes((filter.toLowerCase())) == true){
                    $(this).closest('.card').toggle(true)
                  }
                  else
                  {
                    $(this).closest('.card').toggle(false)        
                  }
              })
            })
          </script>
    </body>
</html>