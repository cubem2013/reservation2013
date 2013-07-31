<div class="guide">
<span class="b">디테일한 설정을 통해 나만의 디자인을 완성할 수 있습니다.</span><br /><br />
홈페이지 제목을 변경하거나 이미지로고,배경이미지 등을 설정할 수 있습니다.<br />
아래의 설정을 통해 더 보기좋은 디자인을 완성해 보세요.<br /> 
변경사항이 적용되지 않을 경우 새로고침해 주세요.<br /> 
</div>

<form name="themeForm" method="post" action="<?php echo $g['s']?>/" enctype="multipart/form-data" onsubmit="return configCheck1(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="_layoutAction" value="config" />
<input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />
<input type="hidden" name="changeType" value="<?php echo $_themeConfig?>" />


<table>
<tr>
<td class="t1">홈페이지 제목</td>
<td class="t2">:</td>
<td class="t3">
	<input type="text" name="title" class="input" value="<?php echo $d['layout']['title']?>" />
</td>
</tr>
<tr>
<td class="t1">제목 폰트/크기/색상</td>
<td class="t2">:</td>
<td class="t3">
	<input type="text" name="title_font" class="input" value="<?php echo $d['layout']['title_font']?>" />
	크기 <input type="text" name="title_size" class="input sf" value="<?php echo $d['layout']['title_size']?>" maxlength="3" /><span class="small">px</span>
	색상 
	<input type="text" name="title_color" id="title_color_" class="input sf1" value="<?php echo $d['layout']['title_color']?>" maxlength="7" />
	<img src="<?php echo $g['img_core']?>/_public/btn_color.gif" class="hand" alt="" onclick="getLayerBox('<?php echo $g['s']?>/_core/opensrc/colorjack/color.php?color=<?php echo substr($d['layout']['title_color'],1,6)?>&dropf=title_color_&callback=colorChange','색상선택',220,260,event,'','r');" /> 
	<span class="small">(공백:기본값)</span>
</td>
</tr>
<tr>
<td class="t1">헤더 높이/배경색</td>
<td class="t2">:</td>
<td class="t3">
	높이 
	<input type="text" name="height_header" class="input sf" value="<?php echo $d['layout']['height_header']?>" maxlength="3" /><span class="small">px</span>
	배경색 
	<input type="text" name="bg_header" id="bg_header_" class="input sf1" value="<?php echo $d['layout']['bg_header']?>" maxlength="7" />
	<img src="<?php echo $g['img_core']?>/_public/btn_color.gif" class="hand" alt="" onclick="getLayerBox('<?php echo $g['s']?>/_core/opensrc/colorjack/color.php?color=<?php echo substr($d['layout']['bg_header'],1,6)?>&dropf=bg_header_&callback=colorChange','색상선택',220,260,event,'','r');" /> 
	<span class="small">(공백:기본값)</span>

</td>
</tr>
<tr>
<td class="t1">헤더 상단틀/색상</td>
<td class="t2">:</td>
<td class="t3">
	<select name="height_header_bt" onchange="headerBorder(this,'top');">
	<?php for($i=0;$i<31;$i++):?><option value="<?php echo $i?>"<?php if($d['layout']['height_header_bt']==$i):?> selected="selected"<?php endif?>><?php echo $i?>px</option><?php endfor?>
	</select>
	배경색 
	<input type="text" name="bg_header_bt" id="bg_header_bt_" class="input sf1" value="<?php echo $d['layout']['bg_header_bt']?>" maxlength="7" />
	<img src="<?php echo $g['img_core']?>/_public/btn_color.gif" class="hand" alt="" onclick="getLayerBox('<?php echo $g['s']?>/_core/opensrc/colorjack/color.php?color=<?php echo substr($d['layout']['bg_header_bt'],1,6)?>&dropf=bg_header_bt_&callback=colorChange','색상선택',220,260,event,'','r');" /> 
	<span class="small">(공백:기본값)</span>
