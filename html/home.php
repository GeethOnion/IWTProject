<?php
    session_start();
?> 
<html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/signedInUser.css">
        <link rel="stylesheet" href="../css/slideshow.css">
    </head>
    
    <body>
        <div class="topBar">
            <div style="padding-left: 20px;padding-top:30px;">
                <a href="./home.html"><img src="../img/cart.png" height="100" width="100"></a>
            </div>
            <div class="searchBar">
                <div></div>
                <div class="searchBarRow" style="text-align: center;align-items: center;">
                    <div style="text-align: center;">
                        <input style="height:40px;" type="text" size="150">
                    </div>
                    <div>
                        <button class="searchButton"><img src="../img/search.png" height="30" width="30"></button>
                    </div>
                </div>
                <div></div>
            </div>
            <div id="logOutButtonContainer" style="align-items: center;align-content: center; text-align: center;padding-top: 35px;display:none;">
                <span style="font-weight: bolder;font-size: 20px;">Welcome Back,</span><br>
                <span id="username">[username]</span><br><br>
                <a href="./customerAccount.php"><button>My Account</button></a>&nbsp;&nbsp;
                <button onclick="">SignOut</button>
            </div>
            <div id="loginButtonContainer" class="searchBar" style="align-items: center;align-content: center; text-align: center;padding-top: 35px;">
                <div>
                    <a href="./login.html"><button>Login</button></a>
                </div>
                <div>
                    <a href="./commonregistration.html"><button>SignUp</button></a>
                </div>
            </div>
        </div>
        <div class="main">
            <br>
            <div id="slideShow">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <img src="../img/image0.webp" style="width:100%;height: 300px;" >
                    </div>
                    
                    <div class="mySlides fade">
                        <img src="../img/image1.webp" style="width:100%;height: 300px;">
                    </div>
                    
                    <div class="mySlides fade">
                        <img src="../img/image2.webp" style="width:100%;height: 300px;">
                    </div>

                    <div class="mySlides fade">
                        <img src="../img/image3.webp" style="width:100%;height: 300px;">
                    </div>

                    <div class="mySlides fade">
                        <img src="../img/image4.webp" style="width:100%;height: 300px;">
                    </div>

                    <div class="mySlides fade">
                        <img src="../img/image5.webp" style="width:100%;height: 300px;">
                    </div>

                </div>
            </div>
            <br>
            <div id="items">
                <div class="category"> 
                    <br>
                    <a href="./electronics.php" target="blank"><img style="border-radius: 50%;" src="../img/electronics.jpg" height="150" width="150"></a><br><br>
                    Electronics
                </div>
                <div class="category">
                    <br>
                    <a href="" target="blank"><img style="border-radius: 50%;" src="../img/jewellery.jpg" height="150" width="150"></a><br><br>
                    Jewelry & Watches
                </div>
                <div class="category">
                    <br>
                    <a href="" target="blank"><img style="border-radius: 50%;" src="../img/sports.jpg" height="150" width="150"></a><br><br>
                    Sports
                </div>
                <div class="category">
                    <br>
                    <a href="" target="blank"><img style="border-radius: 50%;" src="../img/mens.jpg" height="150" width="150"></a><br><br>
                    Men's Fassion
                </div>
                <div class="category">
                    <br>
                    <a href="" target="blank"><img style="border-radius: 50%;" src="../img/Women.jpg" height="150" width="150"></a><br><br>
                    Women's Fassion
                </div>
                <div class="category">
                    <br>
                    <a href="" target="blank"><img style="border-radius: 50%;" src="../img/household.jpg" height="150" width="150"></a><br><br>
                    Household Items
                </div>
                <div class="category">
                    <br>
                    <a href="" target="blank"><img style="border-radius: 50%;" src="../img/toys.jpeg" height="150" width="150"></a><br><br>
                    Toys
                </div>
                <div class="category">
                    <br>
                    <a href="" target="blank"><img style="border-radius: 50%;" src="../img/tools.png" height="150" width="150"></a><br><br>
                    Tools
                </div>
                <div class="category">
                    <br>
                    <a href="" target="blank"><img style="border-radius: 50%;" src="../img/Beauty.jpg" height="150" width="150"></a><br><br>
                    Beauty
                </div>
                <div class="category">
                    <br>
                    <a href="" target="blank"><img style="border-radius: 50%;" src="../img/hair.jpg" height="150" width="150"></a><br><br>
                    Hair
                </div>
                <div class="category">
                    <br>
                    <a href="" target="blank"><img style="border-radius: 50%;" src="../img/fitness.jpg" height="150" width="150"></a><br><br>
                    Fitness
                </div>
                <div class="category">
                    <br>
                    <a href="" target="blank"><img style="border-radius: 50%;" src="../img/shoes.jpeg" height="150" width="150"></a><br><br>
                    Shoes
                </div>
            </div>
        </div>
        <br>
        <div class="bottomBar">
            <div style="text-align: center;justify-content: center;align-content: center;align-items: center;">
                <br><br>
                <a class="link" href="report.html">Report</a>&nbsp;|&nbsp;
                <a class="link" href="faq.html">FAQ</a>&nbsp;|&nbsp;
                <a class="link" href="contact.html">Contact Us</a>&nbsp;|&nbsp;
                <a class="link" href="privacy.html">Privacy Policy</a>&nbsp;|&nbsp;
                <a class="link" href="help.html">Help</a>&nbsp;|&nbsp;
                <a class="link" href="about.html">About</a>
                <div>
                    <br>
                    <img src="../img/facebook.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="../img/twitter.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="../img/insta.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        var idr = '<?php echo isset($_SESSION['username']); ?>'; 
        var uname = '<?php echo $_SESSION['username']; ?>'; 
        console.log(idr);
         if(idr==1){
             document.getElementById("logOutButtonContainer").style.display="block";
             document.getElementById("username").innerHTML=uname;
             document.getElementById("loginButtonContainer").style.display="none";
         }
    </script>

    <script src="../js/slideshow.js"></script>
</html>