<?php
include_once 'config.php';
$formArr=formDataFilter($_REQUEST);
$image=$formArr['image'];
$tag=$formArr['tag'];
$name=$formArr['name'];
$result=ReplaceExist("docker-compose.yml",$image,$tag,$name);
if($result){
echo "success";
}else{
echo "fail";
}
?>


