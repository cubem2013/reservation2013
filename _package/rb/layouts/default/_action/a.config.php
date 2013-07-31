<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$_tmpdfile = $g['path_layout'].$nowLayout.'/_var/_var.php';
$d['layout'] = array();
include $_tmpdfile;

$d['layout']['begin'] = 1;

if ($changeType == 'theme')
{
	$d['layout']['theme'] = $theme;
	if ($logo_change)
	{
		$d['layout']['imglogo_use'] = "1";
	}
	$d['layout']['imglogo_w'] = "200";
	$d['layout']['imglogo_h'] = "50";
	//$d['layout']['dsp_side_login'] = "1";
	//$d['layout']['dsp_side_menu'] = "1";
	//$d['layout']['dsp_side_menuhide'] = "";
	//$d['layout']['dsp_side_hot'] = "1";
	//$d['layout']['dsp_side_hotnum'] = "15";
	//$d['layout']['imglogo_use'] = "1";
	//$d['layout']['dsp_login'] = "1";
	//$d['layout']['dsp_search'] = "1";
	//$d['layout']['dsp_topmenu'] = "1";
	$d['layout']['menunum'] = "8";
	$d['layout']['title_size'] = "40";
	$d['layout']['title_font'] = "malgun gothic";

	if ($theme == 'style01')
	{
		//$d['layout']['imglogo_use'] = "";
		//$d['layout']['dsp_login'] = "";
		//$d['layout']['dsp_search'] = "";
		//$d['layout']['dsp_topmenu'] = "";
		//$d['layout']['dsp_side'] = "";
		$d['layout']['title_t'] = "20";
		$d['layout']['title_b'] = "50";
		$d['layout']['title_s'] = "42";
		$d['layout']['title_color'] = "#333333";
		$d['layout']['height_header'] = "90";
		$d['layout']['bg_header'] = "#ffffff";
		$d['layout']['height_header_bt'] = "0";
		$d['layout']['bg_header_bt'] = "#DF1233";
		$d['layout']['height_header_bb'] = "0";
		$d['layout']['bg_header_bb'] = "#4A4646";
		$d['layout']['memberlink_color'] = "#333333";
		$d['layout']['split_color'] = "#c0c0c0";
		$d['layout']['search_border'] = "#B0B0B0";
	}
	if ($theme == 'style02')
	{
		//$d['layout']['dsp_login'] = "";
		//$d['layout']['dsp_side'] = "";
		$d['layout']['title_t'] = "30";
		$d['layout']['title_b'] = "50";
		$d['layout']['title_s'] = "42";
		$d['layout']['title_color'] = "#FFFFFF";
		$d['layout']['height_header'] = "100";
		$d['layout']['bg_header'] = "#333333";
		$d['layout']['height_header_bt'] = "0";
		$d['layout']['bg_header_bt'] = "#DF1233";
		$d['layout']['height_header_bb'] = "1";
		$d['layout']['bg_header_bb'] = "#000000";
		$d['layout']['memberlink_color'] = "#DEDEDE";
		$d['layout']['split_color'] = "#525252";
		$d['layout']['search_border'] = "#000000";
	}
	if ($theme == 'style03')
	{
		//$d['layout']['dsp_login'] = "";
		//$d['layout']['dsp_side'] = "";
		$d['layout']['title_t'] = "30";
		$d['layout']['title_b'] = "50";
		$d['layout']['title_s'] = "42";
		$d['layout']['title_color'] = "#FFFFFF";
		$d['layout']['height_header'] = "100";
		$d['layout']['bg_header'] = "#333333";
		$d['layout']['height_header_bt'] = "0";
		$d['layout']['bg_header_bt'] = "#DF1233";
		$d['layout']['height_header_bb'] = "10";
		$d['layout']['bg_header_bb'] = "#000000";
		$d['layout']['memberlink_color'] = "#DEDEDE";
		$d['layout']['split_color'] = "#525252";
		$d['layout']['search_border'] = "#000000";
	}
	if ($theme == 'style04')
	{
		$d['layout']['menunum'] = "5";
		//$d['layout']['dsp_side'] = "";
		$d['layout']['title_t'] = "15";
		$d['layout']['title_b'] = "22";
		$d['layout']['title_s'] = "15";
		$d['layout']['title_size'] = "25";
		$d['layout']['title_color'] = "#FFFFFF";
		$d['layout']['height_header'] = "56";
		$d['layout']['bg_header'] = "#1B1B1B";
		$d['layout']['height_header_bt'] = "1";
		$d['layout']['bg_header_bt'] = "#424242";
		$d['layout']['height_header_bb'] = "1";
		$d['layout']['bg_header_bb'] = "#424242";
		$d['layout']['memberlink_color'] = "#EFEFEF";
		$d['layout']['split_color'] = "#666666";
		$d['layout']['search_border'] = "#000000";
		$d['layout']['imglogo_w'] = "112";
		$d['layout']['imglogo_h'] = "28";
	}
	if ($theme == 'style05')
	{
		$d['layout']['menunum'] = "6";
		//$d['layout']['dsp_login'] = "";
		//$d['layout']['dsp_side'] = "";
		$d['layout']['title_t'] = "30";
		$d['layout']['title_b'] = "30";
		$d['layout']['title_s'] = "22";
		$d['layout']['title_color'] = "#333333";
		$d['layout']['height_header'] = "110";
		$d['layout']['bg_header'] = "#ffffff";
		$d['layout']['height_header_bt'] = "5";
		$d['layout']['bg_header_bt'] = "#DF1233";
		$d['layout']['height_header_bb'] = "3";
		$d['layout']['bg_header_bb'] = "#C3C3C3";
		$d['layout']['memberlink_color'] = "#333333";
		$d['layout']['split_color'] = "#c0c0c0";
		$d['layout']['search_border'] = "#B0B0B0";

	}

	if ($logo_change)
	{
		if ($theme == 'style02'||$theme == 'style03'||$theme == 'style04')
		{
			copy($g['path_layout'].$nowLayout.'/_var/logo_white.png',$g['path_layout'].$nowLayout.'/_var/logo.png');
		}
		else {
			copy($g['path_layout'].$nowLayout.'/_var/logo_black.png',$g['path_layout'].$nowLayout.'/_var/logo.png');
		}
		$d['layout']['imglogo'] = 'logo.png';
	}
}

