<?php
//echo '{"repositories":["anapsix/alpine-java","centos6","centos7","easemob-kefu-rest-server","easemob-kefu-statistic/kefu-schedule","easemob-kefu-statistic/kefu-statistic-offline","easemob-kefu-statistic/kefu-statistic-server","easemob-kefu/kefu-callback-rest-server","easemob-kefu/kefu-config-server","easemob-kefu/kefu-connector","easemob-kefu/kefu-gateway-im-routeway-server","easemob-kefu/kefu-gateway-im-server","easemob-kefu/kefu-gateway-rest-server","easemob-kefu/kefu-gateway-wechat-routeway-server","easemob-kefu/kefu-gateway-wechat-server","easemob-kefu/kefu-robot-kafka-consumers","easemob-kefu/kefu-robot-server","easemob-kefu/kefu-schedule","easemob-kefu/kefu-scheduler-server","easemob-kefu/kefu-server","easemob-kefu/kefu-service-session-history-server","easemob-kefu/kefu-wechat-server","easemob-kefu/rest-routeway-server","easemob-kefu/ticket-rest","easemob_nginx","elasticsearch","java","java8","kafka","kafka1","kefu-frontend-nodejs","kefu_cidocker_test","maven","message_proxy","message_service","mysql","nginx","nginx.v2","publisher","pusher","redis","swarm","zk"]}';
//$array=array("repositories"=>array("anapsix/alpine-java","centos7","anapsix/alpine-java"));
//echo json_encode($array);

function get_remote_webpage($URL, $opts = array(),$h=array()) {
    $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; 360SE";
    // basic options (regular GET requests)
    $h[] = "Accept-Language: zh-cn,zh;q=0.5";
    $h[] = "Accept-Charset:GB2312,utf-8;q=0.7,*;q=0.7";
    $options = array(
        CURLOPT_URL => $URL,
        CURLOPT_USERAGENT => $userAgent,
        CURLOPT_RETURNTRANSFER => true, // return transfer as a string
        CURLOPT_HEADER => FALSE,// don't return headers
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
$repo="easemob-kefu/kefu-callback-rest-server";
$URL="https://docker-registry.easemob.com/v2/".$repo."/tags/list";
$header=array('Authorization: Basic ZWFzZW1vYjp0aGVwdXNoYm94');

$ret=get_remote_webpage($URL,array(CURLOPT_HTTPHEADER => $header));
$rs=json_decode($ret['content'],true);

var_dump($rs['name']);
?>
