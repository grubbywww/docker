<?php
function getLists($page,$pageListSum,$arr){
	$start=($page-1)*$pageListSum;
	$retData[Data]=array_slice($arr,$start,$pageListSum);

	$retData[Num]=count($arr);

	return $retData;
}



?>
