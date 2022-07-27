<?php 
include("conn.php");
$userID=$_GET['id'];
$printProfile="";
$profile=mysqli_query($db, "SELECT * FROM candidates WHERE email='".$_SESSION['candidate']."'");
if(mysqli_num_rows($profile)>0) {
  while($row=mysqli_fetch_array($profile)) {
    $printProfile.='<link rel="stylesheet" href="assets/css/profile.css">
  <div class="col-md-12 col-sm-12 col-xs-12 image-section">
    <img class="bgImg" src="assets/images/bg_0.jpg">
  </div>
  <div class="row user-left-part">
    <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
      <div class="row ">
        <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
          <img src="https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png" class="rounded-circle">
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
          <button class="btn btn-success btn-block follow">Follow</button>
          <button class="btn btn-warning btn-block">Mes</button>                               
        </div>
        <div class="row user-detail-row">
          <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
            <div class="border"></div>
              <p>FOLLOWER</p>
              <span>320</span>
            </div>                           
          </div>               
        </div>
      </div>
      <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
        <div class="row profile-right-section-row">
          <div class="col-md-12 profile-header">
            <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                <h1>'.$row["name"].' '.$row["surname"].'</h1>
                <h5>Developer</h5>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth">
              <button (click)="clearModal()" data-toggle="modal" data-target="#contact" class="btn btn-primary btn-block">Resume</button>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-8">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"></i>User Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"></i>Persnol Details</a>
                  </li>                                                
                </ul>                                              
                <!-- Tab panes -->
                <div class="tab-content mt-2">
<div role="tabpanel" class="tab-pane fade show active" id="profile">
  <div class="row">
    <div class="col-md-3">
      <label>ID</label>
    </div>
    <div class="col-md-6">
      <p>'.$row["id"].'</p>
    </div>
  </div>
  <div class="row">
      <div class="col-md-3">
          <label>Father Name</label>
      </div>
      <div class="col-md-6">
          <p>'.$row["father"].'</p>
      </div>
  </div>
  <div class="row">
      <div class="col-md-3">
          <label>Gendert</label>
      </div>
      <div class="col-md-6">
          <p>'.$row["gender"].'</p>
      </div>
  </div>
  <div class="row">
      <div class="col-md-3">
          <label>D.O.B</label>
      </div>
      <div class="col-md-6">
          <p>'.$row["birthDay"].'-'.$row["birthMonth"].'-'.$row["birthYear"].'</p>
      </div>
  </div>
  <div class="row">
      <div class="col-md-3">
          <label>Mobile</label>
      </div>
      <div class="col-md-6">
          <p>'.$row["mobile"].'</p>
      </div>
  </div>
  <div class="row">
      <div class="col-md-3">
          <label>Email</label>
      </div>
      <div class="col-md-6">
          <p>'.$row["email"].'</p>
      </div>
  </div>
  <div class="row">
    <div class="col-md-3">
     <label>Address</label>
    </div>
    <div class="col-md-6">
      <p>
        '.$row["addressLine0"].'<br>
        '.$row["addressLine1"].'<br>
        '.$row["city"].', '.$row["state"].'. '.$row["pinCode"].'
      </p>
   </div>
  </div>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="buzz">
    <div class="row">
      <div class="col-md-6">
        <label>Membership</label>
      </div>
      <div class="col-md-6">
        <p>'.$row["member"].'</p>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Marital Status</label>
        </div>
        <div class="col-md-6">
            <p>'.$row["relationship"].'</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Religion</label>
        </div>
        <div class="col-md-6">
            <p>'.$row["religion"].'</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Political View</label>
        </div>
        <div class="col-md-6">
            <p>'.$row["political"].'</p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
          <label>Bio</label>
        </div>
        <div class="col-md-6">
          <p>'.$row["bio"].'</p>
        </div>
    </div>
  </div>
</div>

</div>
                        <div class="col-md-4 img-main-rightPart">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row image-right-part">
                                        <div class="col-md-6 pull-left image-right-detail">
                                            <h6>PUBLICIDAD</h6>
                                        </div>
                                    </div>
                                </div>
                                <a href="http://camaradecomerciozn.com/">
                                    <div class="col-md-12 image-right">
                                        <img src="http://pluspng.com/img-png/bootstrap-png-bootstrap-512.png">
                                    </div>
                                </a>
                                <div class="col-md-12 image-right-detail-section2">
  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
  
  <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="contact">Contactarme</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <p for="msj">Se enviará este mensaje a la persona que desea contactar, indicando que te quieres comunicar con el. Para esto debes de ingresar tu información personal.</p>
            </div>
            <div class="form-group">
                <label for="txtFullname">Nombre completo</label>
                <input type="text" id="txtFullname" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="text" id="txtEmail" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtPhone">Teléfono</label>
                <input type="text" id="txtPhone" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" (click)="openModal()" data-dismiss="modal">Guardar</button>
        </div>
    </div>
  </div>';
  }
  echo $printProfile;
} else {
  echo 'Data Not Found';
}
?>