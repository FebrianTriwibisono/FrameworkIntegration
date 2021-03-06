<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GALAXITY</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="#home" class="navbar-brand page-scroll">Galaxity</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="cover text-center">
      <div class="container">
        <h1>Galaxity</h1>
        <h3>Your Future City has Come</h3>
      </div>
    </div>

    <section class="about" id="about">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <h2 class="section-heading">About</h2>
            <hr>
          </div>
        </div>
      
        <div class="row text-center">
          <div class="col-sm-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore veritatis aliquid consequuntur expedita hic iusto, sequi velit aspernatur! Aperiam sit ipsum quis, laudantium illum perspiciatis, quia veniam perferendis. Explicabo, sequi.</p>
          </div>
          <div class="col-sm-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quo officiis nesciunt sequi, reprehenderit dolores obcaecati, id tenetur magnam cupiditate quaerat corrupti deserunt fugiat explicabo, veritatis quas minima suscipit unde?</p>
          </div>
        </div>
      </div>
    </section>

    <section class="portfolio" id="portfolio">
      <div class="container">
         <div class="row text-center">
           <div class="col-sm-12">
             <h2 class="section-heading">Portfolio</h2>
             <hr>
           </div>
         </div>
         <div class="row">
           <div class="col-sm-4">
             <a href="">
               <img src="<?php echo base_url()?>assets/img/1.png" class="img-thumbnail">
             </a>
           </div>
           <div class="col-sm-4">
             <a href="">
               <img src="<?php echo base_url()?>assets/img/2.png" class="img-thumbnail">
             </a>
           </div>
           <div class="col-sm-4">
             <a href="">
               <img src="<?php echo base_url()?>assets/img/3.png" class="img-thumbnail">
             </a>
           </div>
           <div class="col-sm-4">
             <a href="">
               <img src="<?php echo base_url()?>assets/img/4.png" class="img-thumbnail">
             </a>
           </div>
           <div class="col-sm-4">
             <a href="">
               <img src="<?php echo base_url()?>assets/img/5.png" class="img-thumbnail">
             </a>
           </div>
           <div class="col-sm-4">
             <a href="">
               <img src="<?php echo base_url()?>assets/img/6.png" class="img-thumbnail">
             </a>
           </div>
         </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <h2 class="section-heading">Contact</h2>
            <hr>
            <p>For More Information</p>
            <br>
            <br>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 text-center">
            <span class="glyphicon glyphicon-earphone"></span>
            <p>123-456-XXX</p>
          </div>
           <div class="col-sm-6 text-center">
            <span class="glyphicon glyphicon-envelope"></span>
            <p>galaxity@gmail.com</p>
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <h4>Copyright &copy; Febrian Triwibisono</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url()?>assets/jquery/jquery-3.2.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/script.js"></script>
  </body>
</html>