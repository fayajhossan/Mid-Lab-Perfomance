<?php

$name = $_REQUEST['name'];
$Email = $_REQUEST['Email'];
$Gender = $_REQUEST['Gender'];



echo $_POST['name']."<br>";
echo $_POST['Email']."<br>";
echo $_POST['Gender'];


if (isset($_POST['name'])){
	$name = $_POST['name'];
}


if (isset($_POST['Email'])){
	$name = $_POST['Email'];
}

if (isset($_POST['Gender'])){
	$name = $_POST['Gender'];
}


if (isset($_REQUEST['submit'])){
	
if (empty(trim($name))){
	echo "name field is empty!";
}elseif (str_word_count(trim($name))<2) {
	echo  
}
}





?>