<?php
//Database connectivity in mysql 
$con = mysqli_connect('localhost','josue','josue','blog');
if(!$con){
header('location:error.php');
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
      <a href="#event_home" class="btn btn-danger text-uppercase text-center p-3 mt-2" style="margin-left: 44%;">Upcoming event &nbsp;<i class="fas fa-angle-double-down text-white"></i></a>
    </section>


    <div id="service" class="container-fluid">
      <div class="pt-3" style="width: 70%;height:auto;margin: auto;">
      <div class="row">
     <?php
                $sql_s = 'select * from service';
                $res_s = mysqli_query($con, $sql_s);
                while ($row_s = mysqli_fetch_array($res_s)){?>
        
                 <div class="col-md-4 col-sm-12 col-xs-12">
                   <img src="<?php echo $row_s['service_img'];?>" style="max-width: 40px;" alt="Image service">&nbsp;
                   <span class="text-default"><?php echo $row_s['service_text'];?></span>
                 </div> 
                
                <?php }?>
      </div>
      </div>
    </div>
    <!-- Events -->
    <section class="event_home">
      <div class="pt-3 pb-3" style="width: 84.5%;height:auto;margin: auto;">
        <h2 class="display-4 text-center pt-2">UPCOMING EVENTS</h2>
        <hr class="" style="max-width:10%;height: 10px;">
      <div class="row">
         <?php
                $sql_e = 'select * from event limit 4';
                $res_e = mysqli_query($con, $sql_e);
                while ($row_e = mysqli_fetch_array($res_e)){?>
        
                 <div class="col-md-3 col-sm-3 col-xs-3">
                 <div class="text-center pb-3" style="border:1px solid lightgray;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background: #fff;border-bottom:3px solid #d9534f;">
                  <img src="<?php echo $row_e['event_img'];?>" class="" style="width: 100%;height:160px;margin: auto;" alt="Image event">
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
                    <a href="tour.php#event" class="text-center text-dark p-1" style="font-size: 21px;border:1px solid lightgray;"><img src="img/event.png" width="30" class="Image service" alt="Image event">&nbsp;SHOW ALL EVENTS</a>
                 </div>
                  </div>
                </div>
      </div>
    </section>
    <!-- Gallery video -->

    <section id="gallery_video" style="height: 85px;border-top: 1px solid lightgray" class="bg-white">
      <h2 class="text-center w-100 pt-3   display-4 text-uppercase" style="font-size: 1.7rem;">Our video gallery</h2>
        <hr class="" style="max-width:10%;height: 10px;">
        <br>
        <br>
    </section>

    <div id="show" class="container-fluid">
      <div class="container pt-5 pb-5">
      <div class="row">
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div style="">
          <a target="_self" href="" data-toggle="modal" data-target="#content"><img src="img/event_1.jpg" width="280" class="gallery_img mb-2" alt="Imge video"><img src="img/player.png" width="60" style="position: absolute;left: 107px;top:58px"  alt="Imge video"></a>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div>
          <a href="" data-toggle="modal" data-target="#content_3"><img class="gallery_img" src="img/event_2.jpg" alt="Imge video" width="280"><img src="img/player.png" width="60" style="position: absolute;left: 107px;top:58px" alt="Imge video"></a>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div>
          <a href="" data-toggle="modal" data-target="#content_2"><img class="gallery_img" alt="Imge video" src="img/event_3.jpg" width="280"><img src="img/player.png" width="60" style="position: absolute;left: 107px;top:58px" alt="Imge video"></a>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div>
          <a href="" data-toggle="modal" data-target="#content_1"><img class="gallery_img" alt="Imge video" src="img/event_4.jpg" width="280"><img src="img/player.png" width="60" style="position: absolute;left: 107px;top:58px;z-index: 1" alt="Imge video"></a>
        </div>
      </div>
      <!-- second line -->
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div style="">
          <a target="_self" href="" data-toggle="modal" data-target="#content_4"><img src="img/event_5.jpg" alt="Imge video" width="280" class="gallery_img"><img src="img/player.png" width="60" style="position: absolute;left: 107px;top:58px" alt="Imge video"></a>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div style="">
          <a target="_self" href="" data-toggle="modal" data-target="#content_5"><img src="img/event_6.jpg" alt="Imge video" width="280" class="gallery_img"><img src="img/player.png" width="60" style="position: absolute;left: 107px;top:58px" alt="Imge video"></a>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div style="">
          <a target="_self" href="" data-toggle="modal" data-target="#content_6"><img src="img/event_7.jpg" width="280" class="gallery_img" alt="Imge video"><img src="img/player.png" width="60" style="position: absolute;left: 107px;top:58px" alt="Imge video"></a>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div style="">
          <a target="_self" href="" data-toggle="modal" data-target="#content_7"><img src="img/event_8.jpg" width="280" class="gallery_img" alt="Imge video"><img  src="img/player.png" width="60" style="position: absolute;left: 107px;top:58px" alt="Imge video"></a>
        </div>
      </div>
      <!-- end of row -->
    </div>
  </div>
    </div>
    <!-- Modal database system video play -->
    <!-- Modal -->
<div class="modal fade" id="content" tabindex="-1" role="dialog" aria-labelledby="content" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <video controls="controls" width="495" height="300">
        <source src="video/music.webm" type="video/webm">
      </video>
    </div>
  </div>
</div>
<!-- Second modal -->
<div class="modal fade" id="content_1" tabindex="-1" role="dialog" aria-labelledby="content_1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <video controls="controls" width="495" height="300">
        <source src="video/music_1.webm" type="video/webm">
      </video>
    </div>
  </div>
</div>
<!-- Second modal -->
<div class="modal fade" id="content_2" tabindex="-1" role="dialog" aria-labelledby="content_2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <video controls="controls" width="495" height="300">
        <source src="video/music_2.webm" type="video/webm">
      </video>
    </div>
  </div>
</div>
<!-- Second modal -->
<div class="modal fade" id="content_3" tabindex="-1" role="dialog" aria-labelledby="content_3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <video controls="controls" width="495" height="300">
        <source src="video/music_3.webm" type="video/webm">
      </video>
    </div>
  </div>
</div>

<!-- Second modal -->
<div class="modal fade" id="content_4" tabindex="-1" role="dialog" aria-labelledby="content_4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <video controls="controls" width="495" height="300">
        <source src="video/music_4.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</div>
<!-- Second modal -->
<div class="modal fade" id="content_5" tabindex="-1" role="dialog" aria-labelledby="content_5" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <video controls="controls" width="495" height="300">
        <source src="video/music_5.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</div>

<!-- Second modal -->
<div class="modal fade" id="content_6" tabindex="-1" role="dialog" aria-labelledby="content_6" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <video controls="controls" width="495" height="300">
        <source src="video/music_6.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</div>

<!-- Second modal -->
<div class="modal fade" id="content_7" tabindex="-1" role="dialog" aria-labelledby="content_7" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <video controls="controls" width="495" height="300">
        <source src="video/music_7.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</div>
<!-- Record -->
<section id="event_home" class="container-fluid" style="border:1px solid lightgray;">
      <div class="pt-3 pb-4" style="width: 84.5%;height:auto;margin: auto;" id="reco">
        <h2 class="display-4 text-center pt-2">OUR RECORDS</h2>
        <hr class="" style="max-width:10%;height: 10px;">
      <div class="row">
         <?php
                $sql_r = 'select * from record limit 4';
                $res_r = mysqli_query($con, $sql_r);
                while ($row_r = mysqli_fetch_array($res_r)){?>
        
                 <div class="col-md-3 col-sm-3 col-xs-3">
                 <div class="text-center pb-3" style="border:1px solid lightgray;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background: #fff;border-bottom:3px solid #060606;">
                  <img src="<?php echo $row_r['record_img'];?>" class="" style="max-width: 100%;margin: auto;height: 190px;" alt="Image record">
                   <h5 class="pt-1"><?php echo $row_r['record_name'];?></h5>
                   <p><?php echo $row_r['record_date'];?></p>
                 </div>
                </div> 
                
                <?php }?>
               </div>
                 <div class="row" id="error_show">
                  <div class="col-12 ">
                    <div class="pt-4" style="margin-left:40%;">
                    <a href="discography.php#record" class="text-center text-dark p-1" style="font-size: 21px;border:1px solid lightgray;"><img src="img/event.png" width="30" alt="Image record">&nbsp;SHOW ALL RECORDS</a>
                 </div>
                  </div>
                </div>
      </div>
    </section>
    <!-- Contact us -->
    <section id="contact" class="container-fluid bg-white">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12" id="contact_img">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15547.185744652812!2d77.6421572!3d13.0486256!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1572624892111!5m2!1sen!2sin" width="600" height="380"  style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12" id="contact_form" style="background:#fff; ">
          <h3 class="mb-3 display-4" style="font-size: 28.5px;">How can I help you ?</h3>
          <p class="text-danger mt-4" id="error"></p>
          <form class="form-group" method="post">
            <input type="text" name="name" placeholder="Name" class="form-control w-75 mb-2 mt-3">
            <input type="email" name="email" placeholder="Email" class="form-control w-75 mb-2">
            <textarea class="form-control w-75 mb-4" name="msg" placeholder="message "></textarea>
            <input type="submit" name="contact" class="btn btn-primary w-50" style="border-radius: 50px;" value="Submit">
          </form>
        </div>
      </div>
      
    </section> 
    <!-- database get info detail -->
    <?php
                $sql_a = 'select * from about where id=1';
                $res_a = mysqli_query($con, $sql_a);
                while ($row_a = mysqli_fetch_array($res_a)){
                $about_1 = $row_a['about_name'];
                $about_2 = $row_a['about_title'];
                $about_3 = $row_a['about_msg'];
     }
     ?>
     
     <?php
                $sql_a = 'select * from about where id=2';
                $res_a = mysqli_query($con, $sql_a);
                while ($row_a = mysqli_fetch_array($res_a)){
                $about_4 = $row_a['about_name'];
                $about_5 = $row_a['about_title'];
                $about_6 = $row_a['about_msg'];
     }
     ?>
     <?php
                $sql_a = 'select * from about where id=3';
                $res_a = mysqli_query($con, $sql_a);
                while ($row_a = mysqli_fetch_array($res_a)){
                $about_7 = $row_a['about_name'];
                $about_8 = $row_a['about_title'];
                $about_9 = $row_a['about_msg'];
     }
     ?>
    <!-- mission -->
    <section id="mission" class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="mission_header">
            <h2 class="display-4"><?php echo $about_1;?> <br><?php echo $about_2;?> </h2>
            <p class="text-danger who">Who are we?</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="mission_text">
            <p class="text-justify" id="error_news_show"><?php echo $about_3;?></p>
          </div>
        </div>
      </div>
    </section>
    <section id="news" class="container-fluid">
     <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="row text-white px-5">
             <div class="col-12 ">
               <h2 class="pt-5"><?php echo $about_5;?> </h2>
               <p class="text-justify pt-2"><?php echo $about_6;?> </p>
             </div>
             <br>
             <div class="w-100" style="height:30px;">
               
             </div>
             <br>
             <div class="col-md-12 col-sm-12 col-xs-12">
               <h5><?php echo $about_8;?></h5>
               <p class="text-justify"><?php echo $about_9;?></p> 
             </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12" id="news_letter">
          <div class="news_form">
            <div class="w-75 pt-5 pl-2">
            <h4 class="text-white mb-2">Register to our Newsletter</h4>
            <br>
            <p id="error_news" class="text-white"></p>
            <form class="form-group mt-2" method="post"> 
             <input type="text" name="name" placeholder="Name" class="form-control mb-2">
              <input type="email" name="email" placeholder="Email" class="form-control mb-2">
              <input type="submit" name="newsletter" value="Send" class="btn w-100 btn-danger">
            </form>
          </div>
          </div>
        </div>
      </div> 
    </section>

    <!-- send data for contact and newsletter in the server -->
    <!-- Design by Josue Lotshango Sombo -->
      <?php
     if (isset($_POST['contact'])) {
       $name = mysqli_escape_string($con,$_POST['name']);
       $email = mysqli_escape_string($con,$_POST['email']);
       $msg = mysqli_escape_string($con,$_POST['msg']);
       $special = '+-_@;&$%!^*';
       $name_s = trim($name, $special);
       $email_s = trim($email, "+-_;&$%!^*");
       $msg_s = trim($msg, $special);
       if (empty($name_s)) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter name';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       elseif (empty($email_s)) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter email';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       elseif (empty($msg_s)) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter message';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       elseif (strlen($name_s) < 6) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter name more than 6 char';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       elseif ( str_word_count($name_s) >= 2) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter only name ';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       elseif ( strlen($msg_s) >= 60) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter less than three line ';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       else{
        $query = "select * from contact where contact_email='$email_s'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0) {
          echo "
             <script>
               alert('Sorry we will get back soon to you');
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'You already contact us';
               window.location = 'index.php#error_show';
             </script>
         ";
        }else{
          $sql_ins = "insert into contact(contact_name,contact_email,concert_msg,contact_date) values('$name_s','$email_s','$msg_s',now());";
          $res_ins = mysqli_query($con, $sql_ins);
          if ($res_ins) {
            echo "
              <script>
              alert('Thanks to contact us');
              window.location = 'index.php';
              </script>
            ";
          }else{
            echo "
              <script>
              alert('Oof something went wrong !!!')
              </script>
            ";
          }
        }

       }
     }
    ?>
    <!-- Send data for newsletter -->
    <!-- Design by Josue Lotshango Sombo -->
      <?php
     if (isset($_POST['newsletter'])) {
       $name = mysqli_escape_string($con,$_POST['name']);
       $email = mysqli_escape_string($con,$_POST['email']);
       $special = '+-_@;&$%!^*';
       $name_s = trim($name, $special);
       $email_s = trim($email, "+-_;&$%!^*");
       if (empty($name_s)) {
         echo "
             <script>
               var msg = document.getElementById('error_news');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter name';
               window.location = 'index.php#error_news_show';
             </script>
         ";
       }
       elseif (empty($email_s)) {
         echo "
             <script>
               var msg = document.getElementById('error_news');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter email';
               window.location = 'index.php#error_news_show';
             </script>
         ";
       }
       elseif (strlen($name_s) < 6) {
         echo "
             <script>
               var msg = document.getElementById('error_news');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter name more than 6 char';
               window.location = 'index.php#error_news_show';
             </script>
         ";
       }
       elseif ( str_word_count($name_s) >= 2) {
         echo "
             <script>
               var msg = document.getElementById('error_news');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter only name ';
               window.location = 'index.php#error_news_show';
             </script>
         ";
       }
       else{
        $query = "select * from newsletter where email='$email_s'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0) {
          echo "
             <script>
               alert('Geat just wait our news');
               var msg = document.getElementById('error_news');
               msg.style.display = 'block';
               msg.innerHTML = 'You already subscribe';
               window.location = 'index.php#error_news_show';
             </script>
         ";
        }else{
      $sql_ins = "insert into newsletter(name,email) values('$name_s','$email_s')";
          $res_ins = mysqli_query($con, $sql_ins);
          if ($res_ins) {
            echo "
              <script>
              alert('Great to subscribe (:');
              window.location = 'index.php';
              </script>
            ";
          }else{
            echo "
              <script>
              alert('Oof something went wrong !!!')
              </script>
            ";
          }
        }

       }
     }
    ?>
    <?php include_once('footer.php');?>
