<!-- Template design and coding by Josue lotshango sombo
     Banner Id B00361289
     college ISBC INDIA
     contact : +918861657097
     Email : lotshangojosue@gmail.com
-->
<?php include_once('../db-conf.php');?>
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
          <h3 class="display-4 mt-auto" style="width:15%;font-size: 1.6rem;float: left;"><i class="fas fa-user-alt text-light fa-1x mr-3 text-dark mr-3"></i><strong class="pt-5">User</strong></h3><br>
        <hr>
        </div>
        <!-- Show item from databases -->
        <div class="bg-white border">
          <table class="table table-hover">
            <tr>
              <th> User Image</th>
              <th> Name</th>
              <th> Password</th>
              <th> Email</th>
              <th> Language</th>
              <th> Address</th>
              <th> Privilege</th>
              <th> Action</th>
            </tr>
          <?php
          $sql = 'SELECT * FROM user';
          $result = mysqli_query($con,$sql); 
          while($row = mysqli_fetch_assoc($result)){?>
            <tr>
              <td><img src="<?php echo "../../".$row['avatar'];?>" alt="image" class="img-fuid rounded" width="120"></td>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['password'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['language'];?></td>
              <td><?php echo $row['address'];?></td>
              <td><?php echo $row['privilege'];?></td>
              <td>
                <div style="display: flex;">
                <a href="view.php?view=<?php echo $row['id'];?>" class="btn btn-success text-white small-cus"><i class="fas fa-eye text-white pt-0 icon"></i></a>
                <a href="edit.php?edit=<?php echo $row['id'];?>" class="btn btn-primary small-cus"><i class="far fa-edit icon pt-0"></i></a>
                <a href="index.php?delete=<?php echo $row['id'];?>" class="btn btn-danger small-cus"><i class="fas fa-trash  icon pt-0"></i></a>
                </div>
              </td>
            </tr>
          <?php }?>
          </table>          
        </div>
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
            <input type="text" name="name" value="" placeholder="" class="form-control mb-2" required>
            <label>Event date</label>
            <input type="text" name="date" value="" placeholder="Dec 18, 06:00 PM" class="form-control mb-2" required>
            <label>Message</label><br>
            <textarea class="form-control" required style="height: 120px;" name="msg"></textarea>
         </div>
         <div class="col-sm-5 mb-2 bg-white pt-3">
           <img src="<?php echo "../".$avatar;?>" class="img-fluid w-100 mb-2" style="border:1px solid lightgray;" alt="image">
           <div class="mt-2 background w-100">
           <input type="file" name="image" required class="form-control-file mb-0  p-2 w-25">
           </div>
           <input type="submit" name="addevent" value="Add event" class="btn btn-primary w-75 mt-5 small-btn">
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
if(isset($_POST["addevent"])) {
 
 $target_dir = "../../img";
 $target_file = $target_dir ."/". basename($_FILES["image"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));   
// Check if file already exists
if (file_exists($target_file)) {
    echo "<script>alert('Sorry, Image already exists.')</script>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "<script>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
    echo "<script>alert('Sorry, only JPG & PNG files are allowed.')</script>";
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
        $send_img = "img/".basename($_FILES["image"]["name"]);
        $sql_event = "insert into event(event_img,event_name,event_date,event_msg) value('$send_img','$send_name','$send_date','$send_msg')";
        $res = mysqli_query($con,$sql_event)or die("");
        if ($res) {
          echo "<script>
          alert('Event added !!!');
          window.location='index.php'
          </script>";
        }
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
    }
}
}
?>


<?php
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  //remove data from table
  $del = "delete from user where id='$id'";
  $result = mysqli_query($con,$del);
  if ($result) {
    
    echo "<script>
    alert('Data remove success $img_del');
    window.location='index.php'</script>";
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