if ($changeType == 'display')
{
	$d['layout']['dsp_login'] = $dsp_login;
	$d['layout']['dsp_search'] = $dsp_search;
	$d['layout']['dsp_topmenu'] = $dsp_topmenu;
	$d['layout']['dsp_side'] = $dsp_side;
	$d['layout']['dsp_side_login'] = $dsp_side_login;
	$d['layout']['dsp_side_menu'] = $dsp_side_menu;
	$d['layout']['dsp_side_menuhide'] = $dsp_side_menuhide;
	$d['layout']['dsp_side_hot'] = $dsp_side_hot;
	$d['layout']['dsp_side_hotnum'] = $dsp_side_hotnum;
}

if ($changeType == 'front')
{
	if ($d['layout']['mainType_layout']&&$mainType_layout)
	{
		$d['layout']['bbs1'] = $bbs1;
		$d['layout']['sort1'] = $sort1;
		$d['layout']['bbs1_day'] = trim($bbs1_day);
		$d['layout']['bbs1_num'] = trim($bbs1_num);
	}
	$d['layout']['mainType_layout'] = $mainType_layout;
	$d['layout']['mainType_rb'] = $mainType_rb;
}

if ($changeType == 'detail')
{
	$_newupload = false;
	$tmpname	= $_FILES['upfile']['tmp_name'];
	$realname	= $_FILES['upfile']['name'];
	$fileExt	= strtolower(getExt($realname));
	$fileExt	= $fileExt == 'jpeg' ? 'jpg' : $fileExt;
	$photo		= 'logo.'.$fileExt;
	$saveFile1	= $g['path_layout'].$nowLayout.'/_var/'.$d['layout']['imglogo'];
	$saveFile2	= $g['path_layout'].$nowLayout.'/_var/'.$photo;

	if (is_uploaded_file($tmpname))
	{
		if (!strstr('[gif][jpg][png]',$fileExt))
		{
			getLink('','','gif/jpg/png 파일만 등록할 수 있습니다.','');
		}
		if (is_file($saveFile1))
		{
			unlink($saveFile1);
		}

		move_uploaded_file($tmpname,$saveFile2);
		@chmod($saveFile2,0707);
		$isize=getimagesize($saveFile2);

		$d['layout']['imglogo'] = $photo;
		$d['layout']['imglogo_w'] = $isize[0];
		$d['layout']['imglogo_h'] = $isize[1];
		$_newupload = true;
	}

	$tmpname	= $_FILES['upfile1']['tmp_name'];
	$realname	= $_FILES['upfile1']['name'];
	$fileExt	= strtolower(getExt($realname));
	$fileExt	= $fileExt == 'jpeg' ? 'jpg' : $fileExt;
	$photo		= 'bgtitle.'.$fileExt;
	$saveFile1	= $g['path_layout'].$nowLayout.'/_var/'.$d['layout']['bg'];
	$saveFile2	= $g['path_layout'].$nowLayout.'/_var/'.$photo;

	if (is_uploaded_file($tmpname))
	{
		if (!strstr('[gif][jpg][png]',$fileExt))
		{
			getLink('','','gif/jpg/png 파일만 등록할 수 있습니다.','');
		}
		if (is_file($saveFile1))
		{
			unlink($saveFile1);
		}

		move_uploaded_file($tmpname,$saveFile2);
		@chmod($saveFile2,0707);

		$d['layout']['bg'] = $photo;
	}

	$d['layout']['height_header'] = trim($height_header);
	$d['layout']['title'] = trim($title);
	$d['layout']['title_t'] = trim($title_t);
	$d['layout']['title_b'] = trim($title_b);
	$d['layout']['title_s'] = trim($title_s);
	$d['layout']['title_size'] = trim($title_size);
	$d['layout']['title_font'] = trim($title_font);
	$d['layout']['imglogo_use'] = is_file($g['path_layout'].$nowLayout.'/_var/'.$d['layout']['imglogo']) ? $imglogo_use : 0;
	$d['layout']['bg_use'] = $bg_use;
	$d['layout']['bg_o'] = $bg_o;
	$d['layout']['title_color'] = $title_color;
	$d['layout']['memberlink_color'] = $memberlink_color;
	$d['layout']['split_color'] = $split_color;
	$d['layout']['menunum'] = $menunum;
	$d['layout']['homestr'] = trim($homestr);
	$d['layout']['homestr_use'] = $homestr_use;
	$d['layout']['bg_header'] = trim($bg_header);
	$d['layout']['height_header_bt'] = trim($height_header_bt);
	$d['layout']['bg_header_bt'] = trim($bg_header_bt);
	$d['layout']['height_header_bb'] = trim($height_header_bb);
	$d['layout']['bg_header_bb'] = trim($bg_header_bb);
	$d['layout']['search_border'] = trim($search_border);

	if (!$_newupload)
	{
		$d['layout']['imglogo_w'] = trim($imglogo_w);
		$d['layout']['imglogo_h'] = trim($imglogo_h);
	}
}
if ($changeType == 'ad')
{
	$tmpname	= $_FILES['upfile']['tmp_name'];
	$realname	= $_FILES['upfile']['name'];
	$fileExt	= strtolower(getExt($realname));
	$fileExt	= $fileExt == 'jpeg' ? 'jpg' : $fileExt;
	$photo		= 'ad.'.$fileExt;
	$saveFile1	= $g['path_layout'].$nowLayout.'/_var/'.$d['layout']['ad_img'];
	$saveFile2	= $g['path_layout'].$nowLayout.'/_var/'.$photo;

	if (is_uploaded_file($tmpname))
	{
		if (!strstr('[gif][jpg][png]',$fileExt))
		{
			getLink('','','이미지는 gif/jpg/png 파일만 등록할 수 있습니다.','');
		}
		if (is_file($saveFile1))
		{
			unlink($saveFile1);
		}

		move_uploaded_file($tmpname,$saveFile2);
		@chmod($saveFile2,0707);
		$d['layout']['ad_img'] = $photo;
	}
	$tmpname	= $_FILES['upfile1']['tmp_name'];
	$realname	= $_FILES['upfile1']['name'];
	$fileExt	= strtolower(getExt($realname));
	$fileExt	= $fileExt == 'jpeg' ? 'jpg' : $fileExt;
	$photo		= 'ad.'.$fileExt;
	$saveFile1	= $g['path_layout'].$nowLayout.'/_var/'.$d['layout']['ad_swf'];
	$saveFile2	= $g['path_layout'].$nowLayout.'/_var/'.$photo;

	if (is_uploaded_file($tmpname))
	{
		if (!strstr('[swf]',$fileExt))
		{
			getLink('','','플래쉬는 swf 파일만 등록할 수 있습니다.','');
		}
		if (is_file($saveFile1))
		{
			unlink($saveFile1);
		}

		move_uploaded_file($tmpname,$saveFile2);
		@chmod($saveFile2,0707);
		$d['layout']['ad_swf'] = $photo;
	}


	$d['layout']['adtype'] = $adtype;
	$d['layout']['ad_imglink'] = trim($ad_imglink);
	$d['layout']['ad_imgtarget'] = $ad_imgtarget;

	$_adfile = $g['path_layout'].$nowLayout.'/_var/_ad.txt';
	$fp = fopen($_adfile,'w');
	fwrite($fp,trim(stripslashes($adcode)));
	fclose($fp);

	@chmod($_adfile,0707);
}
if ($changeType == 'sns')
{
	$d['layout']['sns_hide'] = $sns_hide;
	$d['layout']['sns_t'] = $sns_t;
	$d['layout']['sns_f'] = $sns_f;
	$d['layout']['sns_m'] = $sns_m;
	$d['layout']['sns_y'] = $sns_y;
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