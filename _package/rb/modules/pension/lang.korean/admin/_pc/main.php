<?php include_once $g['path_module'].$module.'/var/var.php'?>

<div id="configbox">

<form name="procForm" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return saveCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $module?>" />
<input type="hidden" name="a" value="config" />

<table>
<tr>
	<td class="td1">레 이 아 웃</td>
	<td class="td2">
		<select name="layout" class="select1">
		<option value="">&nbsp;+ 사이트 대표레이아웃</option>
		<?php $dirs = opendir($g['path_layout'])?>
		<?php while(false !== ($tpl = readdir($dirs))):?>
		<?php if($tpl=='.' || $tpl == '..' || $tpl == '_blank' || is_file($g['path_layout'].$tpl))continue?>
		<?php $dirs1 = opendir($g['path_layout'].$tpl)?>
		<option value="">--------------------------------</option>
		<?php while(false !== ($tpl1 = readdir($dirs1))):?>
		<?php if(!strstr($tpl1,'.php') || $tpl1=='_main.php')continue?>
		<option value="<?php echo $tpl?>/<?php echo $tpl1?>"<?php if($d['mymodule']['layout']==$tpl.'/'.$tpl1):?> selected="selected"<?php endif?>>ㆍ<?php echo getFolderName($g['path_layout'].$tpl)?>(<?php echo str_replace('.php','',$tpl1)?>)</option>
		<?php endwhile?>
		<?php closedir($dirs1)?>
		<?php endwhile?>
		<?php closedir($dirs)?>
		</select>
	</td>
</tr>
<tr>
	<td class="td1">지정테마</td>
	<td class="td2">
		<select name="theme" class="select1">
		<option value="">&nbsp;+ PC모드 대표테마</option>
		<option value="">--------------------------------</option>
		<?php $tdir = $g['path_module'].$module.'/theme/_pc/'?>
		<?php $dirs = opendir($tdir)?>
		<?php while(false !== ($skin = readdir($dirs))):?>
		<?php if($skin=='.' || $skin == '..' || is_file($tdir.$skin))continue?>
		<option value="_pc/<?php echo $skin?>" title="<?php echo $skin?>"<?php if($d['mymodule']['theme']=='_pc/'.$skin):?> selected="selected"<?php endif?>>ㆍ<?php echo getFolderName($tdir.$skin)?>(<?php echo $skin?>)</option>
		<?php endwhile?>
		<?php closedir($dirs)?>
		</select>
	</td>
</tr>
<tr>
	<td class="td1">(모바일접속)</td>
	<td class="td2">
		<select name="theme_m" class="select1">
		<option value="">&nbsp;+ 모바일 대표테마</option>
		<option value="">--------------------------------</option>
		<?php $tdir = $g['path_module'].$module.'/theme/_mobile/'?>
		<?php $dirs = opendir($tdir)?>
		<?php while(false !== ($skin = readdir($dirs))):?>
		<?php if($skin=='.' || $skin == '..' || is_file($tdir.$skin))continue?>
		<option value="_mobile/<?php echo $skin?>" title="<?php echo $skin?>"<?php if($d['mymodule']['theme_m']=='_mobile/'.$skin):?> selected="selected"<?php endif?>>ㆍ<?php echo getFolderName($tdir.$skin)?>(<?php echo $skin?>)</option>
		<?php endwhile?>
		<?php closedir($dirs)?>
		</select>
	</td>
</tr>

<tr>
	<td class="td1">연 결 메 뉴	</td>
	<td class="td2">
		<select name="jointmenu" class="select1">
		<option value="">&nbsp;+ 사용안함</option>
		<option value="">--------------------------------</option>
		<?php include_once $g['path_core'].'function/menu1.func.php'?>
		<?php $cat=$d['mymodule']['jointmenu']?>
		<?php getMenuShowSelect($s,$table['s_menu'],0,0,0,0,0,'')?>
		</select>
	</td>
</tr>
</table>

<div class="submitbox">
	<input type="button" class="btngray" value=" 사용자페이지 보기 " onclick="window.open('<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $module?>');" />
	<input type="submit" class="btnblue" value=" 확인 " />
</div>

</form>

</div>


<script type="text/javascript">
//<![CDATA[
function saveCheck(f) 
{
	return confirm('정말로 실행하시겠습니까?');
}
//]]>
</script>
