<!DOCTYPE html>
<html>
<head>
<title>Payment Details</title>
<link rel="stylesheet" type="text/css" href="../CSS/PaymentDetails.css" >

</head>
<body>

<div class="header">
  <div style="padding-left: 20px;padding-top:20px;">
    <img class="logo" src="../Img/cart.png" width="100px" height="100px">
    <div class="searchbar">
    <form>
      <input type="text" name="search" class="searchbox">
	  <button type="submit"><img src="../Img/search.png" width="20px" height="20px"></button>
    <form>
	</div>
  </div> 
  <div>
	<form action="../php/logout.php"><button type="submit">SignOut</button></form>
  </div> 
</div>  

<br>

<h1>Payment Details</h1>

<br>

<div class="PaymentDetails" id="tbl" style="border-style:groove; border-color:DarkBlue;">
<table border="1" style width="100%">
<th>User ID</th>
<th>Order No</th>
<th>Item No</th>
<th>Quantity</th>
<th>Payment</th>

<?php

	
	
?>
<tr>
	<td colspan="4"><b><h3>Total</h3></b></td>
	<td>          </td>
</table></div>

<br>

<a href="./PaymentHandling.php"><button class="button3" style="background-color:white;"><b>BACK</b></button></a>

<br><br>
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
   <img src="../Img/facebook.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
   <img src="../Img/twitter.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp
   <img src="../img/insta.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
</div>                    

<br>

</center></footer>
</body>
</html>

