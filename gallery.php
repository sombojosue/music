<?php 
$con = mysqli_connect('localhost','josue','josue','blog');
$number = 4;
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
      <a href="#gallery" class="btn btn-danger text-uppercase text-center p-3 mt-2" style="margin-left: 44%;">Our gallery&nbsp;<i class="fas fa-angle-double-down text-white"></i></a>
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

    <section id="gallery" class="container-fluid">
      <div class="pt-3 pb-3" style="width: 84.5%;margin: auto;height:auto">
        <h2 class="display-4 text-center pt-2">GALLERY</h2>
        <hr class="" style="max-width:10%;height: 10px;">
      <div class="row">
         <?php
                $sql_e = "select * from gallery";
                $res_e = mysqli_query($con, $sql_e);
                while ($row_e = mysqli_fetch_array($res_e)){?>
        
                 <div class="col-md-3 col-sm-3 col-xs-3">
                 <div class="text-center pb-3 mb-3" style="border:1px solid lightgray;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background: #fff;height: 190px;">
                  <img src="<?php echo $row_e['gallery_img'];?>" class="" alt="Image banner" style="width: 100%;margin: auto;height: 190px;">
                 </div>
                </div> 
                
                <?php }?>
               </div>
      </div>
    </section>
    <!-- End of events -->
    <!-- Live show -->
    <section id="record" class="container-fluid bg-white">
      <div class="pt-3 pb-3" style="width: 84.5%;height: auto;margin: auto;">
        <h2 class="display-4 text-center pt-2 text-uppercase" style="font-size: 1.7rem;">Live concert</h2>
        <hr class="" style="max-width:10%;height: 10px;">
      <div class="row">
         <?php
                $sql_c = 'select * from concert';
                $res_c = mysqli_query($con, $sql_c);
                while ($row_c = mysqli_fetch_array($res_c)){?>
        
                 <div class="col-md-3 col-sm-3 col-xs-3">
                 <div class="text-center pb-3 mb-3" style="border:1px solid lightgray;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background: #fff;border-bottom:3px solid #060606;">
                  <img src="<?php echo $row_c['concert_img'];?>" class="" style="width: 100%;margin: auto;height: 160px;" alt="Image concert">
                   <h5 class="pt-2"><?php echo $row_c['concert_name'];?></h5>
                   <p><?php echo $row_c['concert_date'];?></p>
                   <p><?php echo $row_c['concert_place'];?></p>
                 </div>
                </div> 
                
                <?php }?>
               </div>
                 <div class="row">
                  <div class="col-12 ">
                    <div class="pt-4" style="margin-left:40%;">
                    <a href="" class="text-center text-dark p-1" style="font-size: 21px;border:1px solid lightgray;"><img src="img/event.png" width="30" alt="Image concert">&nbsp;SHOW ALL CONCERT</a>
                 </div>
                  </div>
                </div>
      </div>
    </section>
    <!-- End of show -->
    <?php include_once('footer.php');?>
