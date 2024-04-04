<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body >

    <style>
    body{
        
        background-image: url("burkin.jpg");
    }
       *{
        
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style-type: none;
        text-decoration: none;
        font-family:'Poppins',sans-serif;
       }        
       .sidebar-brand{
        height: 90px;
        text-align: center;
        font-size: 60px;
        color: white;
      
       }
       .sidebar{
        backdrop-filter: blur(12px );
         width:345px;
         position: fixed;
         left:0;
         top:116px;
         height: 100%;
         background: transparent;

       }
       #goods{
        margin-left: 345px;
        position: relative;
        top:117px;
        
       }
       .sidebar-menu li{
        width: 100%;
        border : 2px solid gray;
        border-radius: 30px;
        background:transparent;
        
        color: white;
      
        margin-bottom: 20px;
       }
       .sidebar-menu a{
        text-align: center;
        display: block;
        color:white;
        font-size: 30px;
       }
       .sidebar-menu li a.active{
        
        padding: 10px 10px;
       }
       .sidebar-menu li :hover,.sidebar-menu li a:hover{
        border-radius: 30px;
        color:black;
        background-color: white;
       }
       .sidebar-menu li :focus,.sidebar-menu li a:focus{
        width: 100%;
        border-radius: 30px;
        color:black;
        background-color: white;
       }
       .search{
       
        margin-left: 360px;
    width:100%;
    max-width:700px;
    background: rgba(255,255,255,0.2);
    border: 2px solid gray;
    display : flex;
    align-items: center;
    border-radius: 60px;
    padding: 10px 20px;
}   
.search input {
    
    background: transparent ;
    flex: 1;
    border:0;
    outline: none;
    font-size: 20px;
    color: #116A7B;
}
::placeholder{
    color:lightgray;
    
}
.head{
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    padding: 25px;
    width: 100%;
    background: transparent;
    display: flex;
    justify-content: space-between;
    backdrop-filter: blur(12px );
}
.head h3{
    font-size: 35px;
    
}
.head img{
    width: 100px;
    height: 50%;
}
.search button{
    border :0;
    border-radius: 50%;
    width:30px;
    height:30px;
    border: 1px solid gray;
    background: transparent;
    cursor: pointer;
}

    </style>
    
        <div class="sidebar">
            <div class="sidebar-brand"></div>
            <div class="sidebar-menu">
               <ul>
                <li>  <a href="#" class="active" >Dashboard</a></li>
                <li>  <a href="#" class="active">Account</a></li>
                <li>  <a href="#" class="active">Cart</a></li>
                <li>  <a href="#" class="active">History</a></li>
                <li>  <a href="store.php" class="active">Profile</a></li>
                <li>  <a href="logout.php" class="active">Logout</a></li>
               </ul>
              
            </div>
            </div>

        </div>
        <div class="head">
        <img src="tc.jpg"><h3>suq</h3>
        <form action="" method="get" class="search">
        <input type="text" placeholder="search anything" name="q" > <button type="submit"></button></form>
        </div>
      
       
    </body>


</html>