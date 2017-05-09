<html>
<body>
<div align='left'>
<font color="#000000">

<font size="5px">
<?php
include 'header.php';?>
<br><br>
<strong> Search term : </strong>
<b><?php
 echo $_POST["term"] ."<br>". "<br>";


$path_to_check = '';
$needle =  $_POST["term"];
foreach(glob($path_to_check . '*.txt') as $filename)
{
  foreach(file($filename) as $fli=>$fl)
  {
    if(strpos($fl, $_POST["term"])!==false)
    {
        {
     echo $filename;
      $temp = explode('.', $filename);
$ext  = array_pop($temp);
$name = implode('.', $temp);
     $link = "<a href='./$filename'> $name </a><br />";
      
       echo $link;
        }
    }
    
  }
  
}

?>
</b>
</font>
</div>
</body>
</html>