<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/top.php'?>
<div id="content">
	<div class="wrap">

	<?php if($d['layout']['_is_ownmain']) include $g['path_layout'].$d['layout']['dir'].'/_cross/_main.php'?>
	<?php if($d['layout']['_is_content']):?>
		<?php if($d['layout']['dsp_side']=='left'&&!$system):?>
		<div class="aside">
		<?php include $g['path_layout'].$d['layout']['dir'].'/_cross/side.php'?>	
		</div>
		<?php endif?>
		<div id="rcontent" class="center<?php if($d['layout']['dsp_side']&&!$system):?> m_side<?php endif?>">
		<?php include __KIMS_CONTENT__?>
		</div>
		<?php if($d['layout']['dsp_side']=='right'&&!$system):?>
		<div class="bside">
		<?php include $g['path_layout'].$d['layout']['dir'].'/_cross/side.php'?>	
		</div>
		<?php endif?>
		<?php if($d['layout']['dsp_side']):?><div class="clear"></div><?php endif?>
	<?php endif?>
	<?php if(!$d['layout']['begin']) include $g['path_layout'].$d['layout']['dir'].'/_cross/_begin.php'?>


	</div>
</div>
<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/bottom.php'?>
