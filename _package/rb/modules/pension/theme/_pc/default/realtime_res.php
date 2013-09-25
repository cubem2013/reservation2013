<div class="title">실시간 예약</div>
<div class="line"></div>
<img src="<?php echo $g['img_module_skin']?>/realtimeimg.png"><br />

<div class="s_title">객실 상세정보 <span style="color: #999; font-size: 11px; margin:0 90px 0 0;">이용하실 객실과 인원을 선택하여 주시기 바랍니다.</span>
<span style="text-align: right; font-size: 11px; color: #000;"><font style="background:#007eff; padding:1px 2px 1px 2px; color:#fff;">가능</font> 예약가능
<font style="background:#b5b5b5; padding:1px 2px 1px 2px; color:#fff;">대기</font> 입금대기
<font style="background:#f3574a; padding:1px 2px 1px 2px; color:#fff;">완료</font> 예약완료
<font style="background:#353535; padding:1px 2px 1px 2px; color:#fff;">문의</font> 전화문의</span></div>

<div class="t_type3s">
<form action="" method="post" name="room_info" id="room_info">
  <table border="0" cellspacing="0">
    <tr>
      <td colspan="2" rowspan="2">객실명</td>
      <td rowspan="2">객실정보</td>
      <td rowspan="2">인원</td>
      <td colspan="3">1인 객실이용요금</td>
    </tr>
  <tr bgcolor=#ffd0d0 align=center>
    <td style="color: #fff; font-weight:bold;">비수기</td>
    <td style="color: #fff; font-weight:bold;">여름성수기</td>
    <td style="color: #fff; font-weight:bold;">겨울성수기</td>
  </tr>
    <tr>
      <td align="center"><img src="<?php echo $g['img_module_skin']?>/s6_img.png"></td>
      <td><input type="checkbox" name="room" id="room" />
        <label for="room"></label>
        애플민트 <font style="background:#007eff; padding:1px 1px 1px 1px; color:#fff;">가능</font></td>
      <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">객실면적</font> 12평(40㎡)<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">객실유형</font> 커플침대<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">기준/최대</font> 2명 / 3명</td>
      <td><label for="people"></label>
        <select name="people" id="people">
          <option>2</option>
          <option>3</option>
</select></td>
      <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주중</font> 60,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주말</font> 80,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">휴일</font> 100,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">인원추가</font> 10,000원/1인</td>
      <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주중</font> 80,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주말</font> 100,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">휴일</font> 120,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">인원추가</font> 10,000원/1인</td>
      <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주중</font> 80,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주말</font> 100,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">휴일</font> 120,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">인원추가</font> 10,000원/1인</td>
    </tr>
    <tr>
      <td><img src="<?php echo $g['img_module_skin']?>/s6_img2.png"></td>
      <td><input type="checkbox" name="room2" id="room2" />
        <label for="room2"></label>
        로즈마리 <font style="background:#007eff; padding:1px 1px 1px 1px; color:#fff;">가능</font></td>
      <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">객실면적</font> 12평(40㎡)<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">객실유형</font> 커플침대<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">기준/최대</font> 2명 / 3명</td>
      <td><label for="people2"></label>
        <select name="people2" id="people2">
          <option>2</option>
          <option>3</option>
        </select></td>
      <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주중</font> 60,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주말</font> 80,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">휴일</font> 100,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">인원추가</font> 10,000원/1인</td>
      <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주중</font> 80,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주말</font> 100,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">휴일</font> 120,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">인원추가</font> 10,000원/1인</td>
      <td><font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주중</font> 80,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">주말</font> 100,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">휴일</font> 120,000원<br>
        <font style="background:#FFd0d0; padding:1px 1px 1px 1px;">인원추가</font> 10,000원/1인</td>
    </tr>
    </table>
</form>
</div>
<div class="ta_title">▶ 성수기 안내 : 11월 1일 ~ 11월 14일, 12월 24일 ~ 12월 25일, 12월 30일 ~ 1월 2일, 2월 10일 ~ 2월 20일<br />
▶ 준성수기 안내 : 10월 15일 ~ 10월 30일, 11월 15일 ~ 12월 1일<br />
▶ 주중/주말 안내 : 금,토요일은 주말요금이 적용됩니다.(월~목, 일요일은 주중요금)<br />
▶ 휴일 안내 : 법정공휴일은 휴일요금이 적용됩니다.</div><br />

<div class="s_title">부대시설 선택 <span style="color: #999; font-size: 11px;">이용하고자 하시는 부대시설을 체크하여 주시기 바랍니다.</span></div>
<div class="t_type4" >
<form name="form2" method="post" action="">
  <table  cellspacing="0">
    <tr>
      <td>이용부대시설</td>
      <td>이용요금</td>
      <td>수량</td>
      <td>비고</td>
    </tr>
    <tr>
      <td><input type="checkbox" name="additional" id="additional" />
        <label for="additional"></label>
        바베큐</td>
      <td align=right><span style="color: #f73131; font-weight: bold;">35,000원</span>/인분</td>
      <td align=right><label for="amount"></label>
        <input name="amount" type="text" id="amount" size="3" />
        인분</td>
      <td>소금, 된장구비</td>
    </tr>
    <tr>
      <td><input type="checkbox" name="additional2" id="additional2" />
        <label for="additional2"></label>
        캠프파이어</td>
      <td align=right><span style="color: #f73131; font-weight: bold;">55,000원</span>/시간</td>
      <td align=right><label for="amount"></label>
        <input name="amount2" type="text" id="amount" size="3" />
        시간</td>
      <td>기타 폭죽 및 이벤트 비용 별도협의</td>
    </tr>
  </table>
</form>
</div><br />


<div align="center"><a href="/pension/?r=home&m=pension&mode=realtime_res2" class="button s6_btn"><span>예약하기</span></a> <a href="#" class="button s6_btn2"><span>뒤로가기</span></a></div><br />

<br /><br />
