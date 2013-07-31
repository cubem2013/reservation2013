<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

if (!$nowLayout || !$theme) exit;

include $g['path_core'].'function/dir.func.php';
$themedir = $g['path_layout'].$nowLayout.'/_theme/'.$theme;
DirDelete($themedir);

getLink(str_replace('&newtheme=Y','',str_replace('&_edittheme='.$theme,'',$_SERVER['HTTP_REFERER'])),'parent.','','');
?>
