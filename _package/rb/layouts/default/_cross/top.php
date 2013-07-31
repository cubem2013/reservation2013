
<div<?php if($d['layout']['bg_use']):?> style="background:url('<?php echo $g['url_layout'].'/_var/'.$d['layout']['bg']?>') <?php echo $d['layout']['bg_o']?>;"<?php endif?>>
<div id="header" style="border-top:<?php echo $d['layout']['bg_header_bt']?> solid <?php echo $d['layout']['height_header_bt']?>px;border-bottom:<?php echo $d['layout']['bg_header_bb']?> solid <?php echo $d['layout']['height_header_bb']?>px;<?php if(!$d['layout']['bg_use']):?>background:<?php echo $d['layout']['bg_header']?>;<?php endif?>">
	<div class="wrap" style="height:<?php echo $d['layout']['height_header']?>px;<?php if($d['layout']['height_header_bb']):?>border-bottom:0;<?php endif?>">
		<div class="logo" style="top:<?php echo $d['layout']['title_t']?>px;">
			<?php echo getLayoutLogo($d['layout'])?>
		</div>
		<?php if($d['layout']['dsp_search']):?>
		<div class="search" style="top:<?php echo $d['layout']['title_s']?>px;">
			<form action="<?php echo $g['s']?>/" method="get" id="_layout_search_border_" style="border:<?php echo $d['layout']['search_border']?> solid 1px;">
			<input type="hidden" name="r" value="<?php echo $r?>" />
			<input type="hidden" name="mod" value="search" />
			<input type="text" name="keyword" placeholder="통합검색" class="keyword<?php if($_keyword):?> done<?php endif?>" value="<?php echo $_keyword?>" />
			<input type="image" src="<?php echo $g['img_layout']?>/btn_search.gif" class="sbtn" alt="search" />
			</form>
		</div>
		<?php endif?>
		<?php if($d['layout']['dsp_login']):?>
		<div id="_layout_memberlink_" class="login" style="top:<?php echo $d['layout']['title_b']?>px;">
			<?php if($my['uid']):?>
			<a href="<?php echo RW('mod=mypage')?>" style="color:<?php echo $d['layout']['memberlink_color']?>;">나의계정</a> <i style="background:<?php echo $d['layout']['split_color']?>;"></i> 
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout" style="color:<?php echo $d['layout']['memberlink_color']?>;">로그아웃</a>
			<?php else:?>
			<a href="<?php echo RW('mod=join')?>" style="color:<?php echo $d['layout']['memberlink_color']?>;">회원가입</a> <i></i> 
			<a href="#." onClick="crLayer('로그인','<?php echo $g['s']?>/?r=<?php echo $r?>&system=iframe.login&iframe=Y&referer=<?php echo urlencode($g['s'].'/?'.$_SERVER['QUERY_STRING'])?>','iframe',515,250,'15%');" style="color:<?php echo $d['layout']['memberlink_color']?>;">로그인</a>
			<?php endif?>	

		</div>
		<?php endif?>
		<div class="clear"></div>
	</div>
</div>
<?php if($d['layout']['dsp_topmenu']):?>
<div id="topmenu">
	<div class="wrap">
		<ul>
		<?php if($d['layout']['homestr_use']):?>
		<li class="home"><a href="<?php echo $g['s']?>/?r=<?php echo $r?>"<?php if($_HP['id']=='main'&&!$_themeConfig):?> class="on"<?php endif?>><span><?php echo $d['layout']['homestr']?></span></a></li>
		<?php endif?>
		<?php $_MENUS1=getDbSelect($table['s_menu'],'site='.$s.' and hidden=0 and depth=1 order by gid asc','*')?>
		<?php $_i=0; while($_M1=db_fetch_array($_MENUS1)):?>
		<li onMouseOver="showM('<?php echo $_M1['uid']?>');" onMouseOut="hideM('<?php echo $_M1['uid']?>');">
		<?php if($_M1['isson']):?>
		<div id="subMenuBox<?php echo $_M1['uid']?>">
		<dl>
		<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M1['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
		<?php while($_M2=db_fetch_array($_MENUS2)):?>
		<dt<?php if(in_array($_M2['id'],$_CA)):?> class="on1"<?php endif?>><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'])?>" target="<?php echo $_M2['target']?>"><?php echo $_M2['name']?></a></dt>
		<?php if($_M2['isson']):?>
		<?php $_MENUS3=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M2['uid'].' and hidden=0 and depth=3 order by gid asc','*')?>
		<?php while($_M3=db_fetch_array($_MENUS3)):?>
		<dd><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'].'/'.$_M3['id'])?>" target="<?php echo $_M3['target']?>">ㆍ<?php echo $_M3['name']?></a></dd>
		<?php endwhile?>
		<?php endif?>
		<?php endwhile?>
		</dl>
		</div>
		<?php endif?>
		<a href="<?php echo $_M1['redirect']?$_M1['joint']:RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"<?php if(in_array($_M1['id'],$_CA)):$g['nowFMemnu']=$_M1['uid']?> class="on"<?php endif?>><span><?php echo $_M1['name']?></span></a>
		</li>
		<li class="vline"></li>
		<?php $_i++; if($_i >= $d['layout']['menunum']) break; endwhile?>
		<?php if($_i < db_num_rows($_MENUS1)):?>
		<li onMouseOver="showM('0');" onMouseOut="hideM('0');">
		<div id="subMenuBox0" align="center">
		<dl>
		<?php while($_M1=db_fetch_array($_MENUS1)):?>
		<dt<?php if(in_array($_M1['id'],$_CA)):$g['nowFMemnu']=$_M1['uid']?> class="on1"<?php endif?>><a href="<?php echo $_M1['redirect']?$_M1['joint']:RW('c='.$_M1['id'])?>" target="<?php echo $_M1['target']?>"><?php echo $_M1['name']?></a></dt>
		<?php if($_M1['isson']):?>
		<?php $_MENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_M1['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
		<?php while($_M2=db_fetch_array($_MENUS2)):?>
		<dd><a href="<?php echo RW('c='.$_M1['id'].'/'.$_M2['id'])?>" target="<?php echo $_M2['target']?>">ㆍ<?php echo $_M2['name']?></a></dd>
		<?php endwhile?>
		<?php endif?>
		<?php endwhile?>
		</dl>
		</div>
		
		<a href="#."><span>더보기 <img src="<?php echo $g['img_layout']?>/ico_more.gif" class="more" alt="" /></span></a>
		</li>
		<?php endif?>
		<?php if(!$_i):?>
		<li class="none">
			<?php if($my['admin']):?>
			<span>
			메뉴를 등록해 주세요 
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.all&amp;type=menu&amp;makemenu=Y" title="메뉴등록"><img src="<?php echo $g['img_layout']?>/arr_plus.gif" alt="" /></a>
			</span>
			<?php endif?>
		</li>
		<?php endif?>
		</ul>
		<div class="clear"></div>
	</div>
</div>
<?php endif?>
<div class="wrap">
<?php include __KIMS_CONTAINER_HEAD__?>	
</div>