</td>
</tr>
<tr>
<td class="t1">헤더 하단틀/색상</td>
<td class="t2">:</td>
<td class="t3">
	<select name="height_header_bb" onchange="headerBorder(this,'bottom');">
	<?php for($i=0;$i<31;$i++):?><option value="<?php echo $i?>"<?php if($d['layout']['height_header_bb']==$i):?> selected="selected"<?php endif?>><?php echo $i?>px</option><?php endfor?>
	</select>
	배경색 
	<input type="text" name="bg_header_bb" id="bg_header_bb_" class="input sf1" value="<?php echo $d['layout']['bg_header_bb']?>" maxlength="7" />
	<img src="<?php echo $g['img_core']?>/_public/btn_color.gif" class="hand" alt="" onclick="getLayerBox('<?php echo $g['s']?>/_core/opensrc/colorjack/color.php?color=<?php echo substr($d['layout']['bg_header_bb'],1,6)?>&dropf=bg_header_bb_&callback=colorChange','색상선택',220,260,event,'','r');" /> 
	<span class="small">(공백:기본값)</span>

</td>
</tr>
<tr>
<td class="t1">위치설정</td>
<td class="t2">:</td>
<td class="t3">
	타이틀(로고) <input type="text" name="title_t" class="input sf" value="<?php echo $d['layout']['title_t']?>" maxlength="3" /><span class="small">px</span>
	멤버링크 <input type="text" name="title_b" class="input sf" value="<?php echo $d['layout']['title_b']?>" maxlength="3" /><span class="small">px</span>
	검색폼 <input type="text" name="title_s" class="input sf" value="<?php echo $d['layout']['title_s']?>" maxlength="3" /><span class="small">px (최상단으로부터의 간격)</span>
</td>
</tr>
<tr>
<td class="t1">메뉴출력 옵션</td>
<td class="t2">:</td>
<td class="t3">
	<input type="text" name="homestr" class="input sf1" value="<?php echo $d['layout']['homestr']?>" />
	<label><input type="checkbox" name="homestr_use" value="1"<?php if($d['layout']['homestr_use']):?> checked="checked"<?php endif?> />출력</label> / 대메뉴 
	<select name="menunum">
	<?php for($i = 1; $i < 11; $i++):?>
	<option value="<?php echo $i?>"<?php if($d['layout']['menunum']==$i):?> selected="selected"<?php endif?>><?php echo $i?>개</option>
	<?php endfor?>
	</select>
	<span class="small">(개 이상일 경우 더보기 메뉴로 대체)</span>
</td>
</tr>

<tr>
<td class="t1">멤버링크 색상</td>
<td class="t2">:</td>
<td class="t3">
	<input type="text" name="memberlink_color" id="memberlink_color_" class="input sf1" value="<?php echo $d['layout']['memberlink_color']?>" />
	<img src="<?php echo $g['img_core']?>/_public/btn_color.gif" class="hand" alt="" onclick="getLayerBox('<?php echo $g['s']?>/_core/opensrc/colorjack/color.php?color=<?php echo substr($d['layout']['memberlink_color'],1,6)?>&dropf=memberlink_color_&callback=colorChange','색상선택',220,260,event,'','r');" />
	<span class="small">(공백:기본값)</span>
	구분파이프
	<input type="text" name="split_color" id="split_color_" class="input sf1" value="<?php echo $d['layout']['split_color']?>" />
	<img src="<?php echo $g['img_core']?>/_public/btn_color.gif" class="hand" alt="" onclick="getLayerBox('<?php echo $g['s']?>/_core/opensrc/colorjack/color.php?color=<?php echo substr($d['layout']['split_color'],1,6)?>&dropf=split_color_&callback=colorChange','색상선택',220,260,event,'','r');" />
	<span class="small">(공백:기본값)</span>
</td>
</tr>

<tr>
<td class="t1">검색폼 보더색</td>
<td class="t2">:</td>
<td class="t3">
	<input type="text" name="search_border" id="search_border_" class="input sf1" value="<?php echo $d['layout']['search_border']?>" />
	<img src="<?php echo $g['img_core']?>/_public/btn_color.gif" class="hand" alt="" onclick="getLayerBox('<?php echo $g['s']?>/_core/opensrc/colorjack/color.php?color=<?php echo substr($d['layout']['search_border'],1,6)?>&dropf=search_border_&callback=colorChange','색상선택',220,260,event,'','r');" />
	<span class="small">(공백:기본값)</span>
</td>
</tr>

<tr>
<td class="t1">이미지 로고</td>
<td class="t2">:</td>
<td class="t3">
<input type="file" name="upfile" class="file" value="" />
<input type="checkbox" name="imglogo_use" value="1"<?php if($d['layout']['imglogo_use']):?> checked="checked"<?php endif?> />사용함
</td>
</tr>

