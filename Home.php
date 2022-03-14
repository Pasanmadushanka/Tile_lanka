<!DOCTYPE html>
<html lang="en"><head>

   <title>Tilelanka Home</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <link href= "style.css" rel="stylesheet" type="test/css"/><!--Connect with style.css-->
 <!--style element for slide show-->
 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width:100%;
      margin: auto;
  }

  </style>
</head>
<body>
<!--slide show-->
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img_innovative.jpg" alt="kitchen tiles" width="1024" height="768">
      </div>

      <div class="item">
        <img src="img_bathroom.jpg" alt="floor tiles" width="500" height="345">
      </div>
    
      <div class="item">
        <img src="img_InDesign5.jpg" alt="kitchen tiles" width="500" height="345">
      </div>

      <div class="item">
        <img src="img_Modern-Kitchen.jpg" alt="floor tiles" width="500" height="325">
      </div>
      <div class="item">
        <img src="img_zebra.jpg" alt="floor tiles" width="500" height="325">
      </div>
      <div class="item">
        <img src="img_brum-4.jpg" alt="floor tiles" width="500" height="325">
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
</div>

</body>
</html>