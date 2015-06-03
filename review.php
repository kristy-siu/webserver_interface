<!DOCTYPE html>
<?php include("login.php"); ?>
<html>
	<head>
		<title>Test Student Record Details</title>
		<link rel="stylesheet" type="text/css" href="record.css">
		<script type="text/javascript" src="jquery-min.js"></script>
<script type="text/javascript">

function go_back() {
	alert(	document.getElementById('thumb').contentWindow.history);
	document.getElementById('thumb').contentWindow.history.go(-1)
}
$(document).ready(function(){
<?php 
	if (isset($_GET['success'])) {
		if ($_GET["success"] == "true") {
			echo ("alert('Added Review')");
		}
		
		if ($_GET["success"] == "repeat") {
			echo ("alert('You can only post one review per day for each website!')");
		}
		if ($_GET["success"] == "false") {
			echo ("alert('An error occurred')");
		}
	}
?>
//  Check Radio-box
    $(".rating input:radio").attr("checked", false);
    $('.rating input').click(function () {
        $(".rating span").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('.rating input:radio').change(
    function(){
        var userRating = this.value;
       
    }); 
	//  Check Radio-box
    $(".rating1 input:radio").attr("checked", false);
    $('.rating1 input').click(function () {
        $(".rating1 span").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('.rating1 input:radio').change(
    function(){
        var userRating = this.value;
       
    });
//  Check Radio-box
    $(".rating2 input:radio").attr("checked", false);
    $('.rating2 input').click(function () {
        $(".rating2 span").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('.rating2 input:radio').change(
    function(){
        var userRating = this.value;
       
    });
//  Check Radio-box
    $(".rating3 input:radio").attr("checked", false);
    $('.rating3 input').click(function () {
        $(".rating3 span").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('.rating3 input:radio').change(
    function(){
        var userRating = this.value;
       
    });	
});
</script>
	</head>
	<body bgcolor="#999999">
	<img class="pos_fixed" src="bg2.png"/>
	
	<div><a id="back" href="/test.php"><img src="back.png" /></a>
	<?php
	$user = $_GET['user'];
	if(isset($_GET['page'])) {
		$user.="/".$_GET['page'];
	}
	echo '<iframe id="thumb" src="./users/'.$user.'"></iframe>'; ?></div>
		<div>
		<form action="store_comment.php" method="POST">
			<table class='review'>
				
				<?php
					
					
					set_error_handler(function($errno, $errstr, $errfile, $errline, array $errcontext) {   
								throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
							}, E_ALL);
						
						$list = scandir('./users/'.$user.'/');
						
						unset($list[0]);
						unset($list[1]);
						
						$files = 0;
						
		?>
		
	<tr><td>	Style:</td><td >	Layout:</td><td >	Content:</td><td>	Navigation:</td></tr>
	<tr><td><div class="rating">
	
    <span><input type="radio" name="style" id="str5s" value="5"><label for="str5s"></label></span>
    <span><input type="radio" name="style" id="str4s" value="4"><label for="str4s"></label></span>
    <span><input type="radio" name="style" id="str3s" value="3"><label for="str3s"></label></span>
    <span><input type="radio" name="style" id="str2s" value="2"><label for="str2s"></label></span>
    <span><input type="radio" name="style" id="str1s" value="1"><label for="str1s"></label></span>
</div></td><td><div class="rating1">
	
    <span><input type="radio" name="lay" id="str5l" value="5"><label for="str5l"></label></span>
    <span><input type="radio" name="lay" id="str4l" value="4"><label for="str4l"></label></span>
    <span><input type="radio" name="lay" id="str3l" value="3"><label for="str3l"></label></span>
    <span><input type="radio" name="lay" id="str2l" value="2"><label for="str2l"></label></span>
    <span><input type="radio" name="lay" id="str1l" value="1"><label for="str1l"></label></span>
</div></td><td><div class="rating2">
	
    <span><input type="radio" name="con" id="str5c" value="5"><label for="str5c"></label></span>
    <span><input type="radio" name="con" id="str4c" value="4"><label for="str4c"></label></span>
    <span><input type="radio" name="con" id="str3c" value="3"><label for="str3c"></label></span>
    <span><input type="radio" name="con" id="str2c" value="2"><label for="str2c"></label></span>
    <span><input type="radio" name="con" id="str1c" value="1"><label for="str1c"></label></span>
</div></td><td><div class="rating3">
	
    <span><input type="radio" name="nav" id="str5n" value="5"><label for="str5n"></label></span>
    <span><input type="radio" name="nav" id="str4n" value="4"><label for="str4n"></label></span>
    <span><input type="radio" name="nav" id="str3n" value="3"><label for="str3n"></label></span>
    <span><input type="radio" name="nav" id="str2n" value="2"><label for="str2n"></label></span>
    <span><input type="radio" name="nav" id="str1n" value="1"><label for="str1n"></label></span>
</div></td></tr>
		
		<?php				
							
							

     echo '
<tr><td colspan=4 >Comment:<br>
<input type="hidden" name="author" value="'.$attributes["uid"][0].'">
<input type="hidden" name="owner" value="'.$user.'">
<textarea name="comment"></textarea>
<br>

<input type="submit" name="Submit">
</form></td></tr>';


							
						
						
					
				?>
				</table>
		</div><div class='spacer'></div>
	</body>
</html>