<?php
//GET、POST接受
function formDataFilter($dataArr){
	global $filter,$noErrorUrl;
	$refUrlInfo = parse_url($_SERVER[HTTP_REFERER]);
	$thisUrl = trim($_SERVER[HTTP_HOST]);
	 $retUrl = trim($refUrlInfo['host'].":".$refUrlInfo['port']);
	if ($retUrl != $thisUrl&&!(in_array($_SERVER['PHP_SELF'],$noErrorUrl)||strpos($_SERVER['PHP_SELF'], '/api/')===0)) {
		error('对不起，非法请求');
	}
	
	foreach ($dataArr as $key=>$val){
		//$dataArr[$key]=addslashes(stripslashes($val));
		$dataArr[$key]=$val;
	}
	return $dataArr;
}

//封装CURL使用方法
function get_remote_webpage($URL, $opts = array(),$h=array()) {
    $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; 360SE";
    // basic options (regular GET requests)
    $h[] = "Accept-Language: zh-cn,zh;q=0.5";
    $h[] = "Accept-Charset:GB2312,utf-8;q=0.7,*;q=0.7";
    $options = array(
        CURLOPT_URL => $URL,
        CURLOPT_USERAGENT => $userAgent,
        CURLOPT_RETURNTRANSFER => true, // return transfer as a string
        CURLOPT_HEADER => false, // don't return headers
        CURLOPT_HTTPHEADER => $h,
        CURLOPT_ENCODING => "", // handle all encodings
        CURLOPT_CONNECTTIMEOUT => 10, // timeout on connect
        CURLOPT_TIMEOUT => 360, // timeout on response
        CURLOPT_SSL_VERIFYPEER => false, // try to fetch SSL pages too
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_ENCODING => "gzip,deflate;q=0.5"  // path by super
    );

    /* cURL should follow redirections! 
     * But safe mode (deprecated) and open_basedir (useless) are incompatible
     * with CURLOPT_FOLLOWLOCATION.
     * Also see this solution: http://www.php.net/manual/en/function.curl-setopt.php#71313      
     */
    if (!ini_get('safe_mode') && !ini_get('open_basedir')) {
        $options[CURLOPT_FOLLOWLOCATION] = true;  // follow redirects
        $options[CURLOPT_AUTOREFERER] = true;  // automatically set the Referer: field
        $options[CURLOPT_MAXREDIRS] = 5;     // limit redirect loops
    }

    // add custom cURL options (e.g. POST requests, cookies, etc.)
    if (count($opts) > 0) {
        foreach ($opts as $key => $value) {
            $options[$key] = $value;
        }
    }

    $ch = curl_init();

    curl_setopt_array($ch, $options);

    $content = curl_exec($ch);     // the Web page
    $transfer = curl_getinfo($ch);  // transfer information (http://www.php.net/manual/en/function.curl-getinfo.php)
    $errnum = curl_errno($ch);    // codes: http://curl.haxx.se/libcurl/c/libcurl-errors.html
    $errmsg = curl_error($ch);    // empty string on success

    curl_close($ch);

    // extend transfer info
    $transfer['errnum'] = $errnum;
    $transfer['errmsg'] = $errmsg;
    $transfer['content'] = $content;
    // $transfer['url'] is the final URL after redirections, if CURLOPT_FOLLOWLOCATION is set to true

    return $transfer;
}
function formDataHtmlToPage($dataArr){
    global $filter;
    if(is_array($dataArr)){
        foreach ($dataArr as $key=>$val){
            if(is_array($val)){
                $retData[$filter->html_edit($key)]=formDataHtmlToPage($val);
            }else{
                $retData[$filter->html_edit($key)]=$filter->html_edit($val);
            }   
        }
    }else{
        $retData=$filter->html_edit($dataArr);
    }
    return $retData;
}


