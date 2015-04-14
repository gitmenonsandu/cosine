<?php>
$to="menonsandu@gmail.com"
$subject=$_POST['subject'];
$message=$_POST['message'];
$from="cosine.com";
$headers="this is from :$from";
mail($to,$subject,$message,$headers);
echo "your email has been successfully sent. we will reply very soon";



?>