<!-- Template design and coding by Josue lotshango sombo
     Banner Id B00361289
     college ISBC INDIA
     contact : +918861657097
     Email : lotshangojosue@gmail.com
-->
<?php include_once('../db-conf.php');?>

<?php 
 if (isset($_GET['edit'])) {
   $id_event = $_GET['edit'];
 }else{
  header("location:index.php");
 }
?>
<?php
          $sql = "SELECT * FROM concert where id='$id_event'";
          $result = mysqli_query($con,$sql); 
          while($row = mysqli_fetch_assoc($result)){
            $img = $row['concert_img'];
            $eventname = $row['concert_name'];
            $date = $row['concert_date'];
            $msg = $row['concert_place'];
            }
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- customized css query -->
    <link href="../../css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/master.css">

    <!-- Favicon Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon.ico">
    <!-- Font family -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 


  </head>
  <body>         
  <nav class="navbar navbar-expand-md navbar-dark small">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <div class="container-fluid">
      <div class="row">
         <div class="col-lg-2 col-md-2 sidebar fixed-top">
         <a class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 botton-brand" href="../header.php">Soul &nbsp;And &nbsp;Jazz</a>
         <div class="botton-brand pb-3 mb-5"> 
           <img src="<?php echo "../".$avatar;?>" class="rounded-circle mr-3" width="50" alt="image">
           <a href="../header.php" class="text-white small-link"><?php echo $name;?></a>
         </div>
         <ul class="navbar-nav flex-column mt-4">
           <li class="navbar-item mb-5 mt-xs-2"><a href="../header.php" class="navbar-link text-light p-3 sidebar-link current"><i class="fa fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
           <li class="navbar-item mb-5"><a href="../database.php" class="navbar-link text-light p-3 sidebar-link"><i class="fas fa-database text-light fa-lg mr-3"></i>Databases</a></li>
           <li class="navbar-item mb-5"><a href="../profile.php" class="navbar-link text-light p-3 sidebar-link"><i class="fas fa-user-alt text-light fa-lg mr-3"></i>Profile</a></li>
           <li class="navbar-item mb-5"><a href="../setting.php" class="navbar-link text-light p-3 sidebar-link"><i class="fas fa-cog text-light fa-lg mr-3"></i>Settings</a></li>
           <li class="navbar-item mb-5"><a href="../logout.php" data-toggle="modal" data-target="#logout" class="navbar-link text-light p-3 sidebar-link"><i class="fas fa-sign-out-alt text-light fa-lg mr-3"></i>Log out</a></li>
         </ul>
         </div>
         <div class="col-lg-10 col-md-10 rightbar bg-dark ml-auto fixed-top py-2">
           <div class="row">
             <div class="col-md-3">
              <h4 class="text-uppercase text-light mb-0 pt-2">Dashboard</h4>  
             </div>
             <div class="col-md-5 small-hide">
              <form method="post" action="../search.php" class="form-inline mb-0">
                <input type="search" name="search" id="search" placeholder="Search database" class="form-control search-bar">
                <button class="btn btn-danger search-button"><i class="fas fa-search fa-lg" style="margin-left: -5px;"></i></button>
              </form>
             </div>
             <div class="col-md-4 pt-2 small-hide">
               <img src="<?php echo "../".$avatar;?>" class="rounded-circle mr-3" width="50" alt="image">
               <a href="" class="text-white"><?php echo $name;?></a>
             </div>
           </div>
                
         </div>
      </div>
    </div>
  </div>
