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
            background-image: url("tc.jpg");
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
    </style>
  
         <div class="form-box">
            <div class="form-value">
                    <div class="top-header">login</div>
                  <form action="verify.php" method="POST">
                    <input type="text" name="name" class="inputText" placeholder="Enter Email or phone number" required>
                    <br>
                     <input type="password" name="pwd" class="inputText" placeholder="Enter Password" required>
                    <br>
                    <input type="submit" name="submit" id="submitButton" value="login">  
                          
                     <input type="checkbox"><label>Remember me</label>
                     <a href="#" id="fp">Fogot Password ?</a>
                    </form><br>
               
                <div class="bottom-link">
                <a href="Sign.php">Create Account</a>
                </div>
            </div>
        </div>
      </body>
</html>