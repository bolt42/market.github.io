<?php
$conn=mysqli_connect('localhost','root','','suq') or die("connection failed:".mysqli_connect_error() );
if(isset($_POST['submit'])&& isset($_FILES['photo'])){
  $loc="images/";
  $names= $_FILES['photo']['name'];
  $img_ex= pathinfo($names,PATHINFO_EXTENSION);
  $img_ex_lc= strtolower($img_ex);
  $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
  $img_upload_path = 'images/'.$new_img_name;
  copy($_FILES['photo']['tmp_name'],$img_upload_path);
  $prodname=$_POST['pname'];
  $q=$_POST['Quantity'];
  $p=$_POST['Prize'];
  $tp=$_POST['type'];
  $d=$_POST['text'];
  $iname=$img_upload_path;
  $sql2="INSERT INTO goods(pname , quantity , image ,type,detail, prize) VALUES ('$prodname','$q','$iname','$tp','$d','$p')";
  mysqli_query($conn,$sql2);
}

?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
    
        <style src="https://kit.fontawesome.com/8533c914422.js" crossorigin="anonymous"></style>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <title> Login </title>
    </head>
 <body>

    <style type="text/css">

        body{
            background-image: url("bagandshoe.jpg");
            color: black;
            background-size: cover;
            background-repeat: no-repeat;
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
            width:600px;
            height:450px;
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
     span{
        color:white;
     }
    </style>
  
         <div class="form-box">
            <div class="form-value">
                    <div class="top-header">Add product</div>
                  <form action="" method="POST" enctype="multipart/form-data" >
                  <span>Product Name:</span>
                    <input type="text" name="pname" class="inputText" placeholder="Product Name" required>
                    <br>
                   
                    <span>Quantity:</span>
                     <input type="text" name="Quantity" class="inputText"   required>
                     <br>
                     <span>Prize:</span>
                     <input type="text" name="Prize" class="inputText"   required>
                    <br>
        
                    <span>Choose the Type of Your Product:</span>
                    <select name="type" type="text" class="inputText" placeholder="choose">
                        <option>Electronics</option>
                        <option>clothes</option>
                        <option>home accesories</option>
                        <option>Art woks</option>
                        <option>other</option>
                        
                    </select>
                    <br>
                    <span>Detail:</span>
                    <textarea name="text" row="100" type="text" cols="50" placeholder="what kind of service you want " id="text-field" class="inputText"></textarea><br>
                <span>Prodcut Image:</span>
                     <input type="file" name="photo" class="inputText"  size="200" required>
                    <br> 
                    <input type="submit" id="submitButton" value="submit" name="submit" >
                    <br>
                    </form><br>
               
                <div class="bottom-link">
                <a href="Sign.php">Create Account</a>
                </div>
            </div>
        </div>
      </body>
</html>