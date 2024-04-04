
<html>
<body>
<style>
@media (max-width:850px) {
    nav .links{
        height: 100vh;
        top: 0;
        left: 0;
        right: 0;
        background-color: #000;
        z-index: 999;
        position: fixed;
        display: none;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        transition: 1s linear;
    }
    nav .links li{
        font-size: 30px;
        margin: 30px;
    }
    nav .open,
    nav .links .close{
        display: block;
        position: absolute;
        right: 30px;
        top: 30px;
    }
}
@media (max-width:850px) {
    .about_me .content{
        flex-direction: column;
    }
}
@media (max-width:1100px) {
    .about_me .about_pic .info{
        flex-direction: column;
        margin: 5%;
    }
    .hobbies h1{
        font-size: 45px;
        margin: 30px 0;
    }
}
@media (max-width:850px) {
    .my_skills{
        flex-direction: column;
    }
    .skills h1{
        font-size: 40px;
    }
    .progress{
        margin-left: 0;
    }
}
@media (max-width:850px) {
    .my_education{
        flex-direction: column;
    }
    .education h1{
        font-size: 40px;
    }
    .degree{
        margin-top: 30px;
    }
    .degree_mark h3{
        font-size: 20px;
    }}
    </style>
    </body>
    </html>