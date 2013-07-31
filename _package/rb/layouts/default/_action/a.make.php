<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

if (!$nowLayout || (!$theme&&!$_edittheme)) exit;
$themedir = $g['path_layout'].$nowLayout.'/_theme/'.($theme?$theme:$_edittheme);
$themecss = $themedir.'/theme.css';

if ($theme)
{
	@mkdir($themedir,0707);
	@chmod($themedir,0707);
}

$fp = fopen($themecss,'w');
fwrite($fp,trim(stripslashes($css)));
fclose($fp);

@chmod($themecss,0707);

getLink('reload','parent.','','');
?>