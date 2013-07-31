<div class="wrap">
<?php include __KIMS_CONTAINER_FOOT__?>
</div>

<div id="footer">
	<div class="wrap">
		<div class="foo">
			<div class="f_logo">
				터치데이 펜션
			</div>
			<div class="f_text">
                    대표자 : 홍길동 주소 : 울산광역시 중구 성남동 젊음의 2거리 29번지 훼미리타워 11층 1104호 사업자등록번호 : 620-81-47109<br />
					계좌번호 : 584695-58-144798   대표 전화 : 1544 - 1466   팩스 : 070.4032.0797<br />
					Copyright &copy; <?php echo $date['year']?> <?php echo $_SERVER['HTTP_HOST']?> All rights reserved.
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>

<script type="text/javascript">
//<![CDATA[
function screenCheck()
{
	var _h = getId('header');
	var _t = getId('topmenu');
	var _c = getId('content');
	var _f = getId('footer');
	var _r = getId('rcontent');
	var _w;

	var w = parseInt(document.body.clientWidth);
	var b = getOfs(_c.children[0]);

	_w = w < 960 ? w : 960;
	_w = _w < 240 ? 240 : _w;

	_h.children[0].style.width = _w + 'px';
	_t.children[0].style.width = _w + 'px';
	_c.children[0].style.width = _w + 'px';
	_f.children[0].style.width = _w + 'px';
	document.body.style.overflowX = 'hidden';
}
//setTimeout("screenCheck()",100);
//window.onresize = screenCheck;
//]]>
</script>