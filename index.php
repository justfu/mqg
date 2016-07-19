<?php
session_start();
function query(){
    $url = "jwmis.hnie.edu.cn/jwweb/";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    preg_match_all('/Set-Cookie: ASP.NET_SessionId=[a-zA-Z0-9]*/i', $data, $cookie1);
    preg_match_all('/Set-Cookie: safedog-flow-item=[a-zA-Z0-9]*/i', $data, $cookie2);
    $cookie1=substr($cookie1[0][0],12);
    $cookie2=substr($cookie2[0][0],12);
    $_SESSION['cookie']=$cookie1."; ".$cookie2;
    // $_SESSION['cookie']=$cookie1;
}
function query2(){
    $url = "jwmis.hnie.edu.cn/jwweb/_data/index_LOGIN.aspx";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_REFERER, 'http://jwmis.hnie.edu.cn/jwweb/default.aspx');
    $data = curl_exec($ch);
    curl_close($ch);
    $pattern = '/<input type="hidden" name="__VIEWSTATE" value="(.*?)" \/>/is';
    preg_match_all($pattern, $data, $matches);
    $_SESSION['viewstate']=$matches[1][0];
    // var_dump($_SESSSION);
}
query();
query2();
 ?>
<!DOCTYPE html>
<html>
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
        <title>登陆湖工教务系统</title>
        <link rel="stylesheet" href="./style/weui.css"/>
    </head>
  <body>
    <div class="hd">
    <h1 style="text-align: center;font-size: 34px;color: #3cc51f;font-weight: 300;margin: 0 15%;">登陆湖工教务处</h1>
    </div>
  <form action="exe1.php" method="post" name="all">
    <input type="hidden" name="dsdsdsdsdxcxdfgfg" id="dsdsdsdsdxcxdfgfg"/>
    <input type="hidden" name="fgfggfdgtyuuyyuuckjg" id="fgfggfdgtyuuyyuuckjg"/>
    <input id="typeName" type="hidden" name="typeName" value="学生">
  	<input id="pcInfo" type="hidden" name="pcInfo" value="Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36undefined5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36 SN:NULL">
  	<div class="weui_cells weui_cells_form">
    <div class="weui_cell">
         <div class="weui_cell_hd"><label class="weui_label">请输入学号</label></div>
         <div class="weui_cell_bd weui_cell_primary">
             <input class="weui_input" type="text" name="txt_asmcdefsddsd" id="txt_asmcdefsddsd" placeholder="请输入学号">
         </div>
     </div>
     <div class="weui_cell">
         <div class="weui_cell_hd"><label class="weui_label">请输入密码</label></div>
         <div class="weui_cell_bd weui_cell_primary">
             <input class="weui_input" type="password" name="txt_pewerwedsdfsdff" onkeyup="chkpwd(this)"  onblur="chkpwd(this)" id="txt_pewerwedsdfsdff" placeholder="请输入密码">
         </div>
     </div>
     <div class="weui_cell weui_vcode">
            <div class="weui_cell_hd"><label class="weui_label">验证码</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input onkeyup="chkyzm(this)" onblur="chkyzm(this)" name="txt_sdertfgsadscxcadsads" id="txt_sdertfgsadscxcadsads" class="weui_input" onkeyup="chkpwd(this)" name="txt_pewerwedsdfsdff" id="txt_pewerwedsdfsdff" type="text" placeholder="请输入验证码"/>
            </div>
            <div class="weui_cell_ft">
                <img onclick=changeValidateCode(this) id=imgCode src="./7.php" />
            </div>
        </div>
</div>
<div class="weui_cells_tips">登陆过程绝对安全，本网站不会保存您的任何账号和密码</div>
    <div class="weui_btn_area">
        <a class="weui_btn weui_btn_primary" href="javascript:document.all.submit()" id="showLoadingToast">登陆</a>
    </div>
  </body>
</form>
<!--BEGIN toast-->
<div id="toast" style="display: none;">
    <div class="weui_mask_transparent"></div>
    <div class="weui_toast">
        <i class="weui_icon_toast"></i>
        <p class="weui_toast_content">已完成</p>
    </div>
</div>
<!--end toast-->

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
        <p class="weui_toast_content">正在登陆...</p>
    </div>
</div>
<div style="font-family: 'PingFangSC-Light','helvetica neue','hiragino sans gb','tahoma','microsoft yahei ui','microsoft yahei','simsun','sans-serif';text-align:center;margin-top:30px;">Author By <a href="http://a.ilhong.cn" style="color:#04BE02;">Hong</a></div><br/>
<div style="font-family: 'PingFangSC-Light','helvetica neue','hiragino sans gb','tahoma','microsoft yahei ui','microsoft yahei','simsun','sans-serif';text-align:center;margin-top:30px;"><a href="http://www.chuang-ba.cn/mqg" style="color:#04BE02;"> 太慢? 点击切换线路查成绩</a></div>
<div style="font-family: 'PingFangSC-Light','helvetica neue','hiragino sans gb','tahoma','microsoft yahei ui','microsoft yahei','simsun','sans-serif';text-align:center;margin-top:30px;"><a href="http://www.ilhong.cn/cet/cet.php" style="color:#04BE02;"> ->-> 湖工四六级免证查询</a></div>

</html>
<script src="./zepto.min.js"></script>
<script src="./router.min.js"></script>
<script src="./example.js"></script>
<script type="text/javascript" src="md5.js"></script>
<script type="text/javascript" src="index.js"></script>
<script type="text/javascript">
$('#showLoadingToast').bind('click',function(){
  $('#loadingToast').show();
  setTimeout(function () {
      $('#loadingToast').hide();
  }, 2000);
});
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?1403f2688d9e6ce7e74fe0f067e4a5a9";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

