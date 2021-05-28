
<?php 
  $page = "index";
  include "header.php";
?>
<!-- End Navbar -->
<div class="content">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-single-02 text-warning"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Profile Information</p>
                <p class="card-title">3/5<p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <a href="user.php">
          <div class="stats">
            <i class="fa fa-refresh"></i>
            Update Now
          </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-money-coins text-success"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">USAC Social Community Users</p>
                <p class="card-title">1,345 <p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <a href="community">
          <div class="stats">
            <i class="fa fa-calendar-o"></i>
            Go to Community
          </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-vector text-danger"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">USAC News Portal Articles</p>
                <p class="card-title">23m<p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <a href="news-portal">
          <div class="stats">
            <i class="fa fa-clock-o"></i>
            Go to News Portal
          </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-favourite-28 text-primary"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Website Users</p>
                <p class="card-title">+45K<p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?
        include "footer.php"
      ?>