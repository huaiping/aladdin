<?php
if(isset($_GET['char']) && $_GET['char'] != null ){
    $char = $_GET['char'];
}
if(isset($_GET['user']) && $_GET['user'] != null ){
    $user = $_GET['user'];
}
//$OutputSize = min(512, empty($_GET['size'])?36:intval($_GET['size']));
$OutputSize = 128;
require(dirname(__FILE__) . "/avatars.class.php");
$Avatar = new MDAvtars($char, 512);
$Avatar->Output2Browser($OutputSize);
$Avatar->Save('../webroot/avatar/'.$user.'_48.png', 48);
$Avatar->Save('../webroot/avatar/'.$user.'_128.png', 128);
$Avatar->Save('../webroot/avatar/'.$user.'_150.png', 150);
$Avatar->Free();
?>
