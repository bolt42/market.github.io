<?php
require 'pagehead.php';
require 'landing.php';
echo"<script>";
echo 'var mysec= document.getElementById("menubar");';
echo "mysec.innerHTML='".'<form action="" method="get" class="search"><input type="text" placeholder="search anything" name="q" > <button type="submit"></button></form><li><a href="index.php" checked>Home</a></li><li><a href="store.php">Store</a></li><li><a href="#footer">About</a></li><li><a href="login.php">Login</a></li>'."';";
echo '</script>';
?>
