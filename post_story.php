<!DOCTYPE html>
<html>

	<?php 
		$directory = getcwd()."/";

		// Initialize filecount variable
		$story_count = 0;
		 
		$files1 = glob( $directory ."stories/story*.txt" );
		
		 
		if( $files1) {
			$story_count = count($files1);
			$story_count++;
		}
	?>
	<head>
		<meta http-equiv="refresh" content="0; url=homepage.php" /> <!-- when integrated return to homepage-->
	</head>
	<?php 
		$name = $_POST["user"];
		$title = $_POST["title"];
		$date = $_POST["date"];
		$story = $_POST["story"];
		$to_write = array($title, $story, $name, $date);
		$to_write = implode("|",$to_write);

		$fname1 = "story";
		$fname2 = "comments";
		$ex = ".txt";
		//$myfile = fopen($fname1.$story_count.$ex, "w");
		//$myfile = fopen($fname2.$story_count.$ex, "w");

		file_put_contents("stories/story$story_count.txt", $to_write);
		file_put_contents("stories/comments$story_count.txt", " ");
		echo "Your story has been posted";		
	?>

</html>

