<html>
<body>
<div align='left'>
<font color="#000000">

<font size="5px">
<?php
include 'header.php';?>
<br><br>
<strong> Register No : </strong>
<b><?php
 echo $_POST["name"] ."<br>". "<br>";

$path_to_check = '';
$needle =  $_POST["name"];

foreach(glob($path_to_check . '*.txt') as $filename)
{
  foreach(file($filename) as $fli=>$fl)
  {
    if(strpos($fl, $_POST["name"])!==false)
    {
    
      $temp = explode('.', $filename);
$ext  = array_pop($temp);
$name = implode('.', $temp);
     $link = "<a href='./$name.jpg'> $name </a><br />";
      
      
    }
    
  }
  
}
 echo 'Class Room : ',$link;
?>
</b>
</font>
</div>
</body>
</html>