<?php

include ('connect.php');
$year=$_POST['year'];
$title=$_POST['title'];
$place=$_POST['place'];
$para=$_POST['para'];
$groups=$_POST['groups'];

$sql="UPDATE feat SET 

title='$title',
place='$place', 
para='$para',
groups='$groups'
WHERE year='$year'";

$result=$conn->query($sql);

header('location:http://localhost/myphpsite/ad.php')
?>