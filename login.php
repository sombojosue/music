<?php
//Database connectivity in mysql 
$con = mysqli_connect('localhost','josue','josue','blog');?> 
<?php include_once('header.php');?> 
  <main id="login">
    <div id="image_background" class="">
     
    </div>
    <section id="login_section">
      <div class="w-75" id="form_detail">
      <div class="form-group " id="paddingtop">
        <div style="font-family: 'Open Sans', sans-serif;position: absolute;bottom: 250px;left: 0;">
          <h2 class="text-white text-center ml-5" style="font-size: 2.8rem;margin-left: 20%;margin-top: 5%;">&nbsp;THE SOUL OF MUSIC</h2>
          <h3 class="text-danger text-center" style="margin-left: 0%;margin-top: 0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______  <strong class="text-white">OFFICIAL &nbsp;&nbsp;JAZZ&nbsp;&nbsp; WEBSITE</strong> ________</h3>
        </div>
        <div style="font-family: 'Open Sans', sans-serif;position: absolute;bottom: 0px;left: 0px;" class="w-25">
        <img src="img/music.png" width="40" height="56" alt="logo" style="float: left;margin-right: 3.5px;margin-left: 6px;"><h2  class="text-white" style="font-size: 1.4rem;">Jazz &nbsp;Admin <br><span style="opacity: .7">welcome to music Jazz</span></h2>
        </div>
        <h2>Sign In</h2>
        <hr>
        <p class="text-danger mt-4 mb-3" id="error" style="width:100%;margin-left:-4px;"></p>
        <form method="post">
          <input type="email" name="email" class="form-control mb-2" placeholder="Email">
          <input type="password" name="password" class="form-control mb-2" placeholder="Password">
          <input type="checkbox" name="keep" class=""><span style="position: relative;top: -2px;" class="text-justify">&nbsp;&nbsp;Remember username</span>
          <input type="submit" name="login" value="Login" class="btn btn-primary w-100">
        </form>
      </div>
      <?php
     if (isset($_POST['login'])) {
       $email = mysqli_escape_string($con,$_POST['email']);
       $password = mysqli_escape_string($con,$_POST['password']);
       $special = '--;';
       $pass_s = trim($password, $special);
       $email_s = trim($email, "+-_;&$%!^*");
       if (empty($email)) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter email';
             </script>
         ";
       }
       elseif (empty($password)) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter password';
             </script>
         ";
       }else{
             $query = "select * from user where email='$email' and password='$password'";
             $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) > 0) {
             while ($row = mysqli_fetch_array($result)){
              echo "
               <script>window.location = 'admin/header.php'</script> 
              ";
             }
            }else{
            echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Username or Password incorrect';
             </script>
         ";
        }
       }
    }
  ?> 
      </div>
    </section>
  </main>
  
