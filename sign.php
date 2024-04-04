
<!DOCTYPE html>

<html >
<head>
  <meta  charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400:700&display=swap" rel="stylesheet">
  <title>Store Management system</title>
  <script>function openPopup(){
    let popup = document.getElementById("popup");
    popup.classList.add('open-popup');
  }
  function closePopup(){
    let popup = document.getElementById("popup");
    popup.classList.remove('open-popup');
  }
  </script>
</head>
<body>

<?php
$conn=mysqli_connect('localhost','root','','suq') or die("connection failed:".mysqli_connect_error() );

 if(isset($_POST['submit'])){
  
  $name=$_POST['firstName'];
  $lname=$_POST['lastName'];
  $email=$_POST['email'];
  $tel=$_POST['tel'];
  $password=$_POST['pass'];
  $tab=$_POST['mytabs'];
 $s=array();
 
 $sql2="INSERT INTO buyer(fname , lname , tel , pass, email, type) VALUES ('$name','$lname','$tel','$password','$email','Buyer')";
 $error= array();
 $count=0;
  $src=mysqli_query($conn,"select * from buyer where email='$email' OR tel='$tel'") or die('login problem');
  $count = mysqli_num_rows($src);
  if($tab=="on"){
    $occ=$_POST['occupation'];
  $cmp=$_POST['company'];
  $add=$_POST['address'];
  $sql="INSERT INTO buyer(fname , lname , tel , pass, email, type, occupation,address ,company) VALUES ('$name','$lname','$tel','$password','$email','Seller','$occ','$add','$cmp')";
  if($count>0){
    array_push($error,"Email or Phone is already Registered!");
    foreach ($error as $cr){
      echo'<style>.header{
        visibilty:visible;
     }</style>';
      echo"<html><div class='header'><h2 style='color:green'>$cr</h2></div></html>";

    $count=0;
    }
      }
  else{
 
    $qry = mysqli_query($conn , $sql) or die("i");
    if($qry){
      echo"<html><div class='header'><h2 style='color:green'>Registered Successfully!</h2></div></html>";
      echo"<script>location.href='login.php'</script>";
    
      
    }
    }
  }
  else{
    if($count>0){
      array_push($error,"Email or Phone is already Registered!");
      foreach ($error as $cr){
        echo'<style>.header{
          visibilty:visible;
       }</style>';
        echo"<html><div class='header'><h2 style='color:green'>$cr</h2></div></html>";
  
      $count=0;
      }
        }
    else{
      $qry = mysqli_query($conn , $sql2) or die("i");
      if($qry){
        echo"<html><div class='header'><span><h2 style='color:green'>Registered Successfully!</h2><div class='bt'><a href='login.php'>login</a></div ><span></div></html>";
      
        
      }
      }
  }
  
 }
 ini_set('display_warning','Off');
 error_reporting(0);
?>
 
<style type="text/css">
      @charset "ISO-8859-1";
      body{
  background-image: url("tc.jpg");
  background-size: cover;
  font-family: 'Roboto', sans-serif;
}
.bt{
  padding:10px;
  border-radius: 20px;
  background-color: lightgray;
  justify-content: center;
}
.header {
    opacity: 50%;
     z-index: 2;
    position: sticky;
    top:0px;
    display: flex;
    align-items:center;
    text-decoration: none;
    justify-content: space-between;
    background-color: lightgray;
        padding: 30px 70px;
}
.header span{
  opacity: 100%;
}
.header a{
  opacity: 100%;
  text-align: center;
  color:black;
  font-size: 16px;
  text-decoration: none;
  background: transparent;
  border-radius: 3px;
}
.bt:hover {
  
  width:50px;
}
.header a:hover{
  width:150%;
}
.mytabs{
  display: flex;
  flex-wrap: wrap;
  max-width: 600px;
  margin: 50px auto;
  padding: 25px;
}
.mytabs input[type="radio"]{
  display: none;
}
.mytabs label{
  padding: 25px;
  background: lightgray;
  font-weight: bold;
}
.mytabs .tab{
 
  width: 100%;
  padding: 20px;
  background:transparent;
  backdrop-filter: blur(8px );
  border :1px solid lightgray;
   order: 1;
   display: none;}

