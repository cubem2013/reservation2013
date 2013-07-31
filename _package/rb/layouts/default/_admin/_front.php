<div class="guide">
<span class="b">메인화면을 꾸미는 방법은 2가지가 있습니다.</span><br /><br />
첫번재 - 킴스큐 자체에서 제공하는 꾸미기 기능을 이용하여 나만의 메인화면 만들기<br />
두번째 - 이 레이아웃에서 제공하는 최적화된 메인화면 사용하기<br />
첫번째,두번째중 원하시는 것을 선택해 주세요. 두가지 모두 선택할 수 있습니다.<br />
</div>

<form name="themeForm" method="post" action="<?php echo $g['s']?>/" onsubmit="return configCheck(this);">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="_layoutAction" value="config" />
<input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />
<input type="hidden" name="changeType" value="<?php echo $_themeConfig?>" />

<table>
<tr>
<td class="t1">메인화면을 무엇으로 꾸미시겠습니까?</td>
<td class="t2">:</td>
<td class="t3 shift">
	<div class="shift">
	<label><input type="checkbox" name="mainType_rb" value="1"<?php if($d['layout']['mainType_rb']):?> checked="checked"<?php endif?> />킴스큐 자체에서 꾸미는 메인화면(직접꾸미기,위젯꾸미기,모듈콘텐츠 연결)</label><br />
	<label><input type="checkbox" name="mainType_layout" value="1"<?php if($d['layout']['mainType_layout']):?> checked="checked"<?php endif?> />이 레이아웃에서 제공하는 메인화면(게시판 생성 필요)</label><br />
	</div>
</td>
</tr>
<?php if($d['layout']['mainType_layout']):?>
<?php $BBSLIST=getDbArray($table['bbslist'],'','*','gid','asc',0,1)?>
<?php $_RCD=array(); while($_B=db_fetch_array($BBSLIST)) $_RCD[]=$_B?>
<tr>
<td class="t1">출력 대상물</td>
<td class="t2">:</td>
<td class="t3">
	<select name="bbs1" class="select1">
	<option value="0"<?php if($d['layout']['bbs1']=='0'):?> selected="selected"<?php endif?>>ㆍ전체게시물</option>
	<?php foreach($_RCD as $_B):?>
	<option value="<?php echo $_B['uid']?>"<?php if($d['layout']['bbs1']==$_B['uid']):?> selected="selected"<?php endif?>>ㆍ<?php echo $_B['name']?>(<?php echo $_B['id']?>)</option>
	<?php endforeach?>
	</select>
</td>
</tr>
<tr>
<td class="t1">정렬/추출기간</td>
<td class="t2">:</td>
<td class="t3">
	<select name="sort1">
	<option value="gid,asc"<?php if($d['layout']['sort1']=='gid,asc'):?> selected="selected"<?php endif?>>등록순</option>
	<option value="hit,desc"<?php if($d['layout']['sort1']=='hit,desc'):?> selected="selected"<?php endif?>>조회순</option>
	<option value="score1,desc"<?php if($d['layout']['sort1']=='score1,desc'):?> selected="selected"<?php endif?>>추천순</option>
	<option value="comment,desc"<?php if($d['layout']['sort1']=='comment,desc'):?> selected="selected"<?php endif?>>댓글순</option>
	<option value="down,desc"<?php if($d['layout']['sort1']=='down,desc'):?> selected="selected"<?php endif?>>다운순</option>
	</select>
	<input type="text" name="bbs1_day" value="<?php echo $d['layout']['bbs1_day']?>" class="input sf" />일내
</td>
</tr>
<tr>
<td class="t1">출력 라인수</td>
<td class="t2">:</td>
<td class="t3">
	<select name="bbs1_num">
	<option value="9"<?php if($d['layout']['bbs1_num']==9):?> selected="selected"<?php endif?>>2줄</option>
	<option value="14"<?php if($d['layout']['bbs1_num']==14):?> selected="selected"<?php endif?>>3줄</option>
	<option value="18"<?php if($d['layout']['bbs1_num']==18):?> selected="selected"<?php endif?>>4줄</option>
	<option value="23"<?php if($d['layout']['bbs1_num']==23):?> selected="selected"<?php endif?>>5줄</option>
	<option value="28"<?php if($d['layout']['bbs1_num']==28):?> selected="selected"<?php endif?>>6줄</option>
	</select>
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

<div class="more">
원하시는 메인화면 형식이 아닌가요?<br />
메인화면을 직접 꾸미고 싶다면 위젯을 이용하시거나 소스코드 직접꾸미기 또는 원하시는 형식의 콘텐츠 모듈을 연결해 주세요.<br />
HTML소스코드로 메인화면을 직접 꾸미기 위해서는 적어도 HTML / CSS 에 대한 기본지식이 필요합니다.<br />
</div>