function checkLogin($url='/auth/index.php', $note='') {
    if (!$_SESSION['LOGIN_STATUS']) {
        header('Location:'.$url);
    }
}

  function KeyExists($fname, $key)
  {
    $file = fopen($fname,'rt');
    while(!feof($file))
    {
      $s = fgets($file);
      if(strpos($s,$key)!==false)
      {
        $str=str_replace("docker-registry.easemob.com/", "", $s);
        $arr[]=$str;
      }
    }
    return $arr;
  }

  function FenGenKey($arr=array()){
    foreach ($arr as $key => $value) {
        $ar=explode(":",$value);
        $data[]=$ar[1];
    }
    return $data;
  }

  function ReplaceExist($fname, $keys,$replace,$name)
  {
    $open=file_get_contents($fname);
    $arr=explode("\n",$open);
    $file = fopen($fname,'rt');
    $j = 1; 
    $i = 0;
    while(!feof($file))
    {
      $s = fgets($file);
      if(strpos($s,$name)!==false){
        foreach ($arr as $key => $value) {
          if (trim($s)==trim($value)) {
               $images=str_replace("docker-registry.easemob.com/", "", $arr[$key+1]);
               $strs=$arr[$key+1];
               $ar=explode(":",$images);
               $repo=trim($ar[1]);

                if (trim($keys)==$repo){
                 
                  $str=explode(":",$strs);
                  $image=$str[0].":".$str[1].":".$replace;
                  $array[]=$image;
                  $arr[$key+1]=$image;
                  $con = implode("\n", $arr);
                  // $cssCon = str_replace($arr[$key+1],$image,$cssFileCon);
                  file_put_contents($fname, $con);
                  
                  
                 
               }
          }
        }

          
      }
       
    }
    return $array;
  }


  function is_exist($str,$arr){
 for($i=0;$i<count($arr);$i++){

  if ($str==$arr[$i]['name']){
   return true;
  }
  }
 
 return false;
}

 function ShowExists($fname,$key)
  {
    $open=file_get_contents($fname);
    $arr=explode("\n",$open);
    $file = fopen($fname,'rt');
    $array=array();
    while(!feof($file))
    {
      $s = fgets($file);
       
      if(strpos($s,$key)!==false)
      {
            foreach ($arr as $keys => $value) {
                if (trim($s)==trim($value)){
                    $images=str_replace("docker-registry.easemob.com/", "", $s);
                    $ar=explode(":",$images);
                    $ars=explode(":",$s);
                    $image=trim($ars[1]);
                    $repo=trim($ar[1]);
                    $tag=$ar[2];

                   

  //$url="http://10.75.24.102:8000/api/taglist.php?image=".$repo;
  $url="https://docker-registry.easemob.com/v2/".$repo."/tags/list";
  $header=array('Authorization: Basic ZWFzZW1vYjp0aGVwdXNoYm94');
  $ret=get_remote_webpage($url, array( CURLOPT_HTTPHEADER => $header ));
  $rs=json_decode($ret['content'],true);
  $tags=implode(",",$rs['tags']);
   if(strpos($arr[$keys-1] ,"#")===false){
                if (is_exist($arr[$keys-1],$array)==false){  
                  
                    $array[]=array("name"=>$arr[$keys-1],"repo"=>$repo,"tag"=>$tag,"image"=>$image,"tags"=>$tags);
                }
                }
              }
            }

      }
    
  }
    return $array;
  }


  function pageList($page, $retCount, $url, $itemCount=50) {
    $page = $page < 1 ? 1 : $page;
    //$url=formDataHtmlToPage($url);
    $url = preg_replace('/(\?|&)p=\d?/i', '', $url);

    if (!strpos($url, '?')){
        $url.='?';
    }else{
        $url.='&';
    }

    $list_cnt = (int) $retCount;
    $page_cnt = intval(($list_cnt + $itemCount - 1) / $itemCount);
    $last_page = ($page - 1) <= 1 ? 1 : ($page - 1);
    //$final_page = 

    $page_array = "<li><span class=\"label label-success\">共 $retCount 条记录  每页显示 $itemCount 条  当前第 $page 页  </span></li>";
    $page_array .= "<li><a href='{$url}p=1'>首页</a></li>";
    $page_array .= "<li><a href='{$url}p={$last_page}'>上一页</a>";

    for ($i = -4; $i <= 4; $i++) {
        $j = $i + $page;
        if ($j < 1 || $j > $page_cnt)
            continue;
        if ($i == 0) {
            $page_array .= "  <li class=\"active\"><span>".$j."<span class=\"sr-only\">(current)</span></span></li>";
            // $page_array .= "<a class=\"pages_current\">{$j}</a>\n";
        } else {
            $page_array .= "  <li><span><a href='{$url}p={$j}'>{$j}</a><span class=\"sr-only\">(current)</span></span></li>";
             //$page_array .= "<a class=\"pages_item\" href='{$url}p={$j}'>{$j}</a>\n";
        }
    }
    if ($page <= $page_cnt - 4) {
        $page_array .= '<li><a>...</a></li>';
    }
    $next_page = ($page + 1) >= $page_cnt ? $page_cnt : ($page + 1);

    $page_array .= "<li><a href='{$url}p={$next_page}'>下一页</a></li>";
    $page_array .= "<li><a href='{$url}p={$page_cnt}'>尾页</a></li>";
   
    return $page_array;
}
?>