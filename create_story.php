<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="stylesheet" href="story.css">
		<title>Submit an article</title>
	</head>
	
	<body>
		<?php include('nav.php')?>
		
		<h1><center>Submit an article</center></h1>
		
		<div id="poststory">
			<?php
					$user_data= file("files/users.txt"); //Get file
					for($i = 0; $i < count($user_data); $i++){
						$user = explode("|", $user_data[$i]);
						$fname = $user[0];
				}
			?>	
			<form action="post_story.php" method="post" id="postform">
				<input type="hidden" name="user" value="<?php echo $fname;?>">
				<input type="hidden" name="date" value="<?php echo date("M d Y");?>">
				<label for="title">Title:</label><br>
				<input type="text" name="title" form="postform"><br>
				Story:<br> 
				<textarea cols="70" rows="10" name="story" form="postform"></textarea>
				<input type="submit">
			</form>
		</div>				

	</body>
</html>

