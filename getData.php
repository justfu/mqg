<?php
session_start();
$cookie=$_SESSION['cookie'];
header("Content-type: text/html;charset=gb2312");
function query($cookie){
    $url = "http://jwmis.hnie.edu.cn/jwweb/xsxj/Stu_MyInfo_RPT.aspx";
    $ch = curl_init($url);
    // curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_REFERER, 'http://jwmis.hnie.edu.cn/jwweb/xscj/Stu_MyScore_rpt.aspx');
    curl_setopt($ch, CURLOPT_COOKIE,$cookie);
    $data = curl_exec($ch);
    curl_close($ch);
    $data=str_replace('../', 'http://jwmis.hnie.edu.cn/jwweb/', $data);
    if(strpos($data,'登录')>0){
      echo "<script type='text/javascript'>alert('账户信息错误!请重新填写账号密码~~!');window.location.href='./index.php';</script>";
      exit;
    }
    echo $data."<style type='text/css'>table{width:100%}</style>";
}
query($cookie);
?>
