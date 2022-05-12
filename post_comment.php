<!DOCTYPE html>
<html>

<?php
	$id = $_GET["id"];
?>
	<head>
		
		<meta http-equiv="refresh" content="0; url=story.php?story=<?php print $id?>" /> 
	</head>
	<?php 
	
		$user = $_POST["user"];

		if($user == ""){
			header("Location: login.php");
			exit();
			return;
		}

		$comment = $_POST["comment"];
		$to_write = array($user, $comment, "\n");
		$to_write = implode("\n",$to_write);
		file_put_contents("stories/comments$id.txt", PHP_EOL.$to_write, FILE_APPEND);
		echo "Your comment has been posted";		
	?>

</html>