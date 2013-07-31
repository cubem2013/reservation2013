<?php if($d['layout']['dsp_side_login']):?>
<?php if($my['uid']):?>
<div class="mbrinfo">
	<div class="symbol tooltip"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;mod=mypage&amp;page=simbol"><img src="<?php echo $g['s']?>/_var/simbol/<?php echo $my['photo']?$my['photo']:'0.gif'?>" alt="" /></a>
	<span class="<?php if($d['layout']['dsp_side']=='left'):?>_right _r150<?php else:?>_left _l150<?php endif?> _w150">클릭하시면 회원님의 사진을 등록하실 수 있습니다.<i></i></span>
	</div>
	<div class="name">
		<div class="namel"><?php echo $my[$_HS['nametype']]?>님</div>
		<div class="namer">
			<?php if($d['layout']['sns_hide']):?>
			<a href="<?php echo RW('mod=mypage')?>"><img src="<?php echo $g['img_layout']?>/btn_config.gif" alt="" /></a>
			<?php else:?>
			<a href="#." onclick="getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&m=social&page=account','소셜계정',600,650,event,true,'<?php echo $d['layout']['dsp_side']=='left'?'r':'l'?>');"><img src="<?php echo $g['img_layout']?>/btn_config1.gif" alt="" /></a>
			<?php endif?>
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout"><img src="<?php echo $g['img_layout']?>/btn_logout.gif" alt="" /></a>
		</div>
	</div>
	<div class="clear"></div>
	<div class="score">
		<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;mod=mypage&amp;page=point">포인트 <?php echo number_format($my['point'])?>P</a> / 가입 <?php echo getDateFormat($my['d_regis'],'Y.m.d')?>
	</div>
</div>
<?php else:?>
<div class="logout">
	<div class="tabbox">
		<?php if($d['layout']['sns_hide']):?>
		<div class="np">회원 로그인</div>
		<?php else:?>
		<div class="tp vline on" onclick="tabCheck(1,this);">일반 로그인</div>
		<div class="tp" onclick="tabCheck(2,this);">소셜 로그인</div>
		<div class="clear"></div>
		<?php endif?>
	</div>
	<div id="nlogLayer" class="nlog">
		<form name="LayoutLogForm" action="<?php echo $g['s']?>/" method="post" onsubmit="return layoutLogCheck(this);">
		<input type="hidden" name="r" value="<?php echo $r?>" />
		<input type="hidden" name="a" value="login" />
		<div class="i1 tooltip">
		<input type="text" name="id" value="<?php echo getArrayCookie($_COOKIE['svshop'],'|',0)?>" class="input" title="아이디" />
		<input type="checkbox" name="idpwsave" value="checked" class="checkbox"<?php if($_COOKIE['svshop']):?> checked="checked"<?php endif?> /> 정보기억
		<span class="<?php if($d['layout']['dsp_side']=='left'):?>_right _r150<?php else:?>_left _l150<?php endif?> _w150">정보기억에 체크할 경우 다음접속시 아이디와 패스워드를 입력하지 않으셔도 됩니다.<br />그러나, 개인PC가 아닐 경우 타인이 로그인할 수 있습니다.<br />PC를 여러사람이 사용하는 공공장소에서는 체크하지 마세요.<i></i></span>
		<div class="clear"></div>
		</div>
		<div class="i1">
		<input type="password" name="pw" value="<?php echo getArrayCookie($_COOKIE['svshop'],'|',1)?>" class="input" title="패스워드" />
		<input type="image" src="<?php echo $g['img_layout']?>/btn_login.gif" class="submit" />
		<div class="clear"></div>
		</div>
		</form>
		<div class="rbtm">
			<a href="<?php echo RW('mod=join')?>" class="b">회원가입</a> <span>|</span>
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;mod=login&amp;page=idpwsearch" class="ipc">아이디/패스워드찾기</a>
		</div>
	</div>
	<div id="slogLayer" class="slog hide">
		<div class="icon">
		<?php if($d['layout']['sns_t']):?><img src="<?php echo $g['img_core']?>/_public/sns_t2.gif" alt="" title="트위터" onclick="snsCheck('t','','connect');" /><?php endif?>
		<?php if($d['layout']['sns_f']):?><img src="<?php echo $g['img_core']?>/_public/sns_f2.gif" alt="" title="페이스북" onclick="snsCheck('f','','connect');" /><?php endif?>
		<?php if($d['layout']['sns_m']):?><img src="<?php echo $g['img_core']?>/_public/sns_m2.gif" alt="" title="미투데이" onclick="snsCheck('m','','connect');" /><?php endif?>
		<?php if($d['layout']['sns_y']):?><img src="<?php echo $g['img_core']?>/_public/sns_y2.gif" alt="" title="요즘" onclick="snsCheck('y','','connect');" /><?php endif?>
		</div>
		<div class="guide">
			소셜네트워크 서비스를 통해서 로그인하시면 별도의 로그인 절차없이 회원서비스를 이용하실 수 있습니다.
		</div>
	</div>
</div>
<?php endif?>
<?php endif?>


