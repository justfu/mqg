<?php
session_start();
$cookie=$_SESSION['cookie'];
header("Content-type:text/html;charset=gb2312");
function query($cookie){
    $starttime=microtime(true);
    $type=iconv('utf-8', 'gb2312', '检索');
    $arr = array(
        'sel_xn' => 2015,
        'sel_xq' => 1,
        'SelXNXQ' => 2,
        'submit' => $type
    );
    $url = "http://jwmis.hnie.edu.cn/jwweb/xscj/Stu_cjfb_rpt.aspx";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_REFERER, 'http://jwmis.hnie.edu.cn/jwweb/xscj/Stu_cjfb.aspx');
    curl_setopt($ch, CURLOPT_COOKIE,$_SESSION['cookie']);
    $data = curl_exec($ch);
    curl_close($ch);
    $data=str_replace('../', 'http://jwmis.hnie.edu.cn/jwweb/', $data);
    echo $data."<style type='text/css'>table{width:100%}</style>";
}
query($cookie);
