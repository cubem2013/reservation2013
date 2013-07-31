<?php
function getLayoutLogo($layout)
{
	if ($layout['imglogo_use'])
	{
		return '<a href="'.$GLOBALS['g']['s'].'/?r='.$GLOBALS['r'].'" class="_logo_img"><img src="'.$GLOBALS['g']['s'].'/layouts/'.$layout['dir'].'/_var/'.$layout['imglogo'].'" width="'.$layout['imglogo_w'].'" height="'.$layout['imglogo_h'].'" alt="" /></a>';
	}
	else {
		return '<h1 class="_logo_txt"><a id="_layout_title_color_" href="'.$GLOBALS['g']['s'].'/?r='.$GLOBALS['r'].'" style="font-family:'.$layout['title_font'].';font-size:'.$layout['title_size'].'px;color:'.$layout['title_color'].';">'.$layout['title'].'</a></h1>';
	}
}

include  $g['path_layout'].$d['layout']['dir'].'/_var/_var.php';

if (isset($_layoutAction))
{
	include $g['path_layout'].$d['layout']['dir'].'/_action/a.'.$_layoutAction.'.php';
	exit;
}

if ($d['layout']['bg_use']) $d['layout']['_bg'] = ' style="background:url(\''.$g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['bg'].'\') '.$d['layout']['bg_o'].';"';
if ($d['layout']['message_color']) $d['layout']['_message_color'] = ' style="color:'.$d['layout']['message_color'].';"';
if ($d['layout']['memberlink_color']) $d['layout']['_memberlink_color'] = ' style="color:'.$d['layout']['memberlink_color'].';"';

$d['layout']['_is_ownmain'] = $d['layout']['mainType_layout']&&!$system&&!$_themePage&&$_HP['id']=='main';
$d['layout']['_is_content'] = $d['layout']['mainType_rb']||$system||$_themePage||$_HP['id']!='main';

if (isset($_themeConfig))
{
	if (!$my['admin']) getLink($g['s'].'/?r='.$r,'','권한이 없습니다.','');
	$g['main'] = $g['path_layout'].$d['layout']['dir'].'/_admin/main.php';

	$g['dir_module_mode'] = $g['path_layout'].$d['layout']['dir'].'/_admin/main';
	$g['url_module_mode'] = $g['s'].'/layouts/'.$d['layout']['dir'].'/_admin/main';
	$d['layout']['_twhite'] = false;
}
if (isset($_themePage))
{
	$g['main'] = $g['path_layout'].$d['layout']['dir'].'/_pages/'.$_themePage.'.php';
	if (strpos($_themePage,'jax/'))
	{
		include $g['main'];
		exit;
	}
	else {
		$g['dir_module_mode'] = $g['path_layout'].$d['layout']['dir'].'/_pages/'.$_themePage;
		$g['url_module_mode'] = $g['s'].'/layouts/'.$d['layout']['dir'].'/_pages/'.$_themePage;
	}
}
?>