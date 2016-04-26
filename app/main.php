<?php
include_once("config.php");
include_once("db.php");
$formArr=formDataFilter($_REQUEST);
$p=$formArr['p']?$formArr['p']:1;
$pageListSums=20;
//var_dump($data['repositories']);
$file="docker-compose.yml";

$datalist=ShowExists($file,"image");
//$array=KeyExists($file, "image");
//$arr=FenGenKey($array);ShowExists($fname,$key)
//var_dump($arr);$datalist=
 // foreach ($datalists as $value){

 // $url="http://docker.com/api/taglist.php?image=".trim($value['repo']);

 // $ret=get_remote_webpage($url, array());
 // $datas=json_decode($ret['content'],true);
 // $datalist[]=$datas;
 // }

$data=getLists($p,$pageListSums,$datalist);

$pageListContents=pageList($p,$data['Num'],'/app/main.php',$pageListSums);
$smarty->assign("pageListContents",$pageListContents);
$smarty->assign("data",$data['Data']);

$smarty->display("app/main.html");







?>
