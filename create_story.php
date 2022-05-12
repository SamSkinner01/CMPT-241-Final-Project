<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="stylesheet" href="story.css">
		<title>Submit an article</title>

		<!-- CSS -->
		<link rel="stylesheet" href="css/createstory.css">
	</head>

	<body>
		<?php include('nav.php')?>

		<div class="createstory-content">


		<h1 class="title">Submit an article</h1>

		<div class="poststory">
			<?php
					$user_data= file("files/signedin.txt"); //Get file
					for($i = 0; $i < count($user_data); $i++){
						$user = explode("|", $user_data[$i]);
						$fname = $user[0];
				}
			?>
			<form action="post_story.php" method="post" id="postform">
				<input type="hidden" name="user" value="<?php echo $fname;?>">
				<input type="hidden" name="date" value="<?php echo date("M d Y");?>">
				<span class="form-text">Title</span><br>
				<input type="text" name="title" form="postform" required><br>
				<span class="form-text">Story</span><br>
				<textarea cols="70" rows="10" name="story" form="postform" required></textarea>
				<input type="submit">
			</form>
		</div>
		</div>

	</body>
</html>
