<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$sitename = ossn_site_settings('site_name');
$sitelanguage = ossn_site_settings('language');
if (isset($params['title'])) {
    $title = $params['title'] . ' : ' . $sitename;
} else {
    $title = $sitename;
}
if (isset($params['contents'])) {
    $contents = $params['contents'];
} else {
    $contents = '';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $sitelanguage; ?>">
<head>
 <script type="text/javascript">
      window.onload = function() { window.print(); }
 </script>
	<style>
	    body {background:#fff !important;padding:20px;}
	
		@page{margin:0}body{margin:0}.sheet{margin:0;overflow:hidden;position:relative;box-sizing:border-box;page-break-after:always}body.A3 .sheet{width:297mm;height:419mm}body.A3.landscape .sheet{width:420mm;height:296mm}body.A4 .sheet{width:210mm;height:296mm}body.A4.landscape .sheet{width:297mm;height:209mm}body.A5 .sheet{width:148mm;height:209mm}body.A5.landscape .sheet{width:210mm;height:147mm}body.letter .sheet{width:216mm;height:279mm}body.letter.landscape .sheet{width:280mm;height:215mm}body.legal .sheet{width:216mm;height:356mm}body.legal.landscape .sheet{width:357mm;height:215mm}.sheet.padding-10mm{padding:10mm}.sheet.padding-15mm{padding:15mm}.sheet.padding-20mm{padding:20mm}.sheet.padding-25mm{padding:25mm}@media screen{body{background:#e0e0e0}.sheet{background:#fff;box-shadow:0 .5mm 2mm rgba(0,0,0,.3);margin:5mm auto}}@media print{body.A3.landscape{width:420mm}body.A3,body.A4.landscape{width:297mm}body.A4,body.A5.landscape{width:210mm}body.A5{width:148mm}body.legal,body.letter{width:216mm}body.letter.landscape{width:280mm}body.legal.landscape{width:357mm}}
	</style>
</head>
<body>
	<?php echo $contents; ?>         
</body>
</html>