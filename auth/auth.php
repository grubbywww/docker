<?php
include_once str_replace("\\", "/", dirname(__FILE__)) . '/../include/commn.inc.php';
$logins="true";
$formArr=formDataFilter($_REQUEST);
$username=$formArr['username'];
$password=$formArr['password'];

if($logins=='false') {
    echo "<script>function redirect(){location='../index.html';} document.write('fault user or passowrd !<br>redirect for 3 seconds later');setTimeout('redirect()',3000);</script>";

}else{

$_SESSION['Username']=$username;
$_SESSION['LOGIN_STATUS']='login';
header("location: ../app/main.php");
}











?>
