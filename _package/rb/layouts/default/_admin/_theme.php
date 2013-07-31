<?php
$_themes=array();
$dirs = opendir($g['path_layout'].$d['layout']['dir'].'/_theme/');
while(false !== ($_theme = readdir($dirs)))
{
	if(strstr($_theme,'.'))continue;
	$_themes[] = $_theme;
}
closedir($dirs);
?>

<div class="guide">
<span class="b"><?php echo $my[$_HS['nametype']]?>님은 어떤 테마가 마음에 드시나요?</span><br /><br />
이 레이아웃은 현재  <span class="b"><?php echo count($_themes)?>개</span>의 테마가 등록되어 있습니다.<br />
원하시는 테마를 선택한 후 변경하기 버튼을 클릭해 주세요.<br />
테마에 따라 메인메뉴바의 색상이 변경됩니다.<br /> 
변경한 테마가 적용되지 않을 경우 새로고침해 주세요.<br /> 
</div>

<form name="themeForm" method="post" action="<?php echo $g['s']?>/" onsubmit="return configCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="_layoutAction" value="config" />
<input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />
<input type="hidden" name="changeType" value="<?php echo $_themeConfig?>" />

<table>
<?php foreach($_themes as $_theme):?>
<tr>
<td>
<label class="b"><input type="radio" name="theme" value="<?php echo $_theme?>"<?php if($d['layout']['theme']==$_theme):?> checked="checked"<?php endif?> /><?php echo $_theme?></label>
</td>
<td class="t4">
<?php if(!strpos('_style01,style02,style03,style04,style05,',$_theme)):?>
	<?php if($d['layout']['theme']==$_theme):?>
	<img src="<?php echo $g['img_core']?>/_public/btn_del.gif" alt="" title="삭제" class="filter" />
	<?php else:?>
	<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=deletetheme&amp;nowLayout=<?php echo $d['layout']['dir']?>&amp;theme=<?php echo $_theme?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');"><img src="<?php echo $g['img_core']?>/_public/btn_del.gif" alt="" title="삭제" /></a>
	<?php endif?>
	<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=<?php echo $_themeConfig?>&amp;prelayout=<?php echo $prelayout?>&amp;_edittheme=<?php echo $_theme?>"><img src="<?php echo $g['img_core']?>/_public/btn_edit.gif" alt="" title="수정" /></a>
<?php endif?>
</td>
</tr>
<?php endforeach?>
</table>

<br />
<br />

<input type="submit" value=" 테마 변경하기 " class="btnblue" />
<label><input type="checkbox" name="logo_change" value="1" checked="checked" />테마 변경시 기본 로고 이미지로 변경</label>
</form>

<div class="more">
원하시는 테마가 없나요? <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=<?php echo $_themeConfig?>&amp;prelayout=<?php echo $prelayout?>&amp;newtheme=Y" class="u">새 테마만들기</a><br />
테마를 직접 만들어서 사용하고 싶다면 새 테마만들기 링크를 클릭하세요.<br />
기본테마는 편집할 수 없으나 새로 추가한 테마는 수정/삭제가 가능합니다.<br />
이 작업은 적어도 HTML / CSS 에 대한 기본지식이 필요합니다.<br />
</div>
<br />

<div<?php if(!$newtheme&&!$_edittheme):?> class="hide<?php endif?>">
<form name="makeForm" method="post" action="<?php echo $g['s']?>/" onsubmit="return makeCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="_layoutAction" value="make" />
<input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />

<textarea name="css" rows="30" cols="90" class="textarea">
<?php readfile($g['path_layout'].$d['layout']['dir'].'/_theme/'.($_edittheme?$_edittheme.'/theme.css':'readme.txt'))?>
</textarea>

<?php if($_edittheme):?>
<div class="more">
<?php echo $_edittheme?> 테마의 수정모드입니다.<br />
테마용 CSS 가 완성되었을 경우 가급접 주석을 제거한 후 저장해 주세요<br />
테마명칭은 영문대소문자/숫자/_ 만 사용가능합니다.<br />
</div>
<input type="hidden" name="_edittheme" value="<?php echo $_edittheme?>" />
<input type="submit" value=" 수정하기 " class="btnblue" /><br /><br />
<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=<?php echo $_themeConfig?>&amp;prelayout=<?php echo $prelayout?>" class="u">수정취소</a>
<?php else:?>
<div class="more">
위의 CSS는 sample 테마의 샘플 소스코드입니다.<br />
이 CSS를 원하시는 형태로 수정하신 후에 새로운 명칭을 입력하고 만들기 버튼을 클릭하시면 새 테마로 등록됩니다.<br />
테마용 CSS 가 완성되었을 경우 가급접 주석을 제거한 후 저장해 주세요<br />
테마명칭은 영문대소문자/숫자/_ 만 사용가능합니다.<br />
</div>
테마명칭 : 
<input type="text" name="theme" class="input" value="" /> 
<input type="submit" value=" 새로 만들기 " class="btnblue" />
<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=<?php echo $_themeConfig?>&amp;prelayout=<?php echo $prelayout?>" class="u">취소</a>
<?php endif?>
</form>
</div>
<br />
<br />
<br />

