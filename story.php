<!DOCTYPE html>
<html>
	<head>
		<?php
			$id = $_GET["story"];

			$story_data = file_get_contents("stories/story$id.txt"); //Get file
			$output = "";
			$user = array();
				for($i = 0; $i <= strlen($story_data); $i++){
					if($i == strlen($story_data)){
						array_push($user, $output);
						$output = "";
						break;
					}

					if($story_data[$i] == "|"){
						array_push($user, $output);
						$output = "";
						$i++;
					}

					$output .= $story_data[$i];
				}

				$title = $user[0];
				$story = $user[1];
				$author = $user[2];
				$date = $user[3];
		?>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="story.css">
		<title><?=$title?></title>

		<!-- CSS -->
		<link rel="stylesheet" href="css/story.css">
	</head>

	<body>
		<?php include('nav.php')?>

		<div class="story-info">


		<h1 class="title"><?=$title?></h1>

		<h2>Author: <?=$author?></h2>

		<h3>Date Posted: <?=$date?></h3>

</div>
		<div class="story">
			<p>
				<?php
					echo $story;
				?>
			</p>
		</div>

<div class="showcomments">
			<p>Leave a comment:</p>
			<div id="postcomments">
				<?php
				 //Get file
				if ('' == file_get_contents("files/signedin.txt")) {
					$fname = "";
					}
					else{
						$user_data= file("files/signedin.txt");
						$user = explode("|", $user_data[1]);
						$fname = $user[0];
					}
				?>
			<form action="post_comment.php?id=<?php print $id?>" method="post" id="postform">
				<input type="hidden" name="user" value="<?php echo $fname;?>">
				<input type="hidden" name="date" value="<?php echo date("M d Y");?>">
				<textarea cols="70" rows="8" name="comment" form="postform"></textarea>
				<input type="submit">

			</form>
			</div>
			<p class ="comment-word">
				Comments
			</p>
			<br />


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
