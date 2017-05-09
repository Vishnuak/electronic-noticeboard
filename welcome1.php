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
 
include('class.pdf2text.php');
if(isset($_POST['name']) && !empty($_POST['name'])){
	$results=0;
	chdir('files');
	foreach (glob("*.pdf") as $filename) { //will find in all the .pdf files in current directory
	    $a = new PDF2Text();
		$a->setFilename($filename);
		@$a->decodePDF();
		if(isset($_POST['caseinsensitive']) && $_POST['caseinsensitive']=='on')
		 	$count=substr_count(strtoupper($a->output()), strtoupper($_POST['name']));
		else
			$count=substr_count($a->output(), $_POST['name']);
		if($count!==0){
			echo ''.$_POST['name'].'<br><br>';
			$results++;
			$link = "<a href='./files/$filename'> $filename </a><br />";
			echo 'Class Room : '.$link;
		}
	}
	if($results===0){
		echo "No result found.";
	}
}
?>
</b>
</font>
</div>
</body>
</html>