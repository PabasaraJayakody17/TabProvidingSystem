
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mainstyle.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <title>TPS | Home</title>
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-3"><h3><span class="weightblue">TPS</span><span class="weightyellow">.lk</span></h3></div>
  <div class="col-sm-4"></div>
  <div class="col-sm-2"></div>    
  <div class="col-sm-2"></div>
  
</div> 
 <!--Navigation Bar-->

          <nav class="navbar navbar-expand-sm bnav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse ml-5" id="navbarTogglerDemo03">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link text-white" href="#">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#about">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white disabled" href="#contact">CONTACT US</a>
                </li>
              </ul>
              <div class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link text-white" href="{{route('login')}}"><i class="fa fa-sign-in text-white" aria-hidden="true"></i> LOGIN</a>
                  </li>
                 
                 
                </ul>
            </div>
          </nav>
     
<br>

                                                             <!--carousel slide<-->

<div class="container" id="home">

  @if(Session::get('success'))
         <div class="alert alert-success">{{ Session::get('success') }}</div>
 @elseif(Session::get('error'))
         <div class="alert alert-danger">{{ Session::get('error') }}</div>
  @endif
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!--img src="img/1.jpg" alt="pic1" width="1100" height="500"-->
      <img src="{{ asset('img/1.jpg') }}" alt="tag" alt="pic2" width="1100" height="500">
   
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/2.jpg') }}" alt="tag" alt="pic2" width="1100" height="500">
      <!--img src="img/2.jpg" alt="pic2" width="1100" height="500"-->
     
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/3.jpg') }}" alt="tag" alt="pic2" width="1100" height="500">
      <!--img src="img/3.jpg" alt="pic2" width="1100" height="500"-->
    
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<br>
                                                            <!--tabbooking-->


<br>

<div class="jumbotron" id="about">
  <h3 class="text-center text-uppercase">About Us</h3>
  <p class="lead">The COVID-19 pandemic has severely impacted the education ecosystem in Sri Lanka. Over the last year or so students have been confined to their homes due to lockdowns and travel restrictions. The normal pattern of learning has been tremendously impacted due to COVID-19.</p>
  <hr class="my-4">
  <p>Some schools and students with better infrastructure facilities have been able to face this situation but the less-privileged schools and students with limited infrastructure are faced many problems with online classes. And also, parents have to go with this learning process especially at a primary and secondary education level.</p>
  <p>So, Ministry of Education is decided to provide tablets to students as well as teachers to help their online studies. We provide limited number of tablets for a school and students and teachers can request for a tablet and get it from their school.</p>
</div>

<section id="contact">
  <div class="container">
      <h3 class="text-center text-uppercase">contact us</h3>
      <p class="text-center w-75 m-auto">If there is any issue with requesting a tablet, contact us and get an answer for your problem.</p>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 my-5">
          <div class="card border-0">
             <div class="card-body text-center">
               <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
               <h4 class="text-uppercase mb-5">call us</h4>
               <p>+94 11 2 784811</p>
             </div>
           </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 my-5">
          <div class="card border-0">
             <div class="card-body text-center">
               <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
               <h4 class="text-uppercase mb-5">office loaction</h4>
              <address>"Isurupaya"
                Pelawatta,
                Battaramulla.</address>
             </div>
           </div>
        </div>
       
        <div class="col-sm-12 col-md-6 col-lg-4 my-5">
          <div class="card border-0">
             <div class="card-body text-center">
               <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
               <h4 class="text-uppercase mb-5">email</h4>
               <p>secretary.education@moe.gov.lk</p>
             </div>
           </div>
        </div>
      </div>
  </div>
</section>
  <footer class="footer">
        <h5 class="text-center text-white"> Copyright ©2021 All rights reserved | Developed by Group 12 </h5>
  </footer>  
      <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
  </body>
   </html>
    
  
