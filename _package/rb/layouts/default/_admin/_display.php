<div class="guide">
<span class="b">체크만으로 출력여부를 지정할 수 있습니다.</span><br /><br />
출력을 원하시는 요소들에 체크한 후 설정을 저장해 주세요.<br />
변경된 설정값은 실시간으로 적용됩니다.<br />
</div>

<form name="themeForm" method="post" action="<?php echo $g['s']?>/" enctype="multipart/form-data" onsubmit="return configCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="_layoutAction" value="config" />
<input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />
<input type="hidden" name="changeType" value="<?php echo $_themeConfig?>" />


<table>
<tr>
<td class="t1">로그인/회원가입 링크</td>
<td class="t2">:</td>
<td class="t3">
	<label><input type="checkbox" name="dsp_login" value="1"<?php if($d['layout']['dsp_login']):?> checked="checked"<?php endif?> />출력합니다.</label>
</td>
</tr>
<tr>
<td class="t1">통합검색 상자</td>
<td class="t2">:</td>
<td class="t3">
	<label><input type="checkbox" name="dsp_search" value="1"<?php if($d['layout']['dsp_search']):?> checked="checked"<?php endif?> />출력합니다.</label>
</td>
</tr>
<tr>
<td class="t1">상단메뉴</td>
<td class="t2">:</td>
<td class="t3">
	<label><input type="checkbox" name="dsp_topmenu" value="1"<?php if($d['layout']['dsp_topmenu']):?> checked="checked"<?php endif?> />출력합니다.</label>
</td>
</tr>
<tr>
<td class="t1">측면(좌우)메뉴</td>
<td class="t2">:</td>
<td class="t3">
	<select name="dsp_side">
	<option value=""<?php if($d['layout']['dsp_side']==''):?> selected="selected"<?php endif?>>메뉴를 숨깁니다</option>
	<option value="left"<?php if($d['layout']['dsp_side']=='left'):?> selected="selected"<?php endif?>>좌측메뉴를 출력합니다</option>
	<option value="right"<?php if($d['layout']['dsp_side']=='right'):?> selected="selected"<?php endif?>>우측메뉴를 출력합니다</option>
	</select>
</td>
</tr>
<tr>
<td class="t1">측면메뉴 출력요소</td>
<td class="t2">:</td>
<td class="t3">
	<label><input type="checkbox" name="dsp_side_login" value="1"<?php if($d['layout']['dsp_side_login']):?> checked="checked"<?php endif?> />로그인폼 <span class="small">(소셜 로그인 설정시 일반로그인 / 소셜로그인 멀티지원)</span></label><br />
	<label><input type="checkbox" name="dsp_side_menu" value="1"<?php if($d['layout']['dsp_side_menu']):?> checked="checked"<?php endif?> />메뉴 <span class="small">(상단메뉴 미출력시 대메뉴 출력 / 상단메뉴 출력시 서브메뉴출력 / 메뉴 2단계까지 지원)</span></label><br />
	<label><input type="checkbox" name="dsp_side_menuhide" value="1"<?php if($d['layout']['dsp_side_menuhide']):?> checked="checked"<?php endif?> />서브메뉴 없을 경우 메뉴박스 숨김 <span class="small">(서브메뉴가 없습니다라는 안내박스를 출력하지 않음)</span></label><br />
	<label><input type="checkbox"<?php if($d['layout']['adtype']):?> checked="checked"<?php endif?> disabled="disabled" />광고 <span class="small">(광고설정 페이지에서 설정하세요)</span></label><br />
	<label><input type="checkbox" name="dsp_side_hot" value="1"<?php if($d['layout']['dsp_side_hot']):?> checked="checked"<?php endif?> />많이본 글</label>
	<select name="dsp_side_hotnum">
	<?php for($i=1;$i<31;$i++):?><option value="<?php echo $i?>"<?php if($d['layout']['dsp_side_hotnum']==$i):?> selected="selected"<?php endif?>><?php echo $i?>개 출력</option><?php endfor?>
	</select>
	<br />
</td>
</tr>
<tr>
<td></td>
<td></td>
<td><br /><br /><input type="submit" value=" 변경하기 " class="btnblue" /></td>
</tr>
</table>

</form>