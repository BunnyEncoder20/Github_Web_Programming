<?php
// Cookies and Sessions 
// $_COOKIE : is a super global variable which is accessible acros files
// $_SESSION : More secure than cookies and used to store username and pwd

setcookie("name_cookie","Bunny",time()+86400);  //86400s = 1 day expiry
setcookie("second_cookie","Soma",time()-1); //any button can be used to destroy the cookies by assigning the - time

$_SESSION['name_session'] = "User_ID:12";
?>