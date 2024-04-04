<?php

require 'session.php';
$conn=mysqli_connect('localhost','root','','suq') or die("connection failed:".mysqli_connect_error() );
require 'pagehead.php';
echo"<script>";
echo 'var mysec= document.getElementById("menubar");';
echo "mysec.innerHTML='".'<form action="" method="get" class="search"><input type="text" placeholder="search anything" name="q" > <button type="submit"></button></form><li><a href="Dashboard.php" checked>Home</a></li><li><a href="store.php">Store</a></li><li><a href="#footer">About</a></li><li><a href="Account.php">Account</a></li><li><a href="logout.php">Logout</a></li>'."';";
echo '</script>';
?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <style src="https://kit.fontawesome.com/8533c914422.js" crossorigin="anonymous"></style>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <title> Login </title>
    </head>
 <body>

    <style type="text/css">

        body{
            background-image: url("c.jpg");
            color: black;
            background-size: cover;
            background-repeat: no-repeat;
          
        }
        .content{
            background-position: center;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        p{
            position: relative;
            color: black;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            left:5px;
        }
        .top-header{
          font-size: 30px;
          margin-bottom: 20px;
                }
        .form-box{
            align-items: center;
            display: flex;
            position: relative;
            padding: 80px;
            width:100%;
            margin:30px;
            
            justify-content: center;
            border: 2px solid white; 
            border-radius: 20px;
            backdrop-filter: blur(3px );
        }
        .form-value{
            width: 100%;
            display: flex;
                    flex-direction: column;
        }
        .bottom-link{
            text-align: center;
        }
        ::placeholder{
            color:gray;
        }
       .inputText{
        
        height: 40px;
        width:100%;
        margin-bottom:10px ;
        border: 1px solid gray;
        background-color: lightgray;
        outline: none;
        border-radius: 30px;
        padding: 0 0 0 20px;
       opacity: 90%;
       color:black;
       }
       #submitButton{
        height: 40px;
        width:100%;
        margin-bottom: 10px;
        border: none;
        outline: none;
        border-radius: 30px;
        background-color: black;
        color: aliceblue;
       }
       a{
        color:blueviolet;
       }
       .form-value  label , p{
        position: relative;
            color: black;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            left:20px;

       }
     #fp{
       margin-left: 120px;
     }
    
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
.pro{
    padding:10px 20px;
    width:100%;
    height:75%;
    min-height: 25%;
    min-width: 12.5%;
    border:2px solid gray;
    cursor:pointer;
    border-radius: 20px;
    margin: 10px 10px;
    background: transparent;
    
  
}
table{
    width:100%;
}

    </style>
      <div class="content">
         <div class="form-box">
            <div class="form-value">
                    <div class="top-header">Accounts</div>
                <?php                  
                 $result=mysqli_query($conn,"SELECT * FROM buyer WHERE id = $id");
                 $result2=mysqli_query($conn,"SELECT * FROM goods WHERE producer = $id");
                 $result3=mysqli_query($conn,"SELECT * FROM history WHERE sname = $id");
                 while($row= mysqli_fetch_assoc($result)){
                    $name=$row['fname'];
                    $fname=$row['lname'];
                    $tel=$row['tel'];
                    $occ=$row['occupation'];
                    $add=$row['address'];
                    $com=$row['company'];
                echo'<div class="innerContent"><h2>Profile</h2></div>';
                echo'<div class="pro">';
                echo'<div class="pro-detail">';
                echo"<h4>Name :$name</h4>";
                echo"<h4>Last Name :$fname</h4>";
                echo"<h4>Telphone : $tel</h4>";
                echo"<h4>Occupation : $occ</h4>";
                echo"<h4>Address : $add</h4>";
                echo"<h4>Company : $com</h4>";
              
                 }
             
            echo'</div>';
            echo'</div>';
                echo' <div class="innerContent"><h2>History</h2></div>';
                echo'<div class="pro">';
                echo'<table border="2" cellpadding="5" bordercolor="black" margin-bottom="10">';
                echo"<tr><th>Product name</th>  <th>Buyer name</th>   <th>Date</th> <th>Detail</th></tr> "; 
                while($row= mysqli_fetch_assoc($result3)){
                    $pid=$row['pname'];
                    $bid=$row['bname'];
                    $date=$row['date'];
                    $detail=$row['detail'];
                    $pname=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM goods WHERE pid = $pid"));
                    $p=$pname['pname'] ;
                    $bname=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM buyer WHERE id = $bid"));
                    $b=$bname['fname'];
                    echo"<tr><td> <span>  $p </span></td><td> <span> $b </span></td> <td> <span> $date </span></td> <td><span> $detail </span></td></tr> </br>"; 
                }
                echo"</table>";
                echo'</div>';
            
         
                
      
        echo'<div class="pro">';
                echo '<div class="innerContent"><h2>Products</h2></div>';
                while($row= mysqli_fetch_assoc($result2)){
                    $r=$row['pname'];
                    $p=$row['prize'];
                    $img=$row['image'];
                    echo'<div class="pro">';
                                echo'<div class="pro-detail">';
                                echo'<img class="image" src="'.$img.'"/>';
                                echo'<h2>'.$r.'</h2>';
                                echo"<h4>$p</h4>";
                                echo'<i class="fal fa-shopping-cart"></i>';
                            echo'</div>';
                            echo'</div>';
                 }
                 echo '<a href="add.php">add</a></br>';
                 echo '<a href="delete.php">delete</a>';
                 echo'</div>';
                ?>
              </div>
        </div>
      </div>
      </body>
</html>