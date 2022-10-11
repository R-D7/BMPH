<?php

   $connection = mysqli_connect('localhost','root','','join_db');

   if(isset($_POST['send'])){
    $ingamename = $_POST['ingamename'];
    $email = $_POST['email'];
    $discordid = $_POST['discordid'];
    $date = $_POST['date'];

      $request = "insert into join_form(ingamename, email, discordid, date) values('$ingamename', '$email', '$discordid', '$date')";
      mysqli_query($connection, $request);

      header('location:join.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>