
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood4All</title>
    <link rel="stylesheet" href="css\Welcome.css">
</head>
<body>
  <?php
//     include 'common\nav.php';
//     include 'common\dbconnect.php';
//     if (isset($_GET['s'])&& $_GET['s']==False){
//       echo '<span class="msgf">Registration failed</span>';
//    }
//     if(isset($_GET['s'])&& $_GET['s']==True){
//       echo' <span class="msgt" id="msgt">Thank you for registering as a donar<button onclick=del()>X</button></span> ';
//    }
//    if (isset($_GET['u'])&& $_GET['u']==False){
//     echo' <span class="msgf">Updation failed</span>';
//  }
//   if(isset($_GET['u'])&& $_GET['u']==True){
//     echo' <span class="msgt" id="msgt">Updated<button onclick=del()>X</button></span> ';
//  }
  ?>
 <div class="container-home">
   
      <div class="content">
          <h4>Donate Blood Save life!</h4>
          <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit."</p>
          <?php
            // session_start();
            // $u=$_SESSION['user'];
            // $sql="SELECT * FROM `users` WHERE `email`='$u'";
            // $res=mysqli_query($conn,$sql);
            // $row=mysqli_fetch_assoc($res);
            // if($row['donar']=='0'){
            //   echo' <button type="submit" class="btn"><a href="reg-donar.php">Join Now</a></button>';
            // }
            // else{
            //   echo '<button type="submit" class="btn"><a href="update-donar.php">Update details</a></button>';
            // }
          ?>
      </div>
      <div class="wall">
        <img src="images\6262.jpg" alt="" srcset="">
      </div>

 </div>
  <div class="container">
      <h2 class="section-head"> Why Blood Donation</h2>
      <div class="border"></div>
      <div class="section-img">
      <img src="images\1023.jpg" alt="">
      </div>
       <div class="section-content">
         <p>
           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis maxime expedita dolorem ex sit modi sed atque minima iste laboriosam qui nihil impedit, voluptatem pariatur animi placeat minus laudantium repellat dolorum perferendis quisquam delectus consectetur. Nihil, quod minima. Porro, explicabo.
         </p>
       </div>
  </div>
<script>
  function del() {
    let x= document.getElementById('msgt');
    x.style.display='none';
  }
//</script>
//</body>
//</html>
