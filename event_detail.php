<?php
$con = mysqli_connect('localhost','josue','josue','blog');
?>
<!-- Sending data into the server -->
<?php
   if (isset($_POST['book_place'])) {
       $show_b = mysqli_escape_string($con, $_POST['show']);
       $name_b = mysqli_escape_string($con, $_POST['name']);
       $email_b = mysqli_escape_string($con, $_POST['email']);
       $date_b = mysqli_escape_string($con, $_POST['date']);
       $num = mysqli_escape_string($con, $_POST['num']);
       if (empty($name_b)) {
         echo "<script>
              alert('Please enter your name (:');
              window.location = 'event_detail.php?show=$num';
              </script>";
       }elseif (empty($email_b)) {
         echo "<script>
              alert('Please enter your email (:');
              window.location = 'event_detail.php?show=$num';
              </script>";
       }else{
        $query = "select * from book where email='$email_b' and showname='$show_b'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0) {
          echo "<script>
              alert('Please book another show (:');
              window.location = 'event_detail.php?show=$num';
              </script>";
       }else{
$sql_ins = "insert into book(showname,showdate,name,email) values('$show_b','$date_b','$name_b','$email_b')";
          $res_ins = mysqli_query($con, $sql_ins);
          if ($res_ins) {
            echo " 
             <script>
              alert('Great to book our show (:');
              window.location = 'event_detail.php?show=$num';
              </script>
            ";
          }
        }
      }
     }
     ?>
<!-- Checking for data validation in search detail -->
<?php
    if (isset($_GET['show'])) {
    $id = $_GET['show'];
    $sql_s = "select * from event where id='$id'";
    $res_s = mysqli_query($con, $sql_s);
    while ($row_s = mysqli_fetch_array($res_s)){
      $img =  $row_s['event_img'];
      $name =  $row_s['event_name'];
      $msg =  $row_s['event_msg'];
      $date =  $row_s['event_date'];
    }
  }else{
    echo "
     <script>window.location = 'index.php'</script>;
    ";
  }
  ?>
<?php include_once('header.php');?>
<?php include_once('menu.php');?>

    <section class="container-fluid" id="banner">
      <?php
                $sql_b = 'select * from banner';
                $res_b = mysqli_query($con, $sql_b);
                while ($row_b = mysqli_fetch_array($res_b)){if($row_b['banner_type']=='big'){?>
      <h2 class="text-white text-center display-3"><img src="img/logo.png" width="500" alt="Image banner"><br><?php echo $row_b['banner_name'];?></h2>
      <?php }?>
      <?php if($row_b['banner_type']=='small'){?>
      <h3 class="text-danger text-center">_______  <strong class="text-white"><?php echo $row_b['banner_name'];?></strong> ________</h3>
      <?php }?>
      <?php }?>
      <a href="#event" class="btn btn-danger text-uppercase text-center p-3 mt-2" style="margin-left: 44%;">Our event&nbsp;<i class="fas fa-angle-double-down text-white"></i></a>
    </section>
    <div id="service" class="container-fluid">
      <div class="pt-3" style="width: 70%;margin: auto;">
      <div class="row">
     <?php
                $sql_s = 'select * from service';
                $res_s = mysqli_query($con, $sql_s);
                while ($row_s = mysqli_fetch_array($res_s)){?>
        
                 <div class="col-4">
                   <img src="<?php echo $row_s['service_img'];?>" style="max-width: 40px;" alt="Image service">&nbsp;
                   <span class="text-default"><?php echo $row_s['service_text'];?></span>
                 </div> 
                
                <?php }?>
      </div>
      </div>
    </div>
    <div id="event_detail" class="container-fluid">
      <div class="pt-3" style="width: 84.5%;margin: auto;">
       <div class="row">
         <div class="col-4  ml-5">
           <img src="<?php echo $img;?>" class="rounded" width="400" alt="Image search">
         </div>
         <div class="col-4 ml-5">
                  <h5 class="pt-1 ml-4"><?php echo $name;?></h5>
                   <p class="text-justify px-4"><?php echo $msg;?></p>
                   <p class="text-justify px-4"><?php echo $date;?></p>
                   <a href="" class="btn btn-danger p-2 ml-4 text-uppercase" style="max-width: 60%;font-size: 14px;margin-top:-8px;" data-toggle="modal" data-target="#book_show">Book Now &nbsp;&nbsp;<i class="fas fa-shopping-cart text-white"></i></a>
         </div>
         <div class="col-2  ml-5">
         </div>
       </div>       
      </div>
    </div>

    <!-- Booking our show -->
    <div class="modal fade" id="book_show" tabindex="-1" role="dialog" aria-labelledby="book_show" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="col-md-12 col-sm-12 col-xs-12" id="news_letter">
          <div class="news_form">
            <div class="w-75 pt-5 pl-2">
            <h4 class="text-default mb-2"><?php echo $name;?></h4>
            <h5><?php echo $date;?></h5>
            <br>
            <form class="form-group mt-2" method="post" action="event_detail.php"> 
             <input type="text" name="name" placeholder="Name" class="form-control mb-2">
             <input type="hidden" name="show" value="<?php echo $name;?>" class="form-control mb-2">
             <input type="hidden" name="date" value="<?php echo $date;?>" class="form-control mb-2">
             <input type="hidden" name="num" value="<?php echo $id;?>" class="form-control mb-2">
              <input type="email" name="email" placeholder="Email" class="form-control mb-2">
              <input type="submit" name="book_place" value="Book" class="btn w-100 btn-danger">
            </form>
          </div>
          </div>
        </div>
    </div>
  </div>
</div>

    <section id="event" class="container-fluid">
      <div class="pt-3 pb-3" style="width: 84.5%;height:auto;margin: auto;">
        <h2 class="display-4 text-center pt-2">EVENTS</h2>
        <hr class="" style="max-width:10%;height: 10px;">
      <div class="row">
         <?php
                $sql_e = 'select * from event';
                $res_e = mysqli_query($con, $sql_e);
                while ($row_e = mysqli_fetch_array($res_e)){?>
        
                 <div class="col-3">
                 <div class="text-center pb-3 mb-3" style="border:1px solid lightgray;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background: #fff;border-bottom:3px solid #d9534f;">
                  <img src="<?php echo $row_e['event_img'];?>" class="" alt="Image event" style="max-width: 100%;margin: auto;height: 180px;">
                   <h5 class="pt-1"><?php echo $row_e['event_name'];?></h5>
                   <p><?php echo $row_e['event_date'];?></p>
                   <a href="event_detail.php?show=<?php echo $row_e['id'];?>" class="btn btn-danger p-2 text-uppercase" style="max-width: 60%;font-size: 14px;">Read More &nbsp;<i class="fas fa-angle-double-right text-white"></i></a>
                 </div>
                </div> 
                
                <?php }?>
               </div>
                 <div class="row">
                  <div class="col-12 ">
                    <div class="pt-4" style="margin-left:40%;">
                    <a href="events.php#event" class="text-center text-dark p-1" style="font-size: 21px;border:1px solid lightgray;"><img src="img/event.png" width="30" alt="Image event">&nbsp;SHOW ALL EVENTS</a>
                 </div>
                  </div>
                </div>
      </div>
    </section>
    <?php include_once('footer.php');?>