<?php if($d['layout']['dsp_side_menu']):?>
<?php if($d['layout']['dsp_topmenu']):?>
<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.(int)$g['nowFMemnu'].' and hidden=0 and depth=2 order by gid asc','*')?>
<?php $_MENUSN=db_num_rows($_MENUS2)?>
<?php if($_MENUN || (!$d['layout']['dsp_side_menuhide']&&$_CA[0])):?>
<ul class="submenu">
<li class="subtext">펜션소개</li>
<?php $_i=0;while($_M2=db_fetch_array($_MENUS2)):$_i++?>
<li class="<?php if($_M2['id']==$_CA[0]):$g['nowSMemnu']=$_M2['uid']?>open<?php endif?><?php if($_MENUSN==$_i):?> _last<?php endif?>"><a href="<?php echo RW('c='.$_CA[0].'/'.$_M2['id'])?>" target="<?php echo $_M2['target']?>"<?php if($_M2['id']==$_CA[1]):?> class="on"<?php endif?>><?php echo $_M2['name']?></a>
<?php if(($_HM['uid']==$_M2['uid']||$_HM['parent']==$_M2['uid'])&&$_M2['isson']):?>
<ul>
<?php $_MENUS3=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M2['uid'].' and hidden=0 and depth=3 order by gid asc','*')?>
<?php while($_M3=db_fetch_array($_MENUS3)):?>
<li><a href="<?php echo RW('c='.$_CA[0].'/'.$_CA[1].'/'.$_M3['id'])?>" target="<?php echo $_M3['target']?>"<?php if($_M3['uid']==$_HM['uid']):?> class="on"<?php endif?>><?php echo $_M3['name']?></a></li>
<?php endwhile?>
</ul>
<?php endif?>
</li>
<?php endwhile?>
<?php if(!$_MENUSN):?>
<li class="_last none">서브메뉴가 없습니다.</li>
<?php endif?>
</ul>
<div class="letter"></div>
<div class="s_qr"></div>
<div class="s_qbtn"></div>
<?php endif?>
<?php else:?>

<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and hidden=0 and depth=1 order by gid asc','*')?>
<?php $_MENUSN=db_num_rows($_MENUS2)?>
<ul class="submenu"></ul>
<?php $_i=0;while($_M2=db_fetch_array($_MENUS2)):$_i++?>
<li class="<?php if($_M2['id']==$_CA[0]):$g['nowSMemnu']=$_M2['uid']?>open<?php endif?><?php if($_MENUSN==$_i):?> _last<?php endif?>"><a href="<?php echo RW('c='.$_M2['id'])?>" target="<?php echo $_M2['target']?>"<?php if($_M2['id']==$_CA[0]):?> class="on"<?php endif?>><?php echo $_M2['name']?></a>
<?php if(($_HM['uid']==$_M2['uid']||$_HM['parent']==$_M2['uid'])&&$_M2['isson']):?>
<ul>
<?php $_MENUS3=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M2['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
<?php while($_M3=db_fetch_array($_MENUS3)):?>
<li><a href="<?php echo RW('c='.$_CA[0].'/'.$_M3['id'])?>" target="<?php echo $_M3['target']?>"<?php if($_M3['uid']==$_HM['uid']):?> class="on"<?php endif?>><?php echo $_M3['name']?></a></li>
<?php endwhile?>
</ul>
<?php endif?>
</li>
<?php endwhile?>
<?php if(!$_MENUSN):?>
<li class="_last none">메뉴가 등록되지 않았습니다.</li>
<?php endif?>
</ul>
<?php endif?>
<?php endif?>



<?php if($d['layout']['adtype']):?>
<div class="banner">
<?php if($d['layout']['adtype']==1):?><a href="<?php echo $d['layout']['ad_imglink']?>" target="<?php echo $d['layout']['ad_imgtarget']?>"><img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['ad_img']?>" width="200" alt="" /></a><?php endif?>
<?php if($d['layout']['adtype']==2):?><embed src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['ad_swf']?>" width="200"></embed><?php endif?>
<?php if($d['layout']['adtype']==3) include $g['path_layout'].$d['layout']['dir'].'/_var/_ad.txt'?>
</div>
<?php endif?>

<?php if($d['layout']['dsp_side_hot']):?>
<div class="hotbox">
	<div class="tabbox">
		<div class="tp vline on" onclick="tabCheck_s(1,this,'_myHOTlayer_','<?php echo $d['layout']['dsp_side_hotnum']?>');">많이 본 글</div>
		<div class="tp" onclick="tabCheck_s(2,this,'_myHOTlayer_','<?php echo $d['layout']['dsp_side_hotnum']?>');">댓글 많은 글</div>
		<div class="clear"></div>
	</div>
	<div id="_myHOTlayer_" class="hbody">
		<ul>
		<?php $_date=date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-30,$date['year']))?>
		<?php $_RCD=getDbArray($table['bbsdata'],'site='.$s.' and display=1 and d_regis > '.$_date,'*','hit','desc',$d['layout']['dsp_side_hotnum'],1);?>
		<?php $_i=0;while($_R=db_fetch_array($_RCD)):$_i++?>
		<li><i<?php if($_i<4):?> class="emp"<?php endif?>><?php echo $_i?></i><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a><?php if($_R['comment']+$_R['oneline']):?><span>(<?php echo $_R['comment']+$_R['oneline']?>)</span><?php endif?></li>
		<?php endwhile?>
		</ul>
	</div>
</div>
<?php endif?>
