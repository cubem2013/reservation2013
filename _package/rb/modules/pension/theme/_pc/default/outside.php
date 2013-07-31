<script src="<?php echo $g['dir_module_skin'] = $g['dir_module'].'theme/'.$dispType.'/'.$theme.'/'?>/jquery.min.js"></script>
<script src="<?php echo $g['dir_module_skin'] = $g['dir_module'].'theme/'.$dispType.'/'.$theme.'/'?>/jquery.mobile.customized.min.js"></script>
<script src="<?php echo $g['dir_module_skin'] = $g['dir_module'].'theme/'.$dispType.'/'.$theme.'/'?>/jquery.easing.1.3.js"></script>
<script src="<?php echo $g['dir_module_skin'] = $g['dir_module'].'theme/'.$dispType.'/'.$theme.'/'?>/camera.min.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>



    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
    <meta name="description" content="Camera a free jQuery slideshow with many effects, transitions, adaptive layout, easy to customize, using canvas and mobile ready"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
<div class="title">외부보기</div>
<div class="line"></div>

	<div class="fluid_container">
        <div class="camera_wrap camera_magenta_skin" id="camera_wrap_1">
            <div data-thumb="./modules/pension/theme/_pc/default/image/outside1.jpg" data-src="./modules/pension/theme/_pc/default/image/outside1.jpg">
                <div class="camera_caption fadeFromBottom">
                   터치데이 펜션 풀장 <em>다른 펜션엔 없다. 오직 터치데이 펜션에만 있습니다</em>
                </div>
            </div>
            <div data-thumb="./modules/pension/theme/_pc/default/image/outside2.jpg" data-src="./modules/pension/theme/_pc/default/image/outside2.jpg">
                <div class="camera_caption fadeFromBottom">
                    터치데이 펜션 외부 <em>다른 펜션엔 없다. 오직 터치데이 펜션에만 있습니다</em>
                </div>
            </div>
            <div data-thumb="./modules/pension/theme/_pc/default/image/outside3.jpg" data-src="./modules/pension/theme/_pc/default/image/outside3.jpg">
                <div class="camera_caption fadeFromBottom">
                    터치데이 펜션 풀장 <em>다른 펜션엔 없다. 오직 터치데이 펜션에만 있습니다</em>
                </div>
            </div>
            
            <div data-thumb="./modules/pension/theme/_pc/default/image/outside4.jpg" data-src="./modules/pension/theme/_pc/default/image/outside4.jpg">
                <div class="camera_caption fadeFromBottom">
                    터치데이 펜션 외부 <em>다른 펜션엔 없다. 오직 터치데이 펜션에만 있습니다</em>
                </div>
            </div>
        </div>
    </div>