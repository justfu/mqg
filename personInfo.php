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
}
query($cookie);
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="gb2312">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>查看信息界面 -- by Hong</title>
    <link rel="stylesheet" href="./style/weui.css"/>
    <link rel="stylesheet" href="./example.css"/>
    <style type="text/css">
    a{
      color: gray;
      text-decoration: none;
    }
    .poi{
      position: fixed;
      left: 20px;
      bottom: 20px;
     z-index:1000
    }
    </style>
</head>
<body ontouchstart>
  <iframe width="100%" scrolling="auto"  height="2000px" frameborder="0" style="overflow-x:hidden;" src="getData.php" id="ifr"></iframe>
    <div class="container" id="container"></div><script type="text/html" id="tpl_actionsheet">

<div class="bd spacing">
    <a href="javascript:;" class="poi" id="showActionSheet"><img src="./style/icon_nav_cell.png"/></a>
</div>

<!--BEGIN actionSheet-->
<div id="actionSheet_wrap">
    <div class="weui_mask_transition" id="mask"></div>
    <div class="weui_actionsheet" id="weui_actionsheet">
        <div class="weui_actionsheet_menu">
          <a onclick="document.getElementById('ifr').src='personInfo.php#/actionsheet'" ><div class="weui_actionsheet_cell" id="actionsheet_cancel1">查看个人信息</div></a>
          <a onclick="javascript:document.getElementById('ifr').src='seeGrade.php'"><div class="weui_actionsheet_cell" id="actionsheet_cancel2">查看本学期成绩分布</div></a>
          <a onclick="javascript:document.getElementById('ifr').src='seeAllGrade.php'"><div class="weui_actionsheet_cell" id="actionsheet_cancel3">查看入学以来成绩分布</div></a>
          <a onclick="javascript:document.getElementById('ifr').src='getGradeimg.php'"><div class="weui_actionsheet_cell" id="actionsheet_cancel4">查看2015年下半年详细成绩单</div></a>
          <a onclick="javascript:document.getElementById('ifr').src='getGradeimg2.php'"><div class="weui_actionsheet_cell" id="actionsheet_cancel5">查看本学期详细成绩单</div></a>
          <div class="weui_actionsheet_cell"><a href="index.php">安全退出</a></div>
        </div>
        <div class="weui_actionsheet_action">
            <div class="weui_actionsheet_cell" id="actionsheet_cancel">取消</div>
        </div>
    </div>
</div>
<!--END actionSheet-->
</script>
    <script src="./zepto.min.js"></script>
    <script src="./router.min.js"></script>
    <script src="./example.js"></script>
</body>
</html>
<!-- loading toast -->
<div id="loadingToast" class="weui_loading_toast" style="display:none;">
    <div class="weui_mask_transparent"></div>
    <div class="weui_toast">
        <div class="weui_loading">
            <div class="weui_loading_leaf weui_loading_leaf_0"></div>
            <div class="weui_loading_leaf weui_loading_leaf_1"></div>
            <div class="weui_loading_leaf weui_loading_leaf_2"></div>
            <div class="weui_loading_leaf weui_loading_leaf_3"></div>
            <div class="weui_loading_leaf weui_loading_leaf_4"></div>
            <div class="weui_loading_leaf weui_loading_leaf_5"></div>
            <div class="weui_loading_leaf weui_loading_leaf_6"></div>
            <div class="weui_loading_leaf weui_loading_leaf_7"></div>
            <div class="weui_loading_leaf weui_loading_leaf_8"></div>
            <div class="weui_loading_leaf weui_loading_leaf_9"></div>
            <div class="weui_loading_leaf weui_loading_leaf_10"></div>
            <div class="weui_loading_leaf weui_loading_leaf_11"></div>
        </div>
        <p class="weui_toast_content">数据加载中</p>
    </div>
</div>
<script type="text/javascript">
$('#actionsheet_cancel1').bind('click',function(){
  $('#loadingToast').show();
  setTimeout(function () {
      $('#loadingToast').hide();
  }, 3000);
});
$('#actionsheet_cancel2').bind('click',function(){
  $('#loadingToast').show();
  setTimeout(function () {
      $('#loadingToast').hide();
  }, 3000);
});
$('#actionsheet_cancel3').bind('click',function(){
  $('#loadingToast').show();
  setTimeout(function () {
      $('#loadingToast').hide();
  }, 3000);
});
$('#actionsheet_cancel4').bind('click',function(){
  $('#loadingToast').show();
  setTimeout(function () {
      $('#loadingToast').hide();
  }, 3000);
});
$('#actionsheet_cancel5').bind('click',function(){
  $('#loadingToast').show();
  setTimeout(function () {
      $('#loadingToast').hide();
  }, 3000);
});
</script>
