<html>
<head>
	
	<title><?php echo basename(__FILE__); ?></title>
	
	<meta name="viewport"
           content="width=device-width,
			user-scalable=yes,
			initial-scale=0.8,
                    maximum-scale=3.0" />

	<link rel="stylesheet" href="./stylesheet/main.css" type="text/css">
                    
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

	<!-- http://www.pori2.net/js/kihon/16.html -->
	<script type="text/javascript" src="./javascript/main.js"></script>
	
</head>

<?php

	//REF http://www.4web8.com/2581.html
	date_default_timezone_set('Asia/Tokyo');
	
// 	setlocale(LC_ALL, 'nl_NL');

	$current = time();
	
	$date_label = date("d/m/Y H:i:s");
	$date_only_label = date("d/m/Y");
	$time_label = date("H:i:s");
	$time_label_serial = date("Ymd_His");

	
?>

<body>



<table>

	<?php 
	
// 		for ($i = 0; $i < 10; $i++) {
		$i = 0; $j = 0;
		$i_max = 22;
		
		while ($i < $i_max) {
		
			;
			
	?>
			
		<tr>
		
			<?php 
				
				while ($j < 10) {
// 				for ($j = 0; $j < 10; $j++) {
				
					;
				
			?>
<!-- 			ref https://www.w3schools.com/tags/att_td_bgcolor.asp -->
				<td
					id='<?php echo "cell_$i"."x"."$j"; ?>'
					bgcolor='
						<?php
							
							$val = $i*10 + $j * 5;
							
							$hex = ($val <= 16 ? "0".dechex($val) : dechex($val));
							
							echo "#".$hex."0000";
// 							echo "#".dechex($i*10 + $j * 5)."0000";
							
							?>
						'
					>
<!-- 					bgcolor=' -->
						<?php 
								//echo "#ff00ff"; ?>
<!-- 								' -->
					
<!-- 					bgcolor='#ff0000' //=> works. -->
<!-- 					bgcolor='rgb( -->
						<?php //echo 0; ?>
<!-- 								, 0, 0)' -->
					<!-- bgcolor='rgb(<?php //echo (100 + $i * 10)?>, 0, 0)' -->
				
					<font color="#aaaaaa">
					
						<?php 
							
							echo $val."(".$hex.")"; 
// 							echo ($i*10 + $j * 5)."(".dechex($i*10 + $j * 5).")"; 
							
							?>
						
					</font>
					
					<?php //echo ($i * 10) + $j; ?>
					<?php //echo $i * $j; ?>
					<?php //echo $i * $j; ?>
				
				</td>
			
			<?php 
			
					$j += 1;
			
				}//while ($j < 10) {
// 				}//for ($j = 0; $j < 10; $j++)
			
			?>
		
		</tr>
		
	<?php
	
			$j = 0;
	
			$i += 1;
	
		}//while ($i < 10) {
// 		}//for ($i = 0; $i < 10; $i++)
	
	?>

</table>


</body>

</html>