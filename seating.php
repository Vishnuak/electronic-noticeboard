<html><head>
<style>
body{
height=500000px;
background-color:#00000;
background-image:url(file:///baner.jpg);
background-repeat:repat;
#content{
position:static;
height=500000px;
}
}
div.box {
    width: 100%;
    margin: 1px 0px 0px 0px;
    height: 128px;
    overflow: hidden;
    position: center;
    z-index: 1;
}
.box img {
    display:block;
    margin: 5px auto;
}
ul { display:table; margin:0 auto;}
</style>
</head>
<body>
<font color="#000000">
 <div class="box">
        <a href="http://www.ceattingal.ac.in/"><img src="logoceal.jpg" alt="myPic" />
        </a></div>
</font>
<font color="#0000FF">
<h1 style="text-align:center">Notices</h1>
 <div align='center'>
 <?php

     echo "Date " . date("Y/m/d") . "<br>";     ?>
<br>
<form action="welcome1.php" method="post">
Register number: <input type="text" name="name" <?php $idtest ?> <br>

<input type="submit">
</form>
<br>
</font>
</div>
      
<br>

<br>
<div style="text-align:left">
<font size="6px">


</font>


</font>

</body></html>


