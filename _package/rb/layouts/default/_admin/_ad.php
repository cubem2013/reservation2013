<div class="guide">
<span class="b"><?php echo $my[$_HS['nametype']]?>님의 홈페이지에 광고를 노출해 보세요.</span><br /><br />
이미지,텍스트 혹은 외부광고를 홈페이지에 간단히 노출시킬 수 있습니다.<br />
광고의 종류와 형식을 선택해 주세요.<br />
광고의 높이는 제한이 없으나 광고의 폭은 가로 280 픽셀에 고정됩니다.<br />
</div>

<form name="themeForm" method="post" action="<?php echo $g['s']?>/" enctype="multipart/form-data" onsubmit="return configCheck1(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="_layoutAction" value="config" />
<input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />
<input type="hidden" name="changeType" value="<?php echo $_themeConfig?>" />


<table>
<tr>
<td class="t1">광고의 형식</td>
<td class="t2">:</td>
<td class="t3">
	<label><input type="radio" name="adtype" value="0"<?php if($d['layout']['adtype']=='0'):?> checked="checked"<?php endif?> />광고 노출안함</label>
	<label><input type="radio" name="adtype" value="1"<?php if($d['layout']['adtype']=='1'):?> checked="checked"<?php endif?> />이미지</label>
	<label><input type="radio" name="adtype" value="2"<?php if($d['layout']['adtype']=='2'):?> checked="checked"<?php endif?> />플래쉬</label>
	<label><input type="radio" name="adtype" value="3"<?php if($d['layout']['adtype']=='3'):?> checked="checked"<?php endif?> />HTML/스크립트</label>
</td>
</tr>

<tr>
<td class="t1">이미지/링크</td>
<td class="t2">:</td>
<td class="t3">
<input type="file" name="upfile" class="file" value="" /> / 
<input type="text" name="ad_imglink" class="input" value="<?php echo $d['layout']['ad_imglink']?>" />
<select name="ad_imgtarget">
<option value="_blank"<?php if($d['layout']['ad_imgtarget']=='_blank'):?> selected="selected"<?php endif?>>새창</option>
<option value="_self"<?php if($d['layout']['ad_imgtarget']=='_self'):?> selected="selected"<?php endif?>>현재창</option>
</select>
</td>
</tr>
<?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['ad_img'])):?>
<tr>
<td></td>
<td></td>
<td class="t3">
<br />
<img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['ad_img']?>" width="280" alt="" />
<br /><br />
<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=ad_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
<br />
<br />
</td>
</tr>
<?php endif?>
<tr>
<td class="t1">플래쉬</td>
<td class="t2">:</td>
<td class="t3">
<input type="file" name="upfile1" class="file" value="" />
</td>
</tr>
<?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['ad_swf'])):?>
<tr>
<td></td>
<td></td>
<td class="t3">
<br />
<embed src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['ad_swf']?>" width="280"></embed>
<br /><br />
<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=ad_swf&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 플래쉬 삭제하기</a>
<br />
<br />
</td>
</tr>
<?php endif?>

<tr>
<td class="t1">HTML/스크립트</td>
<td class="t2">:</td>
<td class="t3">
<textarea name="adcode" rows="8" cols="70"><?php readfile($g['path_layout'].$d['layout']['dir'].'/_var/_ad.txt')?></textarea>
</td>
</tr>

<tr>
<td></td>
<td></td>
<td><br /><br /><input type="submit" value=" 변경하기 " class="btnblue" /></td>
</tr>
</table>

</form>