<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$_tmpdfile = $g['path_layout'].$nowLayout.'/_var/_var.php';
$d['layout'] = array();
include $_tmpdfile;

if ($imgType=='logo')
{
	@unlink($g['path_layout'].$nowLayout.'/_var/'.$d['layout']['imglogo']);

	$d['layout']['imglogo'] = '';
	$d['layout']['imglogo_w'] = 0;
	$d['layout']['imglogo_h'] = 0;
	$d['layout']['imglogo_use'] = '';
}
if ($imgType=='bg')
{
	@unlink($g['path_layout'].$nowLayout.'/_var/'.$d['layout']['bg']);

	$d['layout']['bg'] = '';
	$d['layout']['bg_use'] = '';
}
if ($imgType=='ad_img')
{
	@unlink($g['path_layout'].$nowLayout.'/_var/'.$d['layout']['ad_img']);

	$d['layout']['ad_img'] = '';
}
if ($imgType=='ad_swf')
{
	@unlink($g['path_layout'].$nowLayout.'/_var/'.$d['layout']['ad_swf']);

	$d['layout']['ad_swf'] = '';
}

$fp = fopen($_tmpdfile,'w');
fwrite($fp, "<?php\n");
foreach ($d['layout'] as $key => $val)
{
	fwrite($fp, "\$d['layout']['".$key."'] = \"".$val."\";\n");
}
fwrite($fp, "?>");
fclose($fp);
@chmod($_tmpdfile,0707);


getLink('reload','parent.','','');
?>