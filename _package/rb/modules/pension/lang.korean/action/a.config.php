<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);
/*
$_tmpdfile = $g['dir_module'].'var/var.php';
$fp = fopen($_tmpdfile,'w');
fwrite($fp, "<?php\n");

fwrite($fp, "\$d['mymodule']['layout'] = \"".$layout."\";\n");
fwrite($fp, "\$d['mymodule']['theme'] = \"".$theme."\";\n");
fwrite($fp, "\$d['mymodule']['theme_m'] = \"".$theme_m."\";\n");
fwrite($fp, "\$d['mymodule']['jointmenu'] = \"".$jointmenu."\";\n");

fwrite($fp, "?>");
fclose($fp);
@chmod($_tmpdfile,0707);
*/
getLink('reload','parent.','설정이 반영되었습니다.','');
?>