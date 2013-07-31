<?php 
$prelayout = $d['layout']['dir'].'/zone';
?>



<div class="subbox">
	<div class="wrap">
		<div class="subtitle">
		<h2>레이아웃 설정</h2>
		</div>
		<div class="searchbox">

		</div>
		<div class="clear"></div>
	</div>
</div>


<div class="wrap">
	<div class="subsnb">
		<ul class="submenu">
		<li<?php if($_themeConfig=='theme'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=theme&amp;prelayout=<?php echo $prelayout?>">테마 변경</a></li>
		<li<?php if($_themeConfig=='display'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=display&amp;prelayout=<?php echo $prelayout?>">출력 설정</a></li>
		<li<?php if($_themeConfig=='detail'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=detail&amp;prelayout=<?php echo $prelayout?>">세부 설정</a></li>
		<li<?php if($_themeConfig=='front'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=front&amp;prelayout=<?php echo $prelayout?>">메인화면 설정</a></li>
		<li<?php if($_themeConfig=='ad'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=ad&amp;prelayout=<?php echo $prelayout?>">광고 설정</a></li>
		<li<?php if($_themeConfig=='sns'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=sns&amp;prelayout=<?php echo $prelayout?>">소셜 로그인</a></li>
		<li<?php if($_themeConfig=='page'):?> class="on"<?php endif?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=page&amp;prelayout=<?php echo $prelayout?>">추가 페이지</a></li>
		</ul>

		<div class="info">
		- 레이아웃 : <span class="b"><?php echo getFolderName($g['path_layout'].$d['layout']['dir'])?></span><br />
		- 폴더명 : <span class="b"><?php echo $d['layout']['dir']?></span><br />
		- 최적화  : IE 7~9/FF/CR/SF/OP<br />
		- 라이선스 : RBL<br />
		- 원작자 : <a href="http://www.kimsq.com" target="_blank">김성호(세븐고)</a><br />
		</div>
	</div>
	<div id="subcontent">		
		
		<?php include  $g['path_layout'].$d['layout']['dir'].'/_admin/_'.$_themeConfig.'.php'?>

	</div>
	<div class="clear"></div>
</div>



<script type="text/javascript">
//<![CDATA[
function colorChange(f,v)
{
	if (f == 'memberlink_color_' || f == 'split_color_')
	{
		var ele = getId('_layout_memberlink_').childNodes;
		var n = ele.length;
		var i;
		for (i = 0; i < n; i++)
		{
			if (f == 'split_color_')
			{
				if (ele[i].tagName == 'I') ele[i].style.background = '#'+v;
			}
			else {
				if (ele[i].tagName == 'A') ele[i].style.color = '#'+v;
			}
		}
	}
	else if (f == 'bg_header_')
	{
		 getId('header').style.background = '#'+v;
	}
	else if (f == 'bg_header_bt_')
	{
		 getId('header').style.borderTopColor = '#'+v;
	}
	else if (f == 'bg_header_bb_')
	{
		 getId('header').style.borderBottomColor = '#'+v;
	}
	else if (f == 'search_border_')
	{
		if(getId('_layout_'+f)) getId('_layout_'+f).style.borderColor = '#'+v;
	}
	else {
		if(getId('_layout_'+f)) getId('_layout_'+f).style.color = '#'+v;
	}
}
function headerBorder(obj,flag)
{
	if (flag == 'top') getId('header').style.borderTopWidth = obj.value + 'px';	
	else getId('header').style.borderBottomWidth = obj.value + 'px';
	if (flag == 'bottom')
	{
		if (obj.value == '0')
		{
			getId('header').children[0].style.borderBottomWidth = '<?php echo $d['layout']['theme']=='style01'?'1px':'0'?>';
		}
		else {
			getId('header').children[0].style.borderBottomWidth = '0';
		}
	}
}
function makeCheck(f)
{
	if (f.theme)
	{
		if (!chkFnameValue(f.theme.value))
		{
			alert('테마명이 등록되지 않았거나 잘못된 형식입니다.   ');
			f.theme.focus();
			return false;
		}
		var f1 = document.themeForm;
		var i;
		for (i = 0; i < f1.theme.length; i++)
		{
			if (f1.theme[i].value == f.theme.value)
			{
				alert('이미 동일한 명칭의 테마가 등록되어 있습니다.  ');
				f.theme.focus();
				return false;
			}
		}
	}
	getIframeForAction(f);
	return confirm('정말로 저장 하시겠습니까?      ');
}
function configCheck(f)
{
	getIframeForAction(f);
	return confirm('정말로 변경하시겠습니까?      ');
}
function configCheck1(f)
{
	if (f.title.value == '')
	{
		alert('타이틀을 입력해 주세요.   ');
		f.title.focus();
		return false;
	}

	if (f.upfile.value != '')
	{
		var extarr = f.upfile.value.split('.');
		var filext = extarr[extarr.length-1].toLowerCase();
		var permxt = '[gif][jpg][jpeg][png]';

		if (permxt.indexOf(filext) == -1)
		{
			alert('gif/jpg/png 파일만 등록할 수 있습니다.    ');
			f.upfile.focus();
			return false;
		}
	}

	getIframeForAction(f);
	return confirm('정말로 변경하시겠습니까?      ');
}
function configCheck2(f)
{
	if (f.upfile.value != '')
	{
		var extarr = f.upfile.value.split('.');
		var filext = extarr[extarr.length-1].toLowerCase();
		var permxt = '[gif][jpg][jpeg][png]';

		if (permxt.indexOf(filext) == -1)
		{
			alert('gif/jpg/png 파일만 등록할 수 있습니다.    ');
			f.upfile.focus();
			return false;
		}
	}
	if (f.upfile1.value != '')
	{
		var extarr1 = f.upfile1.value.split('.');
		var filext1 = extarr1[extarr1.length-1].toLowerCase();
		var permxt1 = '[swf]';

		if (permxt1.indexOf(filext1) == -1)
		{
			alert('swf 파일만 등록할 수 있습니다.    ');
			f.upfile1.focus();
			return false;
		}
	}
	getIframeForAction(f);
	return confirm('정말로 변경하시겠습니까?      ');
}
//]]>
</script>

