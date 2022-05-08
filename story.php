<!DOCTYPE html>
<html>
	<head>
		<?php
			$story_data = file("post_story.txt"); //Get file
				for($i = 0; $i < count($story_data); $i++){
					$user = explode("|", $story_data[$i]);
					$title = $user[0];
					$story = $user[1];
					$author = $user[2];
					$date = $user[3];
				}
		?>	

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="story.css">
		<title><?=$title?></title>
	</head>
	
	<body>
		<div class="navbar">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="create_story.php">Create an article</a></li>    <!-- This was included for testing  -->
				<li><a href="#logout">logout</a></li>
			</ul>
		</div>
		
		<h1><center><?=$title?></center></h1>
		
		<h2>Author: <?=$author?></h2>
		
		<h3>Date Posted: <?=$date?></h3>
		
		<div class="story">
			<p>
				<?php
					echo $story;
				?>
			</p>
		</div>
		
			Leave a comment:
			<div id="postcomments">
				<?php
				$user_data= file("CMPT-241/files/users.txt"); //Get file
					for($i = 0; $i < count($user_data); $i++){
						$user = explode("|", $user_data[$i]);
						$fname = $user[0];
					}
				?>	
			<form action="post_comment.php" method="post" id="postform">
				<input type="hidden" name="user" value="<?php echo $fname;?>">
				<input type="hidden" name="date" value="<?php echo date("M d Y");?>">
				<textarea cols="40" rows="8" name="comment" form="postform"></textarea>
				<input type="submit">
			</form>
			</div>
			Comments
			<div class="showcomments">

				<?php
					$file = fopen("comments.txt","r");   //printing all comments for current story
						while(! feof($file))
						  {
						  echo fgets($file). "<br />";
						  }
					fclose($file);
				?>
				
			</div>

	</body>
</html>