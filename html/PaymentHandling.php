<!DOCTYPE html>
<html>
  <?php
    session_start();
  ?>
<head>
<title>Payment Handling</title>
<link rel="stylesheet" type="text/css" href="../CSS/PaymentHandling.css" >

</head>
<body>

<div class="header">
  <div style="padding-left: 20px;padding-top:20px;">
    <img class="logo" src="../Img/cart.png" width="100px" height="100px">
    <div class="search-container">
    <form>
      <input type="text" name="search">
      <button type="submit"><img src="../Img/search.png" width="20px" height="20px"></button>
    </form>
    </div>
  </div>
  <div>
	<button class="button1"><b>Sign Out</b></button>
	<button class="button2"><b>My Account</b></button>
  </div>
</div>   

<br>

<div class="box1"></div>
<img src="../Img/profile.jpg" class="over-img">

<br><br><br><br><br>
<br><br><br>

<center>
  <?php
    echo "<h2><b>".$_SESSION['username']."<b></h2>
            <h3><b>".$_SESSION['email']."</b></h2>";
  ?>
</center>

<br><br><br>

<div class="box2">
   <button class="button3"><a href="PaymentDetails.html"><h2><b>Payment Details<b></h2></a></button>
   <button class="button4"><a href="RefundMoney.html"><h2><b>Refund Money<b></h2></a></button>
</div>

<br>
<hr>

<footer style="background-color:#4885ED;"><center>

<div class="bottomBar">
	<div style="text-align: center;justify-content: center;align-content: center;align-items: center;">
		<br><br>
        <a href="report.html">Report</a>&nbsp;|&nbsp;
        <a href="faq.html">FAQ</a>&nbsp;|&nbsp;
        <a href="contact.html">Contact Us</a>&nbsp;|&nbsp;
        <a href="privacy.html">Privacy Policy</a>&nbsp;|&nbsp;  
        <a href="help.html">Help</a>&nbsp;|&nbsp;
        <a href="about.html">About</a>
        <div>

<br>

<div>
   <img src="../img/facebook.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
   <img src="../img/twitter.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp
   <img src="../img/insta.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<br>

</center></footer>
</body>
</html>
