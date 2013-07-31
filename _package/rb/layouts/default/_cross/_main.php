<?php if($d['layout']['begin']):?>
<div class="mainbox">

	<?php $_sort=explode(',',$d['layout']['sort1'])?>
	<?php $_date=$d['layout']['bbs1_day']!=''?date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-$d['layout']['bbs1_day'],$date['year'])):0?>
	<?php $_RCD=getDbArray($table['bbsdata'],($d['layout']['bbs1']?'bbs='.$d['layout']['bbs1']:'site='.$s).' and display=1 and d_regis > '.$_date,'*',$_sort[0],$_sort[1],$d['layout']['bbs1_num'],1)?>
	<?php for($i = 0; $i < $d['layout']['bbs1_num']; $i++):?>
	<?php $_R=db_fetch_array($_RCD)?>
	<div class="post post<?php echo $i?>">
		
	<?php if($_R['uid']):?>
	<?php $_THUMB=getUploadImage($_R['upload'],$_R['d_regis'],$_R['content'],'jpg|jpeg')?>
		<?php if($i == 0 || $i == 17):?>
		
		<div class="box1">
			<div class="title"><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a></div>
			<div class="date"><?php echo getDateFormat($_R['d_regis'],'Y년 m월 d일')?></div>
			<div class="cont">
				<?php if($_THUMB):?><img src="<?php echo $_THUMB?>" alt="" /><?php endif?>
				<?php echo getStripTags($_R['content'])?>
			</div>
		</div>

		<?php elseif($i == 8 || $i == 10 || $i == 18 || $i == 26):?>

		<div class="box2">
			<div class="title"><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a></div>
			<div class="date"><?php echo getDateFormat($_R['d_regis'],'Y년 m월 d일')?></div>
			<div class="cont">
				<?php if($_THUMB):?><img src="<?php echo $_THUMB?>" alt="" /><?php endif?>
				<?php echo getStripTags($_R['content'])?>
			</div>
		</div>

		<?php else:?>

		<div class="box3">
			<div class="title"><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a></div>
			<div class="date"><?php echo getDateFormat($_R['d_regis'],'Y년 m월 d일')?></div>
			<div class="cont">
				<?php if($_THUMB):?><img src="<?php echo $_THUMB?>" alt="" /><?php endif?>
				<?php echo getStripTags($_R['content'])?>
			</div>
		</div>

		<?php endif?>
	<?php endif?>

	</div>
	<?php endfor?>
	<div class="clear"></div>
</div>
<?php endif?>

