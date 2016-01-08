<!DOCTYPE html>
<html lang="en">
<head>

  <title>Brandt Scmidth</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 20px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">Brandt Scmidth</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">BAND</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="B1.jpg" alt="New Sand" width="1200" height="700">
        <div class="carousel-caption">
          <a href="/larastart/public/songs/3"><h3>NEW SAND</h3></a>
          <p style="color:black;">Newest song is coming out Febuary 2016</p>
        </div>
      </div>

      <div class="item">
        <img src="B2.jpg" alt="Rolling Dark" width="1200" height="700">
        <div class="carousel-caption">
          <a href="/larastart/public/songs/2"><h3>ROLLING DARK</h3></a>
          <p>Second Song for those who live for the adventure!</p>
        </div>
      </div>

      <div class="item">
        <img src="B3.jpg" alt="Swin in Peace" width="1200" height="700">
        <div class="carousel-caption">
          <a href="/larastart/public/songs/1"><h3>Swim in Peace</h3></a>
          <p>My first song, thanks to all who made this a success</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <a href="/larastart/public/songs"><h2>All songs</h2></a>
  <h>~~~~~</h>
  <h3>THE BAND</h3>
  <p><em>Just me now!</em></p>
  <p>Currently just left the old band Banana Rod, while we had our moments, it was time to move on for all of us. You may have also seen me appear in a few other bands such as Blue Box, Sheet of Night, and Silver Paw. Though nowadays, I am going solo and wild and marking new territory. Read on to see where my adventure is taking me! </p>
  <br>
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Brandt Scmidth</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="B4.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Mainly Guitar</p>
        <p>Some Bass, Drums, and singing</p>
        <p>Going Solo and strong since 2013</p>
      </div>
    </div>
  </div>
</div>


  <ul>
      @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>Dude! I would be stoaked to hear from you!</em></p>
  <div class="row">
    <div class="col-md-4">
      <p>My Contact info:</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Richland, WA</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 509 1234567</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: GoBrandt@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
          {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
        <div class="col-sm-6 form-group">
          {!! Form::label('Your Name') !!}
          {!! Form::text('name', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Your name')) !!}
        </div>
        <div class="col-sm-6 form-group">
              {!! Form::label('Your E-mail Address') !!}
              {!! Form::text('email', null,
                  array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Your e-mail address')) !!}
        </div>
      </div>
      <div class="form-group">
          {!! Form::label('Your Message') !!}
          {!! Form::textarea('message', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Your message')) !!}
      </div>
      <div class="row">
        <div class="col-md-12 form-group">
            <div class="form-group">
                {!! Form::submit('Contact Us!',
                  array('class'=>'btn btn-primary')) !!}
            </div>
        </div>
      </div>
    </div>
  </div>
  {!! Form::close() !!}
  @if(Session::has('message'))
      <div class="alert alert-info">
        {{Session::get('message')}}
      </div>
  @endif
  <br>
  <h3 class="text-center">People involved...</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Brandt</a></li>
    <li><a data-toggle="tab" href="#menu1">Jared</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Brandt, The man</h2>
      <p>In case you don't know... I'm Brandt, and I have a passion for making good music</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Jared, I made this website...</h2>
      <p>I made this website... yes, I know its not the best, just making a rough collection of what I learned so far</p>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p> Created with the help of <a href="http://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
})

</script>

</body>
</html>
