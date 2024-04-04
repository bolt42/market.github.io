
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    </head>
    <body>
      <style>*{   
    margin:0px;
    
    padding:0px;
    box-sizing:border-box;
    font-weight: 700;
    
    
}


body{
    font-family: 'Roboto', sans-serif;
    width:100%;
}
a{
    text-decoration: none;
}
#header {
    background:transparent;
    backdrop-filter: blur(12px );
    z-index: 2;
    position: sticky;
    width: 100%;
    top:0px;
    display: flex;
    align-items:center;
    text-decoration: none;
    justify-content: space-between;
  
        padding: 30px 70px;
}

#menubar{
    display :flex;
    align-items: center;
    justify-content: center;
}
#menubar li{
    list-style: none;
    padding:0px 20px;
    font-size: 20px;
    position: relative;
 

    
}
#menubar li a{
    color:black;
    text-decoration: none;
    font-weight:800;
    display: inline-block;
    transition:0.3 ease;
}
#menubar li a:hover , 
#menubar li a.active{
    color:#ac9e5f;
   
}
#menubar li a:hover::after,
#menubar li a.active::after{
    content:"";
    width:30%;
    height:2px;
    background:rgb(6, 11, 9);
    left:20px;
    bottom:-4px;
    position: absolute;
}

h1{
    font-size: 205px;}
h2{
    font-size: 50px ;
}
.section{
    margin:20px 40px;
    padding: 40px  ;
    color:black; 
}
.signlog{
    align-items: center;
    cursor: pointer;
    display: flex;
    justify-content: space-evenly ;
    padding: 10px ;
    height: 40px;
    border: 2px solid black;
    min-width: 250px;
    background: transparent;
    backdrop-filter: blur(8px );
    border-radius: 20px;

}
.signlog button{
    z-index: 1;
    background-color: transparent;
    border-radius: 20px;
    width: 150%;
    height: 35px;
    border:none;

}
.signlog button:hover{
    background-color:#E3FDFD;
}
h2{
    margin-left: 10px;
    margin-right: 10px;
}
span{
    margin-right:10px;
}

.search{
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

.search button{
    border :0;
    border-radius: 50%;
    width:30px;
    height:30px;
    border: 1px solid gray;
    background: transparent;
    cursor: pointer;
}</style>
        <section id="header">
            <img src="" alt="">
            
             <div>
                <ul id="menubar">          
   
                </ul>
            </div>

        </section>

    
    </body>
</html>