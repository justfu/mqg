<?php
session_start();
$cookie=$_SESSION['cookie'];
 header("Content-type: image/png");
 function query0($cookie){
     $starttime=microtime(true);
     $url = "http://jwmis.hnie.edu.cn/jwweb/xscj/private/list_xhxm.aspx?flag=0.3188142351473888";
     $ch = curl_init($url);
     // curl_setopt($ch, CURLOPT_POST, true);
     // curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, sdch");
    //  curl_setopt($ch, CURLOPT_MAXREDIRS,20);
    //  curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
     curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36");
     curl_setopt($ch, CURLOPT_REFERER, 'http://jwmis.hnie.edu.cn/jwweb/frame/menu.aspx');
     curl_setopt($ch, CURLOPT_COOKIE,$cookie);
     $data = curl_exec($ch);
     curl_close($ch);
 }
 function query1($cookie){
     $starttime=microtime(true);
     $url = "http://jwmis.hnie.edu.cn/jwweb/xscj/Stu_MyScore.aspx";
     $ch = curl_init($url);
     // curl_setopt($ch, CURLOPT_POST, true);
     // curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, sdch");
    //  curl_setopt($ch, CURLOPT_MAXREDIRS,20);
    //  curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
     curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36");
     curl_setopt($ch, CURLOPT_REFERER, 'http://jwmis.hnie.edu.cn/jwweb/frame/menu.aspx');
     curl_setopt($ch, CURLOPT_COOKIE,$cookie);
     $data = curl_exec($ch);
     curl_close($ch);
 }
 function query2($cookie){
     $starttime=microtime(true);
     $url = "http://jwmis.hnie.edu.cn/jwweb/xscj/Stu_MyScore_rpt.aspx";
     $ch = curl_init($url);
     // curl_setopt($ch, CURLOPT_POST, true);
     // curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, sdch");
    //  curl_setopt($ch, CURLOPT_MAXREDIRS,20);
    //  curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
     curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36");
     curl_setopt($ch, CURLOPT_REFERER, 'http://jwmis.hnie.edu.cn/jwweb/xscj/Stu_MyScore.aspx');
     curl_setopt($ch, CURLOPT_COOKIE,$cookie);
     $data = curl_exec($ch);
     // echo curl_error($ch);
     curl_close($ch);
 }
 function query3($cookie){
    //  $starttime=microtime(true);
     $type=iconv('utf-8', 'gb2312', '检索');
     $arr = array(
         'sel_xn' => 2015,
         'sel_xq' => 1,
         'SJ' => 1,
         'btn_search' => $type,
         'SelXNXQ' => 2,
         'zfx_flag' => 0,
         'zxf' => 0
     );
     $url = "jwmis.hnie.edu.cn/jwweb/xscj/Stu_MyScore_rpt.aspx";
     $ch = curl_init($url);
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_REFERER, 'http://jwmis.hnie.edu.cn/jwweb/xscj/Stu_MyScore.aspx');
     curl_setopt($ch, CURLOPT_COOKIE,$_SESSION['cookie']);
     $data = curl_exec($ch);
     curl_close($ch);
 }
function query4($cookie){
    $starttime=microtime(true);
    $url = "jwmis.hnie.edu.cn/jwweb/XSCJ/Stu_MyScore_print_rpt.aspx?xn=2015&xq=0&rpt=1&rad=2&zfx=0";
    $ch = curl_init($url);
    // curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, sdch");
    // curl_setopt($ch, CURLOPT_MAXREDIRS,20);
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36");
    curl_setopt($ch, CURLOPT_REFERER, 'http://jwmis.hnie.edu.cn/jwweb/xscj/Stu_MyScore_rpt.aspx');
    curl_setopt($ch, CURLOPT_COOKIE,$cookie);
    $data = curl_exec($ch);
    // echo curl_error($ch);
    curl_close($ch);
    // echo str_replace('Stu_MyScore_Drawimg.aspx','http://jwmis.hnie.edu.cn/jwweb/XSCJ/Stu_MyScore_Drawimg.aspx',$data);
}
function query5($cookie){
    $starttime=microtime(true);
    $url = "http://jwmis.hnie.edu.cn/jwweb/XSCJ/Stu_MyScore_Drawimg.aspx?x=1&h=2&w=740&xnxq=20150&xn=2015&xq=0&rpt=1&rad=2&zfx=";
    $ch = curl_init($url);
    // curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, sdch");
    // curl_setopt($ch, CURLOPT_MAXREDIRS,20);
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36");
    curl_setopt($ch, CURLOPT_REFERER, 'http://jwmis.hnie.edu.cn/jwweb/xscj/Stu_MyScore_rpt.aspx');
    curl_setopt($ch, CURLOPT_COOKIE,$cookie);
    $data = curl_exec($ch);
    // echo curl_error($ch);
    curl_close($ch);
    echo $data;
}
query0($cookie);
query1($cookie);
query2($cookie);
query3($cookie);
query4($cookie);
query5($cookie);
