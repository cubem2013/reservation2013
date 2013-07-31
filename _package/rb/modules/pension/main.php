<?php
if(!defined('__KIMS__')) exit;

include_once $g['dir_module'].'var/var.php'; //모듈변수파일 인클루드

$theme = $d['mymodule']['theme'] ? $d['mymodule']['theme'] : 'default'; //지정테마
$mode = $mode ? $mode : 'main'; //테마 초기접속모드
$dispType = $g['mobile']&&$_SESSION['pcmode']!='Y' ? '_mobile' : '_pc'; //모바일,PC모드구분

if ($dispType == '_mobile')
{
	$theme = $d['mymodule']['theme_m'] ? $d['mymodule']['theme_m'] : 'default'; //모바일테마
}

$_HM['layout'] = $_HM['layout'] ? $_HM['layout'] : $d['mymodule']['layout']; //레이아웃

$g['dir_module_skin'] = $g['dir_module'].'theme/'.$dispType.'/'.$theme.'/'; //테마폴더 경로
$g['url_module_skin'] = $g['url_module'].'/theme/'.$dispType.'/'.$theme; //테마폴더 URL
$g['img_module_skin'] = $g['url_module_skin'].'/image'; //테마 이미지폴더 URL

$g['dir_module_mode'] = $g['dir_module_skin'].$mode; //테마 선택모드 경로
$g['url_module_mode'] = $g['url_module_skin'].'/'.$mode; //테마 선택모드 URL

//연결메뉴
if($d['mymodule']['jointmenu'])
{
	$_CA = explode('/',$d['mymodule']['jointmenu']);
	$g['location'] = '<a href="'.RW(0).'">HOME</a>';
	$_tmp['count'] = count($_CA);
	$_tmp['split_id'] = '';
	for ($_i = 0; $_i < $_tmp['count']; $_i++)
	{
		$_tmp['location'] = getDbData($table['s_menu'],"id='".$_CA[$_i]."'",'*');
		$_tmp['split_id'].= ($_i?'/':'').$_tmp['location']['id'];
		$g['location']   .= ' &gt; <a href="'.RW('c='.$_tmp['split_id']).'">'.$_tmp['location']['name'].'</a>';
		$_HM['uid'] = $_tmp['location']['uid'];
	}
}

$g['main'] = $g['dir_module_mode'].'.php'; //출력파일
?>