<?php
include_once("config.php");
function is_exist($str,$arr){
 for($i=0;$i<count($arr);$i++){

  if ($str==$arr[$i]['name']){
   return true;
  }
  }
  return false;
}
  function ShowExist($fname,$key)
  {
    $open=file_get_contents($fname);
    $arr=explode("\n",$open);
    $file = fopen($fname,'rt');
   
    while(!feof($file))
    {
      $s = fgets($file);
      if(strpos($s,$key)!==false)
      {
        
            foreach ($arr as $keys => $value)  {
                if (trim($s)==trim($value)){
                    $images=str_replace("docker-registry.easemob.com/", "", $s);
                    $ar=explode(":",$images);
                    $ars=explode(":",$s);
                    $image=trim($ars[1]);
                    $repo=trim($ar[1]);
                    $tag=$ar[2];

                   

  $url="http://docker.com/api/taglist.php?image=".trim($repo);

  $ret=get_remote_webpage($url, array());
  $rs=json_decode($ret['content'],true);
                   if (is_exist($arr[$keys-1],$array)==false){                             
                    $array[]=array("name"=>$arr[$keys-1],"repo"=>$repo,"tag"=>$tag,"image"=>$image,"tags"=>$rs['tags']);
                }
              }
            }

      }
    }
    return $array;
  }


var_dump(ShowExist("docker-compose.yml","image"));
?>

