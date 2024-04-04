<?php

 include 'pagehead.php'; 

 echo"<script>";
echo 'var mysec= document.getElementById("menubar");';
echo "mysec.innerHTML='".'<form action="" method="get" class="search"><input type="text" placeholder="search anything" name="q" > <button type="submit"></button></form><li><a href="Dashboard.php" checked>Home</a></li><li><a href="store.php">Store</a></li><li><a href="#footer">About</a></li><li><a href="Account.php">Account</a></li><li><a href="cart.php">cart</a></li><li><a href="logout.php">Logout</a></li>'."';";
echo '</script>';

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
            @charset "ISO-8859-1";
            #goods{
    text-align: center;
}
#goods .pro{
    padding:10px 20px;
    width:23%;
    height:75%;
    min-height: 25%;
    min-width: 12.5%;
    border:2px solid gray;
    cursor:pointer;
    border-radius: 20px;
    margin: 10px 10px;
    background-color: lightgray;
    
  
}
.image{
    width: 100%;
    height: 350px;
    min-height: 25%;
    object-fit: contain;
    object-position: center;
}
#goods .product-container{
    height: 700px;
   
    display: flex;
    justify-content: space-between;
    padding:20px 20px;
    flex-wrap: wrap;
    margin-top: 10px;

}

   </style>

         <section id="goods" class="section">
            <h2>Trending And Top Goods</h2>
            <p> Product Collection</p>
            <div class="product-container">
            <?php
     $conn=mysqli_connect('localhost','root','','suq') or die("connection failed:".mysqli_connect_error() );
     $result=mysqli_query($conn,"SELECT * FROM goods");
     
     while($row= mysqli_fetch_assoc($result)){
        $r=$row['pname'];
        $p=$row['prize'];
        $img=$row['image'];
        echo'<Button class="pro" onclick=view()>';
                    echo'<div class="pro-detail">';
                    echo'<img class="image" src="'.$img.'"/>';
                    echo'<h2>'.$r.'</h2>';
                    echo"<h4>$p</h4>";
                    echo'<i class="fal fa-shopping-cart"></i>';
                echo'</div>';
              
        echo"</Button>";
     }
?>
                </div>
       
              
        </section>
        
    </body>

</html>
