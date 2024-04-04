<?php
 session_start();
 $conn=mysqli_connect('localhost','root','','suq') or die("connection failed:".mysqli_connect_error() );
 if(isset($_SESSION['id'])){
 
  echo"<script>location.href='Dashboard.php'</script>";
  
 }
 else{
 if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $pass= $_POST['pwd'];
   $result=mysqli_query($conn,"SELECT * FROM buyer WHERE email= '$name' && pass= '$pass'");
  $row=mysqli_fetch_assoc($result);  
  
       if(mysqli_num_rows($result) > 0){
           $_SESSION['id']=$row['id'];
           echo $_SESSION['id'];
           header("Location: Dashboard.php");
       }
       else{
      
        echo"<script>alert('Session Expire or incorrect credential')</script>";
           echo"<script>location.href='login.php'</script>";
       
       }
     }
  else {
    echo"<script>alert('Session Expire or incorrect credential')</script>";
    echo"<script>location.href='login.php'</script>";


  }}


?>