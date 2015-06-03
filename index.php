<!DOCTYPE html>
<?php include("login.php"); ?>
<html>
	<head>
		<title>Test Student Record</title>
		<link rel="stylesheet" type="text/css" href="record.css">
	</head>
	<body>
	
	<br /><br /><br /><br />
		
		<div>
			<img class="pos_fixed" src="background.png"/>
			<p id='back'>Class: <?php echo $attributes['class'][0]; ?></p>
			<table class="record">
				<?php
				
					$dirs = scandir('./users');
					unset($dirs[0]);
					unset($dirs[1]);
					set_error_handler(function($errno, $errstr, $errfile, $errline, array $errcontext) {   
								throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
							}, E_ALL);
					foreach ($dirs as $user) {
						$imgs = 0;
						$links = 0;
						$list = scandir('./users/'.$user.'/');
						
						unset($list[0]);
						unset($list[1]);
						
						$files = 0;
						
						foreach($list as $item) {
							
							
							try { 
    $xml = simplexml_load_file('./users/'.$user.'/'.$item);
	$files+=1;
	$foo = json_decode(json_encode($xml), TRUE);
	$imgArray = $xml->xpath('//img');
	$linkArray = $xml->xpath('//a');
	$imgs+=count($imgArray);
	$links+=count($linkArray);
	

   
} catch (Exception $e) { 
     
	
} 

							
						}
						for($i=0; $i < 10; $i++) {
							if($user != '.' && $user != '..') {
								$name = '<tr><td class="name_col">'.$user.'</td>';
								$num_files = '<td class="skinny">'.$files.'</td>';
								$num_imgs = '<td class="skinny">'.$imgs.'</td>';
								$num_links = '<td class="skinny">'.$links.'</td>';
								$error_log = '<td class="links"><a href="details.php?user='.$user.'"><img src="go.png" /></a></td>';
								$website = '<td class="links"><a href="users/'.$user.'/"><img src="go.png" /></a></td>';
								if($REVIEW_ENABLED) {
									$review = '<td class="links"><a href="review.php?user='.$user.'"><img src="go.png" /></a></td>';
								}
								else {
									$review = '<td class="links">Off</td>';
								}
								echo ($name.$num_files.$num_imgs.$num_links.$error_log.$website.$review);
							}
						}
						
						
						
						
						
					}
				?>
				</table>
		</div>
		<div class="spacer"></div>
	</body>
</html>