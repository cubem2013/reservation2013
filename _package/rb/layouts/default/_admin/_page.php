<div class="guide">
<span class="b">이 레이아웃에서 사용되고 있는 전용페이지를 확인 할 수 있습니다.</span><br /><br />
킴스큐는 자체적으로 페이지추가 기능을 제공하고 있습니다.<br />
그러나 종종 레이아웃 자체에서 간단히 파일만 추가해서 페이지를 구성할 필요가 생깁니다.<br />
이런 경우 레이아웃내에 페이지용 파일을 업로드하면 간단히 페이지를 추가할 수 있습니다.<br />
</div>


<table class="pagetable">
<thead>
<tr>
<th>페이지 파일</th>
<th>CSS</th>
<th>보기</th>
</tr>
<tbody>
<?php $_i=0?>
<?php $_pagepage=$g['path_layout'].$d['layout']['dir'].'/_pages/'?>
<?php $dirs = opendir($_pagepage)?>
<?php while(false !== ($_page = readdir($dirs))):?>
<?php if(!strstr($_page,'.php'))continue?>
<?php $_pagecss=str_replace('.php','.css',$_page)?>
<tr>
<td class="p1">
	<img src="<?php echo $g['img_core']?>/file/small/php.gif" alt="" />
	<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;module=filemanager&amp;front=main&amp;iframe=Y&amp;pwd=<?php echo urlencode($_pagepage)?>&amp;editmode=Y&amp;file=<?php echo $_page?>" target="_blank"><?php echo $_page?></a>
	<i>(<?php echo getSizeFormat(filesize($_pagepage.$_page),1)?>)</i>
</td>
<td class="p2">
	<?php if(is_file($_pagepage.$_pagecss)):?>
	<img src="<?php echo $g['img_core']?>/file/small/css.gif" alt="" />
	<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;module=filemanager&amp;front=main&amp;iframe=Y&amp;pwd=<?php echo urlencode($_pagepage)?>&amp;editmode=Y&amp;file=<?php echo $_pagecss?>" target="_blank"><?php echo $_pagecss?></a>
	<i>(<?php echo getSizeFormat(filesize($_pagepage.$_pagecss),1)?>)</i>
	<?php else:?>
	<i>없음</i>
	<?php endif?>
</td>
<td class="p3"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themePage=<?php echo str_replace('.php','',$_page)?>" target="_blank" class="btnGray01 plusBlue hand"><i><s>페이지보기</s></i></a></td>
</tr>

<?php $_i++; endwhile?>
<?php closedir($dirs)?>
<?php if(!$_i):?>
<tr>
<td colspan="3" class="none">페이지 파일이 없습니다.</td>
<?php endif?>
</tbody>
</table>



<div class="more">
파일을 추가/제거하기 위해서는 <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=admin&amp;module=filemanager&amp;front=main&amp;iframe=Y&amp;pwd=<?php echo urlencode($_pagepage)?>" target="_blank" class="u">파일메니져</a>나 FTP를 이용하셔야 합니다.<br />
서브 레이아웃을 지정하여 페이지를 열려면 링크주소에 <span class="b">&amp;prelayout=<?php echo $d['layout']['dir']?>/레이아웃파일명(확장자제외)</span> 을 붙여주세요.
</div>
<br />