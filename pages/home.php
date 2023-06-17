<?php
// Include necessary files or configurations
// require_once './config/config.php';

// Include header
include_once 'inc/header.php'; 
?>


<main>
    <section class="main-container">
      <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/images/slide/slide3.jpg" alt="Slide 1">
              <div class="carousel-caption">
                <h3>Daakye Pension Trust – Kae Wo Daakye, Emere Dane!</h3>
                <p>We adhere strictly to NPRA’s guidelines on investments of pension funds</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/images/slide/slide2.jpg" alt="Slide 2">
              <div class="carousel-caption">
                <h3>At Daakye Pension Trust,</h3>
                <p>Risk free high interest yielding investment portfolios are designed to ensure safe and maximum returns on contributions.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/images/slide/slide3.jpg" alt="Slide 3">
              <div class="carousel-caption">
                <h3>Daakye Pension Trust – Kae Wo Daakye, Emere Dane!</h3>
                <p>We adhere strictly to NPRA’s guidelines on investments of pension funds</p>
              </div>
            </div>
          </div>
          
          <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a> -->
        </div>
   
      <section class="content">
      <div class="container">  
        <h3>Our Pension Schemes</h3>
        <div class="row">
        <h2> <i class="fa fa-plus"></i>
            <a href="#">Daakye Occupational Pension Scheme (Tier 2)</a></h2>
        </div>
       
        <div class="row">
        <h2><i class="fa fa-plus"></i>
            <a href="#">Daakye Personal Pension Scheme (Tier 3)</a></h2>
        </div>
        <div class="row">
           <h2> <i class="fa fa-plus"></i>
            <a href="#">Daakye Master Trust Provident Fund Scheme (Tier 3)</a></h2>
        </div>
    </div>
  
</section>

        <div class="footer">
  <?php 
    include_once 'inc/footer.php'; 
  
  
  ?>
      
    </div>
      </div>
    </section>
  </main>
