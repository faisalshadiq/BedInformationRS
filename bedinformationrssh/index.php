<?php
/**
 * Copyright © 2020 RS Sumber Hurip. All rights reserved. 
 * Name 			:  	Informasi TT
 * Description 		:	Aplikasi Display Tempat Tidur
**/

require_once (__DIR__ . '/model.php');
error_reporting(0);
///header("refresh: 10"); 
header("Expires: on, 01 Jan 1970 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Refresh:10; url=http://192.168.1.110/bedinformationrssh/");
?>

<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<!--[if IE]><![endif]-->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="author" content="Cadamba">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" href="css/style.css?v=1">
		<script src="js/modernizr-1.5.min.js"></script>
	</head>
	<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
	<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
	<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
	<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

	<div id="container">
		<header>
			<h1>BED INFORMATION</h1>
			<img src="img/logo.png" alt="Logo RS">
		</header>

		<div id="main">
<!-- 			<div id="date_time">
				<p id="time"></p>
				<p id="date"></p>
			</div> -->
			<!-- <input style="display: none;" type="button" name="btnRefresh" id="btnRefresh"> -->
			<div id="xcontent">
				<table>
					<thead>
						<tr>
							<th>RUANG</th>
							<th align="center">KELAS</th>
							<th align="center">KAPASITAS</th>
							<th align="center">TERSEDIA</th>
							<th align="center">PRIA</th>
							<th align="center">WANITA</th>
							<th align="center">TERPAKAI</th>
						</tr>
					</thead>
					<tbody>
					<?php
			        $model 		= new Model();					            					            
			        $column 	= '';

			        //call method getBedInformation()
			        $bedinfo = $model->getBedInformation();
			        foreach ($bedinfo as $row) {
			        	$column .= '
									<tr>
										<td style="padding-left:20px;">'.$row['namaruang'].'</td>
										<td align="center">'.$row['namakelas'].'</td>
										<td align="center">'.$row['kapasitas'].'</td>
										<td align="center">'.$row['tersedia'].'</td>
										<td align="center">'.$row['tersediapria'].'</td>
										<td align="center">'.$row['tersediawanita'].'</td>
										<td align="center">'.$row['dipakai'].'</td>
									</tr>        		
									';
			        }
			        echo $column;
			        ?>						
					</tbody>
				</table>
			</div>
		</div>

		<footer>

		</footer>
	</div> <!-- end of #container -->

	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
	<script>!window.jQuery && document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
	<script src="js/jquery.ngclock.0.1.js"></script>
	<!-- <script src="js/plugins.js?v=1"></script> -->
	<script src="js/script.js?v=1"></script>
	<script type="text/javascript">
	    // window.setInterval('refresh()', 10000); 	// Call a function every 10000 milliseconds (OR 10 seconds).

	    // // Refresh or reload page.
	    // function refresh() {
	    //     window.location.reload();
	    // }	
	 //    $(document).ready(function () { 
	 //    	setInterval(function () {document.getElementById("btnRefresh").click();}, 10000);
		// }); 

		// $('#btnRefresh').click(function(event){ 
		// 	$('#xcontent').load(document.URL +  ' #xcontent');
		// 	console.log( "load document" );
		// }); 

	</script>
	</body>
</html>