<?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['imglogo'])):?>
<tr>
<td class="t1">로고사이즈 조정</td>
<td class="t2">:</td>
<td class="t3">
<input type="text" name="imglogo_w" class="input sf" value="<?php echo $d['layout']['imglogo_w']?>" maxlength="3" />*<input type="text" name="imglogo_h" class="input sf" value="<?php echo $d['layout']['imglogo_h']?>" maxlength="3" /> 픽셀
</td>
</tr>
<tr>
<td></td>
<td></td>
<td class="t3">
<br />
<img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['imglogo']?>" width="<?php echo $d['layout']['imglogo_w']?>" height="<?php echo $d['layout']['imglogo_h']?>" alt="" style="background:#000000;" />
<br /><br />
<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;&imgType=logo&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 로고를 삭제하기</a>
<br />
<br />
</td>
</tr>
<?php endif?>

<tr>
<td class="t1">전체 배경사진/스타일</td>
<td class="t2">:</td>
<td class="t3">
<input type="file" name="upfile1" class="file" value="" />
<select name="bg_o">
<option value="top center no-repeat"<?php if($d['layout']['bg_o']=='top center no-repeat'):?> selected="selected"<?php endif?>>상단 고정</option>
<option value="center center no-repeat"<?php if($d['layout']['bg_o']=='center center no-repeat'):?> selected="selected"<?php endif?>>중앙 고정</option>
<option value="bottom center no-repeat"<?php if($d['layout']['bg_o']=='bottom center no-repeat'):?> selected="selected"<?php endif?>>하단 고정</option>
<option value="left top no-repeat"<?php if($d['layout']['bg_o']=='left top no-repeat'):?> selected="selected"<?php endif?>>좌상 고정</option>
<option value="left center no-repeat"<?php if($d['layout']['bg_o']=='left center no-repeat'):?> selected="selected"<?php endif?>>좌중 고정</option>
<option value="left bottom no-repeat"<?php if($d['layout']['bg_o']=='left bottom no-repeat'):?> selected="selected"<?php endif?>>좌하 고정</option>
<option value="right top no-repeat"<?php if($d['layout']['bg_o']=='right top no-repeat'):?> selected="selected"<?php endif?>>우상 고정</option>
<option value="right center no-repeat"<?php if($d['layout']['bg_o']=='right center no-repeat'):?> selected="selected"<?php endif?>>우중 고정</option>
<option value="right bottom no-repeat"<?php if($d['layout']['bg_o']=='right bottom no-repeat'):?> selected="selected"<?php endif?>>우하 고정</option>
<option value="top center repeat-x"<?php if($d['layout']['bg_o']=='top center repeat-x'):?> selected="selected"<?php endif?>>상단 반복</option>
<option value="center center repeat-x"<?php if($d['layout']['bg_o']=='center center repeat-x'):?> selected="selected"<?php endif?>>중앙 반복</option>
<option value="bottom center repeat-x"<?php if($d['layout']['bg_o']=='bottom center repeat-x'):?> selected="selected"<?php endif?>>하단 반복</option>
<option value="left center repeat-y"<?php if($d['layout']['bg_o']=='left center repeat-y'):?> selected="selected"<?php endif?>>좌측 반복</option>
<option value="right center repeat-y"<?php if($d['layout']['bg_o']=='right center repeat-y'):?> selected="selected"<?php endif?>>우측 반복</option>
<option value="center center"<?php if($d['layout']['bg_o']=='center center'):?> selected="selected"<?php endif?>>바둑판</option>
</select>
<input type="checkbox" name="bg_use" value="1"<?php if($d['layout']['bg_use']):?> checked="checked"<?php endif?> />사용함
</td>
</tr>
<?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['bg'])):?>
<tr>
<td></td>
<td></td>
<td class="t3">
<br />
<img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['bg']?>" height="50" alt="" />
<br /><br />
<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=bg&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 배경 이미지 삭제하기</a>
<br />
<br />
</td>
</tr>
<?php endif?>


<tr>
<td></td>
<td></td>
<td><br /><br /><input type="submit" value=" 변경하기 " class="btnblue" /></td>
</tr>
</table>

</form>