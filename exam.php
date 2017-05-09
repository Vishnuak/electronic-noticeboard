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

<br>
<font size="5px">
<?php



        ?>
  <div align='justify'>     
<?php
$i=0;

//This little PHP script is the most elegant way 
//I could find the list directories and 
//files with PHP and sort by date
//thanks to StackOverflow
$files = array();
$dir = new DirectoryIterator('.');
foreach ($dir as $fileinfo) {
   $files[$fileinfo->getMTime()] = $fileinfo->getFilename();
}
//krsort will sort in reverse order
krsort($files);
//just print out the file names
//excluding this file (named index.php and the dir "." )
foreach($files as $file){
        if ($file == "index.php" or $file == "." ){
        }else{
            while( $i < 1) {
            $i++;
         $myfile = fopen("$file", "r") or die("Unable to open file!");
   echo fread($myfile,filesize("$file")) . "<br>" . "<br>";
           fclose($myfile);}
          
        $link = "<a href='./$file'> #$file </a><br />";
                print $link;
                print "</br>";
        }
         
}
     
?>

</font>
</div>
  </div>    
<br>

<br>
<div style="text-align:left">
<font size="6px">


</font>


</font>

</body></html>


