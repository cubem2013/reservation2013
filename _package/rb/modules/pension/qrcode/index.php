<?php    
/*
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
    
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
include $g['dir_module'].'qrcode/qrlib.php';    
if (!file_exists($PNG_TEMP_DIR)) mkdir($PNG_TEMP_DIR);
    
$filename = $PNG_TEMP_DIR.'qr_'.$m.'.png';
if (!file_exists($filename))
{
	$errorCorrectionLevel = 'H';
	if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
	$errorCorrectionLevel = $_REQUEST['level'];    

	$matrixPointSize = 5;
	if (isset($_REQUEST['size']))
	$matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);

	if (isset($_REQUEST['data']))
	{ 
		if (trim($_REQUEST['data']) == '') exit;
		
		$filename = $PNG_TEMP_DIR.'_'.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
		QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
	} 
	else 
	{    
		QRcode::png($g['url_root'].'/?r='.$r.'&m='.$m, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
	}    
}
echo '<img src="'.$g['s'].'/modules/'.$m.'/qrcode/temp/'.basename($filename).'" alt="QRCODE" title="QRCODE" />'; 
?>   