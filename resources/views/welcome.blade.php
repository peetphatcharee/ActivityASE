<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title>ระบบจัดการกิจกรรม</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- Styles -->
        <style>
            html, body,h1,h2,h3,h4,h5,h6 {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                
            }
            .mySlides {display:none;}
            {
  font-family: "EkkamaiNew-Regular", cursive, sans-serif;
}
        </style>
    </head>
    <body>
    <img src="img/ac1.jpg" style="width:100%" class="img-fluid" alt="Responsive image">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div style="overflow:auto"> 
            
                <div class="top-right links" >
              
                    @auth
                   <a href="{{ url('/ActivityList') }}"><img src="<?php echo asset('img/list (3).png' );  ?> " width="20" height="20" >&nbsp;รายการกิจกรรม</a> 
                       <!--  <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a> -->
                    @else
                 <a href="AcList_St">   <img src="<?php echo asset('img/list (3).png' );  ?> " width="20" height="20" >&nbsp;รายการกิจกรรม</a> 
                  <a href="{{ route('login') }}">  <img src="<?php echo asset('img/login.png' );  ?> " width="20" height="20" >&nbsp;Login</a>
                   <a href="{{ route('register') }}"> <img src="<?php echo asset('img/user (4).png' );  ?> " width="20" height="20" > &nbsp;Register</a>
                    @endauth
             
        </div>
            @endif
            
                <div class="title m-b-md">
                <div class="w3-content w3-section" style="max-width:100%">
                <img src="img/ase1.jpg" width="900" height="400" class="mySlides">
                <img src="img/ase2.jpg" width="900" height="400" class="mySlides" >
                <img src="img/ase3.jpg" width="900" height="400" class="mySlides" >
                <img src="img/ase4.jpg" width="900" height="400" class="mySlides" >
                </div>
                </div>

                <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
            </div>
        </div>
        <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
    </body>
</html>