</nav>
<!-- Body of Page -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9 ml-auto " id="left-side">
    <!-- Book show -->
      <div class="row pt-5 mt-3 mb-5">
        <div class="col-sm-12 mb-1">
          <h3 class="display-4 mt-auto" style="width:15%;font-size: 1.6rem;float: left;"><i class="fas fa-calendar text-light fa-1x mr-3 text-dark mr-3"></i><strong class="pt-5">Concert</strong></h3> <a href="index.php" class="btn btn-success"><i class="fas fa-plus-circle pr-2 icon"></i>Add Concert</a>
        <hr>
        </div>
      <!-- Main content -->
      <div class="col-sm-12 mb-1">
      <form class="form-group" method="post" enctype="multipart/form-data">
      <div class="row">
      <div class="col-sm-6 mb-2 bg-white background pt-3 mr-3">
		    <label>Concert Name</label>
		    <input type="text" name="name" value="<?php echo $eventname;?>" placeholder="" class="form-control mb-2">
		    <label>Concert date</label>
		    <input type="text" name="date" value="<?php echo $date;?>" placeholder="" class="form-control mb-2">
		    <label>Concert place</label><br>
		    <textarea class="form-control" name="msg" style="height: 120px;"><?php echo $msg;?></textarea>
		 </div>
                 <div class="col-sm-4 mb-2 bg-white background pt-3">
		   <img src="<?php echo "../../".$img;?>" class="img-fluid w-100 mb-2" style="border:1px solid lightgray;" alt="image">
		   <div class="mt-2 background w-100" >
        <input type="file" name="image" class="form-control-file mb-0  p-2">
		   </div>
		   <input type="submit" name="editconcert" value="Edit" class="btn btn-primary w-50 mt-5 small-btn mb-2">
		   </div>
      </div> 
      </form>   
      </div>
      <!-- Ending content -->
     </div>
    </div>
  </div>
<!-- Modal for user sign out -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="logout" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <p class="ml-4">Are you really want to leave ?</p>
      <div class="row pb-3">
        <div class="col-lg-6 col-md-6">
          <a href="index.php" class="btn btn-primary w-75 ml-4">Cancel</a>
        </div>
        <div class="col-lg-6 col-md-6">
          <a href="../logout.php" class="btn btn-danger w-75 ml-4">Ok</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal for adding event -->
<div class="modal fade" id="eventadd" tabindex="-1" role="dialog" aria-labelledby="eventadd" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Left side -->
      <div class="container-fluid">
      <form class="form-group" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-sm-6  bg-white pt-2">
            <label>Event Name</label>
            <input type="text" name="name" value="" placeholder="" class="form-control mb-2">
            <label>Event date</label>
            <input type="text" name="password" value="" placeholder="Dec 18, 06:00 PM" class="form-control mb-2">
            <label>Message</label><br>
            <textarea class="form-control" style="height: 120px;"></textarea>
         </div>
         <div class="col-sm-5 mb-2 bg-white pt-3">
           <img src="<?php echo "../".$avatar;?>" class="img-fluid w-100 mb-2" style="border:1px solid lightgray;" alt="image">
           <div class="mt-2 background w-100">
           <input type="file" name="image" class="form-control-file mb-0  p-2 w-25">
           </div>
           <input type="submit" name="editevent" value="Add event" class="btn btn-primary w-75 mt-5 small-btn">
        </div>
        </div>
       </form>
        </div>
        <!-- end of add -->
      </div>
    </div>
  </div>
</div>
<!-- CRUD function in PHP -->
<?php

// Check if image file is a actual image or fake image
if(isset($_POST["editconcert"])) {

 if($_FILES['image']){
 $target_dir = "../../img";
 $target_file = $target_dir ."/". basename($_FILES["image"]["name"]);
 }
 
 $target_file_1 = $img;

 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));  
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "<script>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>alert('Sorry, your file was not uploaded.</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $send_name = $_POST['name'];
        $send_date = $_POST['date'];
        $send_msg = $_POST['msg'];
        $send_img = $target_file;
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
          echo "<script>alert('Sorry, only JPG, JPEG & PNG files are allowed.')</script>";
         $uploadOk = 0;
           }
           else
           {
            $sql_event = "update concert set concert_img ='$send_img',concert_name='$send_name',concert_date='$send_date',concert_place='$send_msg' where id='$id_event'";
             $res = mysqli_query($con,$sql_event)or die("");
            if ($res) {
          echo "<script>
          alert('Concert edited !!!');
          window.location='index.php'
          </script>";
        }
      }
    } else {
            $send_name = $_POST['name'];
            $send_date = $_POST['date'];
            $send_msg = $_POST['msg'];
            $send_img = $target_file_1;
            $sql_event = "update concert set concert_img ='$send_img',concert_name='$send_name',concert_date='$send_date',concert_place='$send_msg' where id='$id_event'";
              $res = mysqli_query($con,$sql_event)or die("");
             if ($res) {
          echo "<script>
          alert('Concert edited !!!');
          window.location='index.php'
          </script>";
        }
    }
}
}
?>
 
    <!-- Optional JavaScript -->
    <script src="../../js/all.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
