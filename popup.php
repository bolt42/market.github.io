<html>
    <head></head>
    <body>
        <style type="text/css">
          
            .container{
                width:100%;
                height : 100vh;
                background:transparent;
                display: flex;
               align-items: center;
               justify-content: center;
            }
            .btn{
                padding: 10px 60px ;
                background-color: aliceblue;
                outline: none;
                cursor :pointer ;
                font-size:22px;
                font-weight:500;
                border-radius: 30px;
            }
            .popup{
                z-index: 5;
                width: 400px;
                background: wheat;
                border-radius: 6px;
                position: absolute;
                top: 0;
                left:50%;
                transform : translate(-50% , -50%) scale(0.1);
                text-align: center;
                padding: 0 30px 30px;
                color: aqua ; 
                transition: transform 0.4s, top 0.4s ;
                visibility: hidden;
            } 
            .open-popup{
                visibIlity:visible;
                top:50%;
               transform: translate(-50%, -50%) scale(1);   
            }
            .popup button{
                width:100%;
                margin-top: 50px;
                padding: 10px 0;
                background: brown;
                color:white;
                border:0;
                outline: none;
                font-size:18px;
                border-radius: 4px;
                cursor: pointer;
               box-shadow: 0 5px 5px rgba(0, 0, 0,  0.2);
                 
            }
        </style>

          
           <div class="popup" id="popup">
            <button type="button" onclick="closePopup()">ok</button>
             
           </div>
        <script>
            let popup= document.getElementById("popup");

            function openPopup(){
              popup.classList.add("open-popup");
            }
            function closePopup(){
              popup.classList.remove("open-popup");
            }
          
        </script>
    </body>
</html>