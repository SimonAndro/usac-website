<?php 
$page = "user";
include "header.php";
 ?>
<div class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="card card-user">
        <div class="image">
          <img src="../assets/img/usac-logo.png" alt="...">
        </div>
        <div class="card-body">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
              <h5 class="title">Chet Faker</h5>
            </a>
            
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title">Edit Profile</h5>
        </div>
        <div class="card-body">
          <form class="pr-1 pl-1">
            <div class="row">
              <div class="col-md-5 pr-1 pl-1">
                <div class="form-group">
                  <label>Association (disabled)</label>
                  <input type="text" class="form-control" disabled="" placeholder="Company" value="USAC">
                </div>
              </div>
              <div class="col-md-3 px-1 ">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Username" value="michael23">
                </div>
              </div>
              <div class="col-md-4 pr-1 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 pr-1 pl-1">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="Company" value="Chet">
                </div>
              </div>
              <div class="col-md-4 pr-1 pl-1">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                </div>
              </div>
              <div class="col-md-4 pr-1 pl-1"> 
              <label>Date of Birth</label>
              <input style="height: 39px !important; font-size:16px;" class="form-control" type="text" name="val[birthdate]" placeholder="Birthdate" readonly="readonly" id="quiDatepicker">
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>University</label>
                  <input type="text" class="form-control" placeholder="University name" value="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 pr-1 pl-1">
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" placeholder="City" value="Melbourne">
                </div>
              </div>
              <div class="col-md-4 px-1">
                <div class="form-group">
                  <label>Country</label>
                  <input type="text" class="form-control" placeholder="Country" value="Australia">
                </div>
              </div>
              <div class="col-md-4 pr-1 pl-1">
                <div class="form-group">
                  <label>Postal Code</label>
                  <input type="number" class="form-control" placeholder="ZIP Code">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php" ?>