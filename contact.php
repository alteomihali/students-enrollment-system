<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html>
<title>Contact Us</title>
<meta charset="UTF-8">
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}


#contact{
  text-align: center;
}
.h3Contact{
  font-family: "Lato", sans-serif;
  display: block;
  margin-block-start: 1em;
  margin-block-end: 1em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
  font-weight: 400;
  margin: 10px 0;
  font-size: 24px;
}
.pText{
  font-size: 15px;
}
.divKryesore{
  padding-top: 64px!important;
    padding-bottom: 64px!important;
    padding: 0.01em 16px;
    max-width: 980px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.div1{
  padding-top: 32px!important;
    padding-bottom: 32px!important;
        margin-top: 16px!important;
    margin-bottom: 16px!important;
        display: block;

}
.div2{
  width: 33.33333%;
      padding: 0.01em 16px;
          float: left;
          display: block;
}

.div3{
  display: block;
  width: 57.66666%;    
  margin-top: 16px;
    margin-bottom: 16px;
    padding: 0.01em 16px;
        float: left;
        box-sizing: inherit;
}
.div4{
      font-family: "Lato", sans-serif;
          margin-bottom: 16px!important;
          font-size: 18px!important;
          box-sizing: inherit;
          display: block;
          line-height: 1.8;
}
.note{
          font-family: "Lato", sans-serif;
}
.form{
      margin: 0 -16px 8px -16px;
      padding: 0 8px;
      display: block;
      font-family: "Lato", sans-serif;
}
.form1{
 position: absolute;
 width: 220px;
 left: 550px;
 top: 440px;
 display: block;
 font-family: "Lato", sans-serif;
 font-size: 15px;
}
.inp1{
  border: 1px solid #ccc;
  padding: 8px;
  display: block;
  width: 100%;
  overflow: visible;
  -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    cursor: text;
    text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: start;
  -webkit-writing-mode: horizontal-tb !important;
}
  .form2{
    position: absolute;
    width: 220px;
 left: 800px;
 top: 440px;
 display: block;
 font-family: "Lato", sans-serif;
 font-size: 15px;
  }
  .inp2{
    border: 1px solid #ccc;
    padding: 8px;
    display: block;
    width: 100%;
    overflow: visible;
    -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    cursor: text;
    text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: start;
    -webkit-writing-mode: horizontal-tb !important;
  }
  .inp3{
    border: 1px solid #ccc!important;
    padding: 8px;
    display: block;
    width: 100%;
    overflow: visible;
    font: inherit;
    margin: 0;
        -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    cursor: text;
        text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: start;
    -webkit-writing-mode: horizontal-tb !important;
    width: 466px;
    height: 27px;
    left: 550px;
    top: 492px;
    position: absolute;
  }
  .btn{
    color: #fff!important;
    background-color: #000!important;
    position: absolute;
    top: 495px;
    left: 1044px;
    width: 151px;
    height: 41px;
  }
  .fot1{
    color: #fff!important;
    background-color: #000!important;
    padding-top: 64px!important;
    padding-bottom: 64px!important;
    text-align: center!important;
    opacity: 0.60;
    display: block;
    font-family: "Lato", sans-serif;
    font-size: 15px;
  }
  .div5{
    margin-top: 16px!important;
    margin-bottom: 16px!important;
    font-size: 24px!important;
    box-sizing: inherit;
    display: block;
    color: #fff!important;
    text-align: center!important;
    font-family: "Lato", sans-serif;
  }
  .fot1{
    top: 557px;
    position: absolute;
    width: 100%;
    opacity: 0.8;
  }
  #i1:hover{
     color: #eee;
  }
  
</style>
<body>
<!-- Contact Section -->
 
 <div>
<div class="divKryesore">
<div id="contact">
  <h3 class="h3Contact">Contact</h3>
  <p class="pText"><em>Feel free to contact our company!</em></p>
</div>
  <div class="div1">
    <div class="div2">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.6905255021306!2d19.813022314924712!3d41.315595608406376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135030fc50ed8b0b%3A0xd7b1948d18640027!2sKreatx%20head%20Offices!5e0!3m2!1sen!2s!4v1567608567228!5m2!1sen!2s" width="251" height="269" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="div3">
      <div class="div4">
        <i class="fa fa-map-marker" id="icon1"></i> Tirane, Albania.<br>
        <i class="fa fa-phone " id="icon2"></i> Phone: 00355 67 20 38 081<br>
 <!--       <i class="fa fa-envelope " id="icon3"></i> Email: info@kreatx.com<br> -->

      </div><br>
      <p class="note"><em> You can send a message to your colleagues by filling out this form:</em></p>
      <form action="action_page.php" method ="POST">
        <div class="form" style="margin:0 -16px 8px -16px">
          <div class="form1">
            <input class="inp1" type="email" placeholder="Your Email" required name="youremail">
          </div>
          <div class="form2">
            <input class="inp2" type="email" placeholder="Email To" required name="emailto">
          </div>
        </div>
        <input class="inp3" type="text" placeholder="Message" required name="message">
        <button class="btn" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
		
      </form>
    </div>
  </div>
</div>

  
<footer class="fot1">
 </footer>
     </div>
</body>
</html>
