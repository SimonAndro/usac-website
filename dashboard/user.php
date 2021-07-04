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
            <a href="#" onclick="return BigPicture({	el: this,	imgSrc: '<?= loadAsset($currentUser->getStudentCard(),true) ?>',})">
              <img class="veri-doc border-gray" src="<?= loadAsset($currentUser->getStudentCard(),true) ?>" alt="Verification doc">
              <h5 class="title">Verification</h5>
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
              <div class="col-md-4 pr-1 pl-1">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="First name" value="<?= $currentUser->getFirstName() ?>">
                </div>
              </div>
              <div class="col-md-4 pr-1 pl-1">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name" value="<?= $currentUser->getLastName() ?>">
                </div>
              </div>
              <div class="col-md-4 pr-1 pl-1"> 
              <label>Date of Birth</label>
              <input style="height: 39px !important; font-size:16px;" class="form-control" type="text" name="val[birthdate]" placeholder="Birthdate" readonly="readonly" id="quiDatepicker" value="<?= $currentUser->getBirthDate() ?>">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="Email" value="<?= $currentUser->getEmail() ?>">
                
                </div>
              </div>
              
              <div class="col-md-6 pr-1">
                <div class="form-group">
                <label>Gender</label>
                  <select class="form-control" id="genderSelect" value="<?= $currentUser->getGender() ?>">
                  <option value="" selected disabled><?=  $currentUser->getGender() ?></option>  
                  <option value="male">male</option>
                    <option value="female">female</option>
                </select>
               </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>University (Most recent)</label>
                  <input type="text" class="form-control" placeholder="University name" value="<?= $currentUser->getUniversity() ?>">
                </div>
              </div>
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Grad. Year</label>
                  <input type="text" class="form-control" placeholder="Grad. Year" value="<?= $currentUser->getGraduationDate() ?>" readonly="readonly" id="quiDatepicker2">
                </div>
              </div>
            </div>

            <?php if($currentUser->isAdmin()):?>
            <div class="row">
            <div class="col-md-4 pr-1 pl-1">
                <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" id="roleSelect" value="<?= $currentUser->getRole() ?>">
                    <option value="" selected disabled><?=  $currentUser->getRole() ?></option>
                    <option value="0">Normal User</option>
                    <option vlaue="1">Adminstrator</option>
                </select> </div>
              </div>
            </div>
            <?php endif ?>

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