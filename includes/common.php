<?php
    $con = mysqli_connect("localhost", "root", "IpUv@7811", "ecommerce")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
