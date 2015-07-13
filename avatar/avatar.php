<?php
if(isset($_GET['char']) && $_GET['char'] != null ){
	$Char = $_GET['char'];
}
//$OutputSize = min(512, empty($_GET['size'])?36:intval($_GET['size']));
$OutputSize = 128;
require(dirname(__FILE__) . "/avatars.class.php");
$Avatar = new MDAvtars($Char, 512);
$Avatar->Output2Browser($OutputSize);
//$Avatar->Save('./avatars/Avatar64.png', 64);
$Avatar->Free();
