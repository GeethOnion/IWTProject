<html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/home.css">
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
                        <input style="height:40px;" type="text" size="150" placeholder="Search">
                    </div>
                    <div>
                        <button class="searchButton"><img src="../img/search.png" height="30" width="30"></button>
                    </div>
                </div>
            </div>
            <div style="align-items: center;align-content: center; text-align: center;padding-top: 35px;"></div>
        </div>
        <div class="main">
            <h1 style="text-align: center;">Report A Problem</h1>
            <br>
            <?php
                echo"<form action='../php/addReport.php' method='post'>
                    <lable for='topic'>Topic:</lable><br>
                    <input type='text' name='topic' size='150'><br>
                    <lable for='complaint'>Complaint:</lable><br>
                    <textarea name='complaint' rows='10' cols='120'></textarea><br><br>
                    <button type='submit'>Report</button>
                </form>";
            ?>
        </div>
        <footer>
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
        </footer>
    </body>
</html>