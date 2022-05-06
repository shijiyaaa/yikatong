<?php
function wlog($f,$val){
    $file  = './log/'.$f.'.txt';
    $content = date('Y-m-d H:i:s',time())." ->> ";
    $content=$content.$val;
    $content=$content."\n";
    $f  = file_put_contents($file, $content,FILE_APPEND);
    $data = file_get_contents($file);
}
if($_GET['passwd']!=12345)
exit("这是一个dis小孟的网站.你扑了个空.....");
wlog('log','姓名: '.$_GET['xm'].' 理由: '.$_GET['ly']);
wlog(date('Y-m-d',time()),json_encode($_GET,JSON_UNESCAPED_UNICODE));
?>