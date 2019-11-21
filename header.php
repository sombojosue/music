<!-- Template design and coding by Josue lotshango sombo
     Banner Id B00361289
     college ISBC INDIA
     contact : +918861657097
     Email : lotshangojosue@gmail.com
-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->

    <link rel="stylesheet" href="css/query.css" crossorigin="anonymous">
    <link href="css/all.css" rel="stylesheet">

    <!-- Font family -->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 

    <title>The best Music ever</title>
    <!-- Favicon Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
    <style>
    /* Internal style sheet */
    body{
      background: #f4f4f4;
    }
     p{
      font-family: 'Open Sans', sans-serif;
     }
      .brand{
        margin-right: 15%;
      }
      #active{
        color:red;
      }
      nav ol li{
        font-size: 17px;
      }
      #banner{
        background: url('img/banner.jpg');
        background-size: cover;
        height: 450px;
        border-bottom: 1px solid lightgray;
        box-sizing: border-box;
        opacity: 0.8;
        box-shadow: 1px 15px 18px #f4f4f4;
      }
      #banner h2{
        padding-top: 4%;
        font-size: 3.6rem;
        opacity: 1;
      }
      .record{
        border-bottom: 1px solid lightgray;
      }
      section button{
        opacity: 1;
      }
      #service{
        height: 80px;
        background:#fff;
        border-bottom: 1px solid lightgray;
      }
      #service span{
        font-size: 1.3rem;
      }
      .event{
        border-top: 1px solid lightgray;
      }
      #event{
        height: auto;
        border-bottom: 1px solid lightgray;
      }
      #gallery{
        height: auto;
        border-bottom: 1px solid lightgray;
      }
      .event_home,#event_home {
        height: auto;
      }
      #event h2,#live h2,.event_home h2,#team h2,#aboutus h2,#gallery h2,#event_home h2,.record h2{
       font-size: 1.7rem;
      }
      #about{
        font-size: 1.7rem;
        font-family: 'Lobster', cursive;
      }
      #error,#error_send{
        display: none;
        border:1px solid red;
        color: #000;
        width: 75%;
        margin: auto;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0px 5px 8px red;
      }
      #error_news{
        display: none;
        border:1px solid red;
        color: #000;
        width: 100%;
        margin: auto;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0px 5px 8px red;
      }
      #team{
            height: 420px; 
            background: rgba(4,9,30,0.8);
            background-color: rgba(4, 9, 30, 0.8);
            background-image: none;
            background-repeat: repeat;
            background-attachment: scroll;
            background-clip: border-box;
            background-origin: padding-box;
            background-position-x: 0%;
            background-position-y: 0%;
            background-size: auto auto;
            border-bottom: 1px solid lightgray;
      }
      #show_book{
        display: none;
      }
      #show h2{
        font-size: 1.7rem;
      }
      #gallery img{
        transition: 1s;
        padding: 1px;
      }
      #gallery img:hover{
        filter: grayscale(60%);
        transform: scale(1.1);
      }
      #show img{
        transition: 1s;
        padding: 1px;
      }
      #show img:hover{
        filter: grayscale(60%);
        transform: scaleY(1.1);
      }
      #show{
        border-top:1px solid lightgray;
        background: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.9)), url('img/news.jpg');
        background-position: center;
        background-size: cover;
        background-size: 100%;
        background-repeat: no-repeat;
        height: auto;
        border-bottom: 1px solid lightgray;
        box-sizing: border-box;
        opacity: 0.8;
      }
      #video{
        width: 68%;
        height: 400px;
        margin-left: 15%;
        border:1px solid lightgray;
        border-radius: 5px;
        box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background: #fff; 
      }
      #blog{
        width: 68%;
        height: 400px;
        margin-left: 15%;
        border:1px solid lightgray;
        border-radius: 5px;
        background: #fff; 
      }
      #mission{
        height: 300px;
        background:#f4f4f4;
        border-top: 1px solid lightgray; 
        border-bottom: 1px solid lightgray;
      }
      #news{
            height: 400px; 
            background: rgba(4,9,30,0.8);
            background-color: rgba(4, 9, 30, 0.8);
            background-image: none;
            background-repeat: repeat;
            background-attachment: scroll;
            background-clip: border-box;
            background-origin: padding-box;
            background-position-x: 0%;
            background-position-y: 0%;
            background-size: auto auto;
            border-top: 1px solid lightgray;
            border-bottom: 1px solid lightgray;
      }
      #news_letter{
        margin-left: 6%;
        background: rgba(255,255,255,0.1);
        background-color: rgba(255, 255, 255, 0.1);
        background-image: none;
        background-repeat: repeat;
        background-attachment: scroll;
        background-clip: border-box;
        background-origin: padding-box;
        background-position-x: 0%;
        background-position-y: 0%;
        background-size: auto auto;
      }
      #news p{
        opacity: 0.6;
        font-size: 16px;
      }
      .mission_header{
        padding-top: 15%;
        padding-left: 40%;
      }
      .who{
        font-size: 26px;
        position: absolute;
        top: 52%;
        left: 25%;
        transform: rotate(-90deg)
      }
      .mission_text{
        padding-top: 15%;
        padding-left: 4%;
        padding-right: 4%;
        font-size: 1.1rem;
      }
      .news_form{
        margin-top: 10px;
        margin-bottom: 10px;
        height: 380px;
        background:transparent !important;
      }
      #aboutus{
        height: 460px;
        background:transparent !important;
      }
      #contact_img iframe{
      box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      height: 377px;
      }
      #contact_form{
        margin: auto;
      }
      #contact_form input, #contact_form textarea{
        margin: auto;
      }
      #contact_form input[type='submit']{
        margin-left: 12%;
      }
      #contact_form h3{
        margin-left: 12%;
      }
      .space{
        max-width: 100%;
        height: 30px;
      }
      #event_detail{
        height: 320px;
        background: #fff;
        border-bottom:1px solid lightgray;
      }
      .book{
        display: block;
      }
      .book h2{
        font-size: 30px;
        margin-left: -60px;
      }
      .gallery_img{
        height: 190px;
        border:1px solid lightgray;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      #contact{
        height: 380px;
        border-bottom:1px solid lightgray;
      }
      #image_background{
        width: 60%;
        height: 100vh;
        background: url('img/banner.jpg');
        background-size: cover;
        float: left;
        border-right: 1px solid lightgray;
        opacity: .8;
      }
      #login_section{
        width: 40%;
        height: 100vh;
        float: left;
        border-top:5px solid blue;
        border-bottom:5px solid blue;
      }
      #form_detail{
        margin: auto;
      }
      #paddingtop{
        margin-top: 50%;
      }
     @media (max-width: 500px){
	nav ul li{
         margin-bottom:12px;
        }
       #banner{
        background: url('img/banner.jpg');
        background-size: cover;
        height: 400px;
        border-bottom: 1px solid lightgray;
        box-sizing: border-box;
        opacity: 0.8;
        box-shadow: 1px 15px 18px #f4f4f4;
      }
      #banner h2{
        display:none;
        padding-top:70px;
        text-align:center;
        padding-top: 4%;
        font-size: 2rem;
        opacity: 1;
      }
      #banner h3{
        padding-top:200px;
        text-align:center;
        padding-top: 4%;
        font-size: 2rem;
        opacity: 1;
      }
      #banner a{
      position:absolute;
      left:-70px;
      }
      #service{
      display:none;
      }
     #show{
        border-top:1px solid lightgray;
        background: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.9)), url('img/news.jpg');
        background-position: center;
        background-size: cover;
        background-size: 100%;
        background-repeat: no-repeat;
        height: 600px;
        border-bottom: 1px solid lightgray;
        box-sizing: border-box;
        opacity: 0.8;
      }
    </style>
  </head>
  <body>