.mytabs .tab h2{
  font-size: 3em;
}
.mytabs input[type='radio']:checked + label + .tab{
  display: block;
}
.mytabs input[type='radio']:checked + label{
  background: #fff
}
.inputText{
        height: 40px;
        width:95%;
        background-color: lightgray;
        margin-top:10px ;
        margin-bottom: 10px;
       
        border: none;
        outline: none;
        border-radius: 30px;
        padding: 0 0 0 20px;
       opacity: 90%;
       color:black;
       }
       .submitButton{
        height: 40px;
        width:100%;
        margin-bottom: 10px;
        border: none;
        outline: none;
        border-radius: 30px;
        background-color: black;
        color: aliceblue;
       }
       .submitButton:hover{
        color:black;
        background-color: #fff;
       }
      #span-el{
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        font-weight: 300;
        
      }
      .btn{
        padding:10px 60px;
        background-color: #c6e3e1;
        border:0;
        outline: none;
        cursor:pointer;
        font-size: 22px;
        font-weight: 500;
        border-radius: 30px;
      }
      .popup{
        width: 400px;
        background-color: blue;
        border-radius: 6px;
        position: absolute;
        top :0%;
        left: 50%;
        transform: translate(-50%,50%) scale(0.1);
        text-align: center;
        padding:0 30px 30px;
        color:beige;
        visibility: hidden;
        transition: transform 0.4s, top 0.4s;

      }
      .open-popup{

        visibility: visible;
        top:50%;
        transform: translate(-50%,50%) scale(1);

      }

</style>

       
         

        <form action="" method="POST">
        <div class="mytabs">
    <input type="radio" id="tabstore" name="mytabs" checked="checked">
    <label for="tabstore">Seller Account</label>
    <div class="tab">
        <h1>Seller Account</h1>
        <h4> Sign Up</h4>
                    <input type="text" class="inputText" name="firstName" placeholder="First Name" required> 
                    <input type="text" class="inputText" name="lastName" placeholder="Last Name" required> 
                    <input type="Email" class="inputText" placeholder="Email " name="email" required>
                    <input type="tel" class="inputText" name="tel" placeholder="Phone number" required>
                    <input type="password" class="inputText" name="pass" placeholder="Enter Password" required>
                    <input type="password" class="inputText" placeholder="Re-Enter Password" required>
                    <span id="span-el">About Your products</span>
                    <input type="text" class="inputText" name="occupation" placeholder="occupation" required>
                    <input type="text" class="inputText" name="company" placeholder="company" required>
                    <input type="text" class="inputText" name="address" placeholder="Address" required>
                    <input type="submit" class="submitButton" value="submit" name="submit" >
                   
                    <i class="fa-solid fa-user"></i><br>
                     <i class="fa-solid fa-user"></i><br>
                  
                    </form><br>
                    <h4>Already have Account?<span><a href="login.php">Sign in</a></span></h4>
                    
    </div>
    
    <input type="radio" id="tabaccount" name="mytabs">
    <label for="tabaccount">Buyer Account  </label>
    <div class="tab">
    <h1>Buyer Account</h1>
        <h4> Sign Up</h4>
        <form action="" method="POST">
        <input type="radio" id="tabaccount" name="mytabs">
                    <input type="text" class="inputText" name="firstName" placeholder="First Name" required> 
                    <input type="text" class="inputText" name="lastName" placeholder="Last Name" required> 
                    <input type="Email" class="inputText" placeholder="Email " name="email" required>
                    <input type="tel" class="inputText" name="tel" placeholder="Phone number" required>
                    <input type="password" class="inputText" name="pass" placeholder="Enter Password" required>
                    <input type="password" class="inputText" placeholder="Re-Enter Password" required>
          
                    <input type="submit" class="submitButton" value="submit" name="submit" >
                    <i class="fa-solid fa-user"></i><br>
                     <i class="fa-solid fa-user"></i><br>
            </form>
            <h4>Already have Account?<span><a href="login.php">Sign in</a></span></h4>
    </div>
    <div class="container">
             </div>
    
      </div>
       </div>
      
       <script src="script.js" ></script>
</body>
</html>