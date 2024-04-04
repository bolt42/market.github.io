<?php
require 'session.php';   
require 'responsive.php';
include 'pagehead.php';
include 'landing.php';
$p=$_SESSION['pid'];
$conn=mysqli_connect('localhost','root','','suq') or die("connection failed:".mysqli_connect_error() );
$result=mysqli_query($conn,"SELECT * FROM buyer WHERE id = '$id'" );
$row= mysqli_fetch_assoc($result);
$name=$row['fname'];
$lastname=$row['lname'];
echo"<script>";
echo 'var mysec= document.getElementById("menubar");';
echo "mysec.innerHTML='"."<h2>Welcome </h2><p><span>$name $lastname</span></p>".'<form action="search.php" method="post" class="search"><input type="text" placeholder="search anything" name="query" > <button type="submit" name="submit"></button></form><li><a href="Dashboard.php" checked>Home</a></li><li><a href="store.php">Store</a></li><li><a href="Dashboard.php #footer">About</a></li><li><a href="Account.php">Account</a></li><li><a href="logout.php">Logout</a></li>'."';";
echo '</script>';

?>
