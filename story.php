<!DOCTYPE html>
<html>
	<head>
		<?php
			$id = $_GET["story"];
			$story_data = file("stories/story$id.txt"); //Get file
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
		<?php include('nav.php')?>
		
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
				 //Get file
				if ('' == file_get_contents("files/signedin.txt")) {
					$fname = "";
					}
					else{
						$user_data= file("files/signedin.txt");
						$user = explode("|", $user_data[$i]);
						$fname = $user[0];
					}
				?>	
			<form action="post_comment.php?id=<?php print $id?>" method="post" id="postform">
				<input type="hidden" name="user" value="<?php echo $fname;?>">
				<input type="hidden" name="date" value="<?php echo date("M d Y");?>">
				<textarea cols="40" rows="8" name="comment" form="postform"></textarea>
				<input type="submit">
			</form>
			</div>
			Comments
			<div class="showcomments">

				<?php
					$file = fopen("stories/comments$id.txt","r");   //printing all comments for current story
						while(! feof($file))
						  {
						  echo fgets($file). "<br />";
						  }
					fclose($file);
				?>
				
			</div>

	</body>
</html>