<div class="title">약도안내</div>
<div class="line"></div>

								<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
								<script type="text/javascript">
									function mw_google_map(mapid, addr) {
										var geocoder =  new google.maps.Geocoder();
										geocoder.geocode( {'address': addr }, function(results, status) {
											if (status == google.maps.GeocoderStatus.OK) {
												var map = new google.maps.Map(document.getElementById(mapid), {
													zoom: 18,
													center: results[0].geometry.location,
													mapTypeId: google.maps.MapTypeId.ROADMAP
												});
												var marker = new google.maps.Marker({map: map, position: map.getCenter()});
											}
										});
									}
								$(document).ready(function () {
									mw_google_map("google_map", "울산 중구 성남동 젊음의 2거리 29번지");
								});
								</script>
								<div id="google_map" style="width:100%; height:420px; border:1px solid #ed505e; margin:20px 0 20px 0;"></div>
									<div class="map_text">Address : 울산광역시 중구 성남동 젊음의 2거리 29번지 훼미리타워 11층 1104호<br />
									Tel : 1544 - 1466<br />
									Fax : (070) 4032.0797<br />
									사업자등록번호 : 620-81-47109<br /></div>

                              </div>
                              
                           </div>
                        </div>
