<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="0; url=story.php" /> <!-- when integrated return to homepage-->
	</head>
	<?php 
		$name = $_POST["user"];
		$title = $_POST["title"];
		$date = $_POST["date"];
		$story = $_POST["story"];
		$to_write = array($title, $story, $name, $date);
		$to_write = implode("|",$to_write);
		file_put_contents("post_story.txt", $to_write);
		echo "Your story has been posted";		
	?>

</html>

