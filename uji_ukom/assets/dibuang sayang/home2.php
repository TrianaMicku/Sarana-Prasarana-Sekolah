<!DOCTYPE html>
 <html lang="en" id="home">
 <head>
  <title>Sistem Inventaris Sarana Prasarana</title>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">

 </head>
 <body >

    <nav class="navbar navbar-fixed-top" style="background-color: #3caea3;" role="navigation">
     <div class="container">
       <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

              <span class="sr-only">Tonggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

            </button>

            <table>
              <tr>
                <td>
                  <img src="assets/img/triana.png" class="img-responsive" width="40" height="40">
                </td>
                <td>
                  <a href="#home" class="navbar-brand page-scroll" style="color: white;">SARPRAS</a>
                </td>
              </tr>
            </table>
            </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          
       
        <?php if(empty($_SESSION['masuk'])){ ?>
      <li><a style="color: white;" class="page-scroll" href="login.php"><b>Login</b></a></li>
    <?php } ?>
    </div>  

          </div>
        </nav>


<!--   carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>

  </ol>
  <style>

  
.tales {
  width: 100% !important;
  height: 607px !important;
}
  </style>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="assets/img/4.png" alt="Los Angeles" class="tales">
    </div>

    <div class="item">
      <img src="assets/img/3.png" alt="Chicago" class="tales">
    </div>

    <div class="item">
      <img src="assets/img/2.png" alt="New York" class="tales">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- akhir carousel -->


<script src="assets/js/script.js"></script>