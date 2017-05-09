<html><head>
<style>

.new{
    width:5%;
        height: .5px;
}
div.box {
    width: 100%;
    margin: 1px 10px 1px 5px;
    

    overflow: hidden;
    position: relative;
    z-index: 1;
}
.box img {
    display:block;
    margin: 0px auto;
      height: 200px;
      width: 100%;
    margin: 1px 10px 1px 10px;

}
div {
    text-align: justify;
    text-justify: inter-word;
    margin: 1px 25px 1px 25px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}navbar{position: absolute;
  top: 0;
  left: 0;
   z-index: 9999;
       margin: 1px 20px 1px 20px;
}
li {
    float: left;
 
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 30px 60px;
    text-decoration: none;

}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

a{  color: red;

      text-decoration:none;
   }
   form{
           padding:18px 6px;
           color: white;
   }
  

</style>
</head>
<body>
<nav class="navbar">

<ul>
  <li    width="300px"><a class="active" href="home.php">Home</a></li>
  <li><a href="exam.php" target="blank">News</a></li>
  <li><a href="seating.php" target="blank">Exam</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li> <div align='right'>
<form action="search.php" method="post">
        Search: <input type="text" name="term" />
      <input type="submit" name="submit" value="Submit" />
      </form>
      </div></li>
</ul>
</nav>

    <div style="clear:both"></div>
    </div>
    <font color="#0000FF">
    <h1 style="text-align:center">COLLEGE OF ENGINEERING ATTINGAL</h1>
    <h3 style="text-align:center">TRIVANDRUM</h3>

<div class="box">
            <img src="baner1.jpg" alt="myPic" />
            <br><br>
        </div>


       
<div><h2><strong>Welcome to College of Engineering Attingal</strong><br>
</h2>
College of Engineering Attingal, established by Institute of Human Resources Development(IHRD) Government of Kerala, is a premier technical institute having well flourished environment for moulding professionals. .College of Engineering Attingal, started functioning in the academic year 2004-2005 with  degree courses offered in Electronics and Communication Engineering , Computer Science and Engineering and Electrical and Electronics Engineering. The Institution has gained approval of All India Council for Technical Education and is an affiliated institution under APJ Abdul Kalam Kerala Technological University.</div>

<br>
<br>
<div>
<font color="#0000FF">
    <h2 style="text-align:left">Updates</h2>
    </font>
    </div>
    
     <font color="#0000FF">
      <div class="new">
            <img src="new.gif" alt="myPic" />
            <br><br>
        </div>
        <div>
   <?php
$i=0;


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
   echo "<br>"."<br>".fread($myfile,filesize("$file"))  . "<br>";
           fclose($myfile);
          
        $link = "<a href='./exam.php'>Read more </a><br />";
                print $link;
                print "</br>";}
                
        }
         
}
     
?>
</div>
<br><br>



<br>
<div style="text-align:left">
<font size="6px">

</div>
<br><br><br><br>
</div>

</font>
  </font>



</body></html>


