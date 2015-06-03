<!DOCTYPE html>
<html>
	<head>
		<title>Test Student Record Details</title>
		<link rel="stylesheet" type="text/css" href="record.css">
	</head>
	<body bgcolor="#999999">
	<img class="pos_fixed" src="bg2.png"/>
	
	<div><a id="back" href="/test.php"><img src="back.png" /></a> <?php
	$user = $_GET['user'];
	if(isset($_GET['page'])) {
		$user.="/".$_GET['page'];
	}
	echo '<iframe id="thumb" src="./users/'.$user.'"></iframe>'; ?></div>
		<div>
			<table>
				<tr><th>Error Log</th></tr>
				<?php
					
					
					set_error_handler(function($errno, $errstr, $errfile, $errline, array $errcontext) {   
								throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
							}, E_ALL);
						
						$list = scandir('./users/'.$user.'/');
						
						unset($list[0]);
						unset($list[1]);
						
						$files = 0;
						
						foreach($list as $item) {
							
							
							try { 
    $xml = simplexml_load_file('./users/'.$user.'/'.$item);
	$files+=1;
	$foo = json_decode(json_encode($xml), TRUE);
	

   
} catch (Exception $e) {
	$file = $e->getFile();
	$file = explode('/',$file);
	$file = $file[count($file)-1];
     echo '<tr><td class="name_col">'.$e->getMessage().'</td></tr>';
	
}

							
						
						
					}
				?>
				</table>
		</div>
	</body>
</html>