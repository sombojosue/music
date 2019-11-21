   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-white brand text-uppercase pl-4" href="#">Jazz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php
                $con = mysqli_connect('localhost','josue','josue','blog');
                $sql_m = 'select * from menu';
                $res_m = mysqli_query($con, $sql_m);
                while ($row_m = mysqli_fetch_array($res_m)){?>
                <li class="nav-item mx-4"><a href="<?php echo $row_m['link'];?>" class="navbar-link text-white text-uppercase mb-sm-3"><?php echo $row_m['name'];?></a></li>
                <?php }?>
                
    </ul>
  </div>
</nav>
