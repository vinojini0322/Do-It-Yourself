<?php

$file_name='../POICommentData'. '.json'; 

$data = file_get_contents($file_name);
$users = json_decode($data);

?>
<!DOCTYPE html>
<html>

<head>
  <title>Craftzy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../themes/Craftzy.min.css" />
  <link rel="stylesheet" href="../themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <link rel="stylesheet" href="../CSS.css">
  <link rel="stylesheet" href="../Rate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    function setColor(e, btn, color) {
        var target = e.target,
            count = +target.dataset.count;

        target.style.backgroundColor = count === 1 ? "red" : '#FFFFFF';
        target.dataset.count = count === 1 ? 0 : 1;
    }
</script>
  <style>
    table {
        margin: 0 auto;
        font-size: large;
        border: 1px solid black;
    }

    h1 {
        text-align: center;
        color: #006600;
        font-size: xx-large;
        font-family: 'Gill Sans',
        'Gill Sans MT', ' Calibri',
        'Trebuchet MS', 'sans-serif';
    }

    td {
        background-color: #E4F5D4;
        border: 1px solid black;
    }

    th,
    td {
        font-weight: bold;
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    td {
        font-weight: lighter;
    }

    .fa {
        font-size: 10px;
        cursor: pointer;
        user-select: none;
    }

    .fa-thumbs-up {
        color: blue;
    }

    .fa-thumbs-down {
        color: red;
    }

    .fa:hover {
        transform: scale(1.2);
    }


    .start-button {
        color: #eee;
        background-color: #4485F3;
        width: 250px;
        height: 84px;
        margin: 60px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 24px;
        box-shadow: 2px 2px #111;
    }

    form {
        width: 100%;

    .like-button {
        width: 250px;
        height: 84px;
        background-color: #eee;
        margin: 60px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 24px;
        box-shadow: 2px 2px #111;
    }

    
</style>
<script>
    function setColor(e, btn, color) {
        var target = e.target,
            count = +target.dataset.count;

        target.style.backgroundColor = count === 1 ? "red" : '#FFFFFF';
        target.dataset.count = count === 1 ? 0 : 1;
    }
</script>
</head>

<body>

  <!-- This is page 1-->
  <div id="Categories" data-role="page" data-position="fixed">
    <!-- Header -->
    <div data-role="header" role="banner" class="ui-header ui-bar-inherit">

      <div class="ui-grid-b">
        <div class="ui-block-a" style="width: 15%;">
          <div class="ui-bar ui-bar-a"><img src="../images/logo1.png"></div>
        </div>

        <div class="ui-block-b" style="width:73%; margin: auto;">
          <div class="ui-bar ui-bar-a">

            <form class="ui-filterable">
              <input type="search" name="search" id="search-basic" value="" />
          </div>
        </div>

        <div class="ui-block-c" style="width: 10%;  position: relative;"><a target="_self" href="Offers.html"
            class="ui-link"> <img src="../icons/icon-QRAR.png" width="42" height="42" style="padding-top:20%;"> </a>
        </div>
      </div>
    </div>



    <div style="padding-left:8px; padding-right:8px; padding-bottom: 58px; background-color: #551122; padding-top: 10px; margin-top:0;">
    <div class="ui-grid-b">
  <div class="ui-block-a" >
    <!-- <a target="_self" href="ViewItem.html" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-carat-l"></a> 
  -->
  
  <div class="back">
    <a target="_self" href="ViewItem.html"
                        class="ui-link">
    <img src="../icons/back.png" > 
  </a>
  </div>
  </div>
  <div class="ui-block-b">
    <h2>REVIEWS & RATINGS</h2>
  </div>
  </div>
     
    
      <div style="height:10px">
      </div>
      <!-- <p style="text-align:justify; font-size:20px;"> <B>User Rating</B></p> -->
      <div class="division">
      <div class='hr'>
                        <span class='hr-title'>
                            USER RATINGS
                        </span>
                    </div>
  </div>
      <div class="box-rating"
      style=" background-color: white; width:99%; height:min-content; border-color:white;">
      <center style="
    padding-top: 10px;">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
  </center>
      <div class="text-rating" ><b>4.1 average based on 254 reviews.</b></div>
      <hr style="border:3px solid #f1f1f1">

      <div class="row">
        <div class="side">
        <div>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
         </div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-5"></div>
          </div>
        </div>
        <div class="side">
          <div>  <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span></div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-4"></div>
          </div>
        </div>
       
        <div class="side">
          <div>  <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star "></span>
      <span class="fa fa-star"></span></div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-3"></div>
          </div>
        </div>
        
        <div class="side">
          <div>  <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star "></span>
      <span class="fa fa-star "></span>
      <span class="fa fa-star"></span></div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-2"></div>
          </div>
        </div>
       
        <div class="side">
          <div>  <span class="fa fa-star checked"></span>
      <span class="fa fa-star "></span>
      <span class="fa fa-star "></span>
      <span class="fa fa-star "></span>
      <span class="fa fa-star"></span></div>
        </div>
        <div class="middle">
          <div class="bar-container">
            <div class="bar-1"></div>
          </div>
        </div>
        
      </div>



      </div>
      </br>
 
    
<!-- <p style="text-align:justify; font-size:20px;"> <B>User Comments</B></p> -->
<div class="division">
<div class='hr'>
                        <span class='hr-title'>
                            USER COMMENTS
                        </span>
                    </div>
  </div>
    <?php 
    
    foreach ($users as $user) { ?>
   
<div style="background-color: white;    width: 88%;
    margin-left: auto;
    margin-right: auto; border-radius: 10px;    padding-top: 10px;" >
<div class="ui-grid-b" >
  <div class="ui-block-a">
  <!-- <a class="ui-btn ui-shadow ui-corner-all ui-icon-user ui-btn-icon-notext" style="text-align: display: block;
  margin-left: auto;
  margin-right: auto;"></a>   -->
   <img src="../icons/profileIcon-feedback.jpg" class="feeadbackImageStyle"> 
<br/>  
<div class="feeadbackImageStyle">
<!--style="padding-left: 29px;padding-right:5px; background-color:white; padding-top: -78px; margin-top: -17px" -->
 <?= $user->Comment; ?>
    </div>
</div>
  
  <div class="ui-block-b">
    <div class="textStyle-Feedback">
    <?= $user->Name; ?> <br/> <?= $user->Stars; ?><span class="fa fa-star "></span>
    </div>
  </div>
  <div class="textStyle-Feedback">
  <div class="ui-block-c"><?= $user->Date; ?> 
    </div>
</div>

</div>
<br>
<div id="display" class="displayCooment-Feedback" > </div>


<div id="input_comment" class="input" style=" 
    margin-right: auto;
    margin-left: auto;padding-left: 8px;
    padding-right: 8px;">
      <input type="text" placeholder="Comment" id="add_comment" name="comment" required>
     

</div>

      
      
     <fieldset class="ui-grid-a" style="margin-right: auto;margin-left: auto;padding-left: 8px;
    padding-right: 8px;" >
       <div class="ui-block-a" style= " float:left;">
         <input class="btn-rating" id="submit" type="submit" name="submit" value="Reply" onclick="on_submit()" data-theme="a"> 
       </div>
      <div class="ui-block-b" style="float:right;">
    	    <input class="like"  type="button" id="button" value="LIKE" onclick="setColor(event, 'button', '#101010')" ; data-count="1" style="backgroud-color:red;"  data-theme="b" />
      </div>
    </fieldset>
    <hr/>
    </div>

    <script>
      function myFunction(x) {
        x.classList.toggle("fa-thumbs-down");
      }

      function on_submit() {
        //var titleInput  = document.getElementById("add_comment");
        //display.innerHTML = "Reply Comment " + titleInput + "<br/>";
        var x = document.getElementById("add_comment").value;
        document.getElementById("display").innerHTML = x;
        document.getElementById('add_comment').value = '';
      }
    </script>

    <?php } ?>
</div>


    <!-- Navigation -->
    <div data-role="footer" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li class="ui-block-a"><a target="_self" href="Home.html" data-icon="icons-home" data-theme="a"
              data-transition="slide">Home</a></li>
          <li class="ui-block-b"><a target="_self" href="Categories.html" data-icon="icons-category" data-theme="a"
              data-transition="slide">Category</a></li>
          <li class="ui-block-c"><a target="_self" href="MyCart.html" data-icon="icons-cart" data-theme="a"
              data-transition="slide">Cart</a></li>
          <li class="ui-block-d"><a target="_self" href="Game.html" data-icon="icons-game" data-theme="a"
              data-transition="slide">Game</a></li>
          <li class="ui-block-e"><a target="_self" href="MyProfile_Customer.html" data-icon="icons-profile"
              data-theme="a" data-transition="slide">Profile</a></li>

        </ul>
      </nav>
    </div>
    <!-- This is page 1-->
  </div>

  </div>



</body>

</html>