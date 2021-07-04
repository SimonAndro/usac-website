<?php 
$page = "tables";
include "header.php"; 
if(!$currentUser->isAdmin())
{
  echo "Access denied !";
  die();
}else{

  $f_limit = 5;
  $f_page = @$_GET["fp"];
  $f_offset = isset($f_page)?($f_page*$f_limit):0;

  $ttt = count($usersTable->findAll());
  $p = (int) $ttt/$f_limit;

  $fetched_users = $usersTable->findAll("id",$f_limit,$f_offset);
  
}
?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">

          <div class="card-title">

            <span style="font-size:25px;">User Table</span>
            <a href='<?= getAppConfig("site_url")."/dashboard/index.php?reqaction=export" ?>' target="_blank"
              class="btn btn-dark pull-right mt-0">Export</a>

          </div>

          <form onsubmit="return searchUser();">
            <!-- <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <div class="input-group-append">
                <div class="input-group-text">
                  <i class="nc-icon nc-zoom-split"></i>
                </div>
              </div>
            </div> -->
          </form>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">

              <thead class=" text-primary">
                <th>
                  First Name
                </th>
                <th>
                  Last Name
                </th>
                <th>
                  Gender
                </th>
                <th>
                  DOB
                </th>
                <th>
                  Email
                </th>
                <th>
                  University
                </th>
                <th>
                  Graduation Date
                </th>
                <th>
                  Action
                </th>
              </thead>

              <tbody>
                <?php foreach($fetched_users as $fu): ?>
                <tr>
                  <td>
                    <?=$fu->getFirstName()?>
                  </td>
                  <td>
                    <?=$fu->getLastName()?>
                  </td>
                  <td>
                    <?=$fu->getGender()?>
                  </td>
                  <td>
                    <?=$fu->getBirthDate()?>
                  </td>
                  <td>
                    <?=$fu->getEmail()?>
                  </td>
                  <td>
                    <?=$fu->getUniversity()?>
                  </td>
                  <td>
                    <?=$fu->getGraduationDate()?>
                  </td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">View User</a>
                        <!-- <a class="dropdown-item" href="#">Delete User</a> -->
                      </div>
                    </div>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php if($ttt>=$f_limit): ?>
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="...">
        <ul class="pagination justify-content-center" style="overflow-x:auto;">
          <?php for($count=0; $count<$p; $count++):?>
          <?php if($count+1==$f_page): ?>
            <li class="page-item active">
            <a class="page-link" href="./tables.php?fp=<?=$count+1?>"><?=$count+1?> <span class="sr-only">(current)</span></a>
            </li>
          <?php else: ?>
            <li class="page-item"><a class="page-link" href="./tables.php?fp=<?=$count+1?>"><?=$count+1?></a></li>
          <?php endif ?>
          <?php endfor ?>
        </ul>
      </nav>
    </div>
  </div>
  <?php endif ?>
</div>
<?php include "footer.php"; ?>