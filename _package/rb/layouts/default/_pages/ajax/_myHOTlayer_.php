<?php
$_sort = array
(
	array('hit','desc'),
	array('comment','desc'),
);
?>

[RESULT:


<ul>
<?php $_date=date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-30,$date['year']))?>
<?php $_RCD=getDbArray($table['bbsdata'],'site='.$s.' and display=1 and d_regis > '.$_date,'*',$_sort[$type-1][0],$_sort[$type-1][1],$num,1);?>
<?php $_i=0;while($_R=db_fetch_array($_RCD)):$_i++?>
<li><i<?php if($_i<4):?> class="emp"<?php endif?>><?php echo $_i?></i><a href="<?php echo getPostLink($_R)?>"><?php echo $_R['subject']?></a><?php if($_R['comment']+$_R['oneline']):?><span>(<?php echo $_R['comment']+$_R['oneline']?>)</span><?php endif?></li>
<?php endwhile?>
</ul>


:RESULT]

