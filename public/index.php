<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="shortcut icon" href="./img/favicon/favicon (6).ico" type="image/x-icon">
</head>

<body>

  <nav class="nav">
    <div class="container">
      <div class="nav__row">
        <div class="nav__logo">TakeMe</div>

        <div class="burger-btn">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="menu-item">
          <ul class="nav__menu">
            <li class="nav__item"><a href="#" class="nav__link">Locations</a></li>
            <li class="nav__item"><a href="#" class="nav__link"> Accommodation</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Travel Guides</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Where To Stay</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Contact Us</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Log In</a></li>
          </ul>
        </div><!--menu-item-->
      </div><!--nav__row-->
    </div><!--container--nav-->
  </nav>


  <div class="vacation-location">
    <div class="container">
      <div class="vacation-location__content" style="background-image: url('../image/vacation-location/pic1.jpg');">
        <h1 class="vacation-location__title">Find Your Dream Vacation Location</h1>
        <div class="subtitle">Search hundreds of locations from around the world and find your perfect vacation location.</div>
        <form class="vacation-location__form" action="#" method="post">
          <input class="form-inp1 inp" type="text" name="country" placeholder="Country or ZIP code">
          <input class="form-inp2 inp" type="text" name="transportation" placeholder="Transportation">
          <input class="form-inp3 inp" type="text" name="people" placeholder="Number of people">
          <button class="button btn" type="submit">Search</button>
        </form>
      </div><!--vacation-location__content-->
    </div><!--container-->
  </div><!--vacation-location-->


  <br><br>
  <script src="./js/main.js"></script>
</body>

</html>