<?php
session_start();
$cookie=$_SESSION['cookie'];
isset($_POST['__VIEWSTATE'])?$__VIEWSTATE=$_POST['__VIEWSTATE']:'';
isset($_POST['typeName'])?$typeName=$_POST['typeName']:'';
isset($_POST['pcInfo'])?$pcInfo=$_POST['pcInfo']:'';
isset($_POST['txt_asmcdefsddsd'])?$txt_asmcdefsddsd=$_POST['txt_asmcdefsddsd']:'';
isset($_POST['txt_pewerwedsdfsdff'])?$txt_pewerwedsdfsdff=$_POST['txt_pewerwedsdfsdff']:'';
isset($_POST['txt_sdertfgsadscxcadsads'])?$txt_sdertfgsadscxcadsads=$_POST['txt_sdertfgsadscxcadsads']:'';
isset($_POST['dsdsdsdsdxcxdfgfg'])?$dsdsdsdsdxcxdfgfg=$_POST['dsdsdsdsdxcxdfgfg']:'';
isset($_POST['fgfggfdgtyuuyyuuckjg'])?$fgfggfdgtyuuyyuuckjg=$_POST['fgfggfdgtyuuyyuuckjg']:'';
function query($cookie,$typeName,$pcInfo,$txt_asmcdefsddsd,$dsdsdsdsdxcxdfgfg,$fgfggfdgtyuuyyuuckjg){
    $typeName = iconv("utf-8","gb2312",$typeName);
    $starttime=microtime(true);
    $type=iconv('utf-8', 'gb2312', '学生');
    $arr = array(
        '__VIEWSTATE' => $_SESSION['viewstate'],
        'pcInfo' => urlencode($pcInfo),
        'typeName' => $type,
        'dsdsdsdsdxcxdfgfg' => $dsdsdsdsdxcxdfgfg,
        'fgfggfdgtyuuyyuuckjg'=> $fgfggfdgtyuuyyuuckjg,
        'Sel_Type' => 'STU',
        'txt_asmcdefsddsd'=>$txt_asmcdefsddsd,
        'txt_pewerwedsdfsdff'=>'',
        'txt_sdertfgsadscxcadsads'=>'',
        'sbtState' => ''
    );
    echo '<pre/>';
    var_dump($arr);
    var_dump($_SESSION);
    $url = "jwmis.hnie.edu.cn/jwweb/_data/index_LOGIN.aspx";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_REFERER, 'http://jwmis.hnie.edu.cn/jwweb/_data/index_LOGIN.aspx');
    curl_setopt($ch, CURLOPT_COOKIE,$_SESSION['cookie']);
    $data = curl_exec($ch);
    curl_close($ch);
}
query($cookie,$typeName,$pcInfo,$txt_asmcdefsddsd,$dsdsdsdsdxcxdfgfg,$fgfggfdgtyuuyyuuckjg);
header("location:personInfo.php#/actionsheet");
?>
