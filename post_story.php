<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="0; url=story.php" />
	</head>
	<?php 
		//$name = $_POST["name"];
		$story = $_POST["story"];
		$date = $_POST["date"];
		$to_write = array($story, $date);
		$to_write = implode("\n",$to_write);
		file_put_contents("post_story.txt", PHP_EOL.$to_write, FILE_APPEND);
		echo "Your story has been posted";		
	?>

</html>