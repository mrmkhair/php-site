<?php
$servername='localhost';
$username='root';
$password='';
$ddbname='myphpsite';
$conn=new mysqli($servername,$username,$password,$ddbname);
$conn->set_charset('utf8');
// if($conn->connect_error){
//     die("خطأ");
// }echo "تم الاتصال";

?>