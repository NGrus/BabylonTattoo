<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
  <div class="header">
    <div class="header1">
      <div class="navitem">
        <a href="/home">HOME</a>
      </div>
      <div class="navitem">
      <a href="/info">INFO</a>
      </div>
      <div class="navitem">
      <a href="artists">ARTIST GALLERY</a>
      </div>
    </div>
    <div class="navicon">
      <a href="/home">
        <img src="{{ asset('img/Gif.gif') }}" width="200px;">
      </a>
      <div class="menubtn">
        <p>Menu</p>
      </div>
    </div>
    <div class="header2">
      <div class="navitem">
        <a href="piercing">PIERCING GALLERY</a>
      </div>
      <div class="navitem">
      <a href="testimonials">TESTIMONIALS</a>
      </div>
      <div class="navitem">
      <a href="contact">CONTACT</a>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="maincontainer">
      <div id="overlay">
        @yield("main")
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="footerdiv">
      <p>831 North Federal Hwy B</p>
      <p>Fort Lauderdale, FL 33304</
      <a href="https://www.google.com/maps/place/Babylon+Tattoo/@26.134498,-80.137965,15z/data=!4m2!3m1!1s0x0:0xb5fdb04a7a1453b6?sa=X&amp;ved=0ahUKEwiI9s27m43bAhUR11MKHSU_CMIQ_BIIhQEwDg" target="_blank" class="sitemap-block__item u-text-decoration-hover-only custom-link">
        >Google Maps<
      </a>
    </div>
    <div class="footerdiv">
    <a href="https://www.facebook.com/babylontattooandbodypiercing/">Facebook</a>
    <a href="https://www.instagram.com/babylontattooshop/">Instagram</a>
  </div>
</body>
</html>