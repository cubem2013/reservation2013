<!--<script src="<?php echo $g['dir_module_skin'] = $g['dir_module'].'theme/'.$dispType.'/'.$theme.'/'?>/jquery.min.js"></script>-->
<script src="<?php echo $g['dir_module_skin'] = $g['dir_module'].'theme/'.$dispType.'/'.$theme.'/'?>/tytabs.jquery.min.js"></script>
<script src="<?php echo $g['dir_module_skin'] = $g['dir_module'].'theme/'.$dispType.'/'.$theme.'/'?>/jquery.flexslider.js"></script>
<script src="<?php echo $g['dir_module_skin'] = $g['dir_module'].'theme/'.$dispType.'/'.$theme.'/'?>/jquery.flexslider-min.js"></script>
<script src="<?php echo $g['dir_module_skin'] = $g['dir_module'].'theme/'.$dispType.'/'.$theme.'/'?>/modernizr.js"></script>
<script type="text/javascript">
<!--
//var slideId = jQuery('#tabs li').attr('id'); 
$(document).ready(function(){
	$("#tabsholder").tytabs({
							tabinit:"1",
							fadespeed:"fast"
							});
	$("#tabsholder2").tytabs({
							prefixtabs:"tabz",
							prefixcontent:"contentz",
							classcontent:"tabscontent",
							tabinit:"2",
							catchget:"tab",
							fadespeed:"normal"
							});
							
							
});

$(function(){
  SyntaxHighlighter.all();
});
$(window).load(function(){
  $('.flexslider').flexslider({
	animation: "slide",
	start: function(slider){
	  $('body').removeClass('loading');
	}
  });
});
</script>

<div class="title">객실정보</div>
<div class="line"></div>
<br>


    <div id="tabsholder2">
        <ul class="tabs">
            <li id="tabz1">애플민트</li>
            <li id="tabz2">로즈마리</li>
            <li id="tabz3">라벤더</li>
            <li id="tabz4">자스민</li>
            <li id="tabz5">레몬밤</li>
        </ul>
        <div class="contents marginbot">
            <div id="contentz1" class="tabscontent">
           		 <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
        <li>
     <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
  </ul>
          		  </div>
            </div>
            
            
            <div id="contentz2" class="tabscontent">
           		 <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
  </ul>
  
          		  </div>
                  <div class="r_title">로즈마리</div>
<div class="r_name">연인 혹은 친구들끼리 오시면 추천해드리는 룸으로 아담하고 편안한 분위기의 룸입니다.<br />
1층에 위치하고 있어 독립된 현관으로 바로 입실 할 수 있으며, 창 밖으로 푸른 잔디밭이 여러분을 맞이할 것입니다.<br />
테라스가 있어 사랑하는 사람과 티테이블에서 맞이할 수 있는 차 한잔의 여유를 갖을 수 있는 아름다운 방입니다.</div>

<div class="s_title">객실 상세정보</div>
<div class="t_type1" >
                <table cellspacing="0">
  <tr>
    <td width="70">객실명</td>
    <td>객실정보</td>
    <td>수용인원</td>
    <td>비수기 객실요금</td>
    <td>여름성수기 객실요금</td>
    <td>겨울성수기 객실요금</td>
  </tr>
  <tr>
    <td rowspan="4">로즈마리</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">객실면적</font> 12평(40㎡)</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">기준인원</font> 2명</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주중</font> 60,000원</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주중</font> 120,000원</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주중</font> 80,000원</td>
  </tr>
  <tr>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">객실유형</font> 커플침대</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">최대인원</font> 3명</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주말</font> 80,000원</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주말</font> 120,000원</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주말</font> 100,000원</td>
  </tr>
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">휴일</font> 100,000원</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">휴일</font> 120,000원</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">휴일</font> 120,000원</td>
  </tr>
  <tr>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">인원추가</font> 10,000원/1인</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">인원추가</font> 10,000원/인</td>
    <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">인원추가</font> 10,000원/1인</td>
  </tr>

</table>
            </div>


<div class="ta_title">▶ 주중/주말 안내 : 금,토요일은 주말요금이 적용됩니다.(월~목, 일요일은 주중요금)<br />
▶ 휴일 안내 : 법정공휴일은 휴일요금이 적용됩니다.</div>

<br />            
<div class="s_title">객실 내부정보</div>
<div class="t_type2" >
                <table cellspacing="0" >
    <td width="50" align="center" bgcolor="#ffb8b8" style="color: #fff">객실</td>
    <td>침대, 협탁, 스탠드, TV, 에어컨, 화장대, 옷걸이, 테이블, 헤어드라이어</td>
  </tr>
  <tr>
    <td bgcolor="#ffb8b8"  align="center" style="color: #fff">주방</td>
    <td>전기밥솥, 전자렌지, 식기일체, 조리기구일체, 식탁, 무선전기주전자</td>
  </tr>
  <tr>
    <td bgcolor="#ffb8b8"  align="center" style="color: #fff">욕실</td>
    <td>샴푸, 린스, 바디클렌저, 목욕용품일체, 비누, 치약, 월풀욕조, 사우나</td>
  </tr>
</table>
            </div>

            
    <div class="ta_title2">+ 기타 식기류 및 필수생활용품은 문의시 유료제공가능합니다.</div>
    <div align="center"><a href="#" class="button s2_btn"><span>객실 예약하기</span></a></div><br />
            </div>
            
            
            <div id="contentz3" class="tabscontent">
           		 <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
  </ul>
          		  </div>
            </div>
            
            
            <div id="contentz4" class="tabscontent">
           		 <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
     <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
  </ul>
          		  </div>
            </div>
            
            
            <div id="contentz5" class="tabscontent">
           		 <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>
    <li>
      <img src="<?php echo $g['img_module_skin']?>/s2_slider1.png">
    </li>

  </ul>
          		  </div>
            </div>

</div>
    </div>