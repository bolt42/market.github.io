<?php
require 'session.php';
$conn=mysqli_connect('localhost','root','','suq') or die("connection failed:".mysqli_connect_error() );
require 'pagehead.php';
echo"<script>";
echo 'var mysec= document.getElementById("menubar");';
echo "mysec.innerHTML='".'<form action="" method="get" class="search"><input type="text" placeholder="search anything" name="q" > <button type="submit"></button></form><li><a href="Dashboard.php" checked>Home</a></li><li><a href="store.php">Store</a></li><li><a href="#footer">About</a></li><li><a href="Account.php">Account</a></li><li><a href="cart.php">cart</a></li><li><a href="logout.php">Logout</a></li>'."';";
echo '</script>';
$p=$_POST['submit'];
echo$p;
$conn=mysqli_connect('localhost','root','','suq') or die("connection failed:".mysqli_connect_error() );
 $result=mysqli_query($conn,"SELECT * FROM goods WHERE pid = $p ") or die("no");
     echo'<form action="buy.php" method="get">';
     while($row= mysqli_fetch_assoc($result)){
        $r=$row['pname'];
        $p=$row['prize'];
        $d=$row['detail'];
        $img=$row['image'];
      
        echo'<div class="pro" type="submit" name="submit" >';
                    echo'<div class="pro-detail">';
                    echo'<img class="image" style ="width:500px; height:500px;"src="'.$img.'"/>';
                    echo'<h2>'.$d.'</h2>';
                    echo'<h2>'.$r.'</h2>';
                    echo"<h4>$p</h4>";
                    echo'<i class="fal fa-shopping-cart"></i>';
                echo'</div>';
                echo'</div>';
       echo '<button name ="buy" >Buy</button>';
                
     }
?>