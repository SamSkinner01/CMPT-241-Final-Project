<!DOCTYPE html>
<html>
	<head>
		<?php
			$header = file("headers.txt");  // decided to name this file header because i dint want to cause confusion with the story file this comment needs to be deleted before submission   i propose each stroy have header,story and comment section unless there is a better way to optimize
		?>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="story.css">
		<title><?=$header[0] ?></title>
	</head>
	
	<body>
		<div class="navbar">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="create_story.php">Create an article</a></li>    <!-- This was included for testing  -->
				<li><a href="#logout">logout</a></li>
			</ul>
		</div>
		
		<h1><center><?=$header[0] ?></center></h1>
		
		<h2>Author: <?=$header[1] ?></h2>
		
		<h3>Date Posted: <?=$header[2] ?></h3>
		
		<div class="story">
			<p>
				<?php
					$story = file_get_contents("story.txt");
					echo $story;
				?>
			</p>
		</div>
		
			Comment:
			<div id="postcomments">
			
			<form action="post_comment.php" method="post" id="postform">
				<input type="hidden" name="date" value="<?php echo date("M d Y H:i A");?>">
				<textarea cols="40" rows="8" name="comment" form="postform"></textarea>
				<input type="submit">
			</form>
			</div>
			Comments
			<div class="showcomments">

				<?php
					//echo file_get_contents("comments.txt");
					//$comments = file("comments.txt");
					//$to_read = array ($comments);
					//$to_read = implode("\n",$comments);
					//echo $to_read;
					
					$file = fopen("comments.txt","r");   //printing all comments for current story
						while(! feof($file))
						  {
						  echo fgets($file). "<br />";
						  }
					fclose($file);
					
					//$comments = fopen("comments.txt","r");
						//while(! feof($comments))  {
						//	$result = fgets($comments) "<br/ >";
						//	echo $result;
						//}
					//fclose($comments);
				?>
				
			</div>

	</body>
</html>

