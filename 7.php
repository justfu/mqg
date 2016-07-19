<?php
session_start();
// var_dump($_SESSION);
$cookie=$_SESSION['cookie'];
// $cookie="ASP.NET_SessionId=vleiheuujeo4fj45vw4a2b55; safedog-flow-item=3CFE3257036132";
// header("Content-type: image/png");
header("Content-type: image/png");
function query($cookie){
    $starttime=microtime(true);
    // $arr = array(
    //     'platform' => 1,
    //     'versionNumber' => '7.4.0',
    //     'phoneModel' => 'U7',
    //     'studentId' => $id,
    //     'channel'=>'360Market',
    //     'phoneVersion'=>'22',
    //     'phoneBrand'=>'UTOUU'
    // );
    $url = "http://jwmis.hnie.edu.cn/jwweb/sys/ValidateCode.aspx";
    $ch = curl_init($url);
    // curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_REFERER, 'http://jwmis.hnie.edu.cn/jwweb/_data/index_LOGIN.aspx');
    curl_setopt($ch, CURLOPT_COOKIE,$cookie);
    $data = curl_exec($ch);
    curl_close($ch);
    echo $data;
}
query($cookie);
