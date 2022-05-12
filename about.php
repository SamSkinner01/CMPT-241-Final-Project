<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us</title>
	<link rel="stylesheet" href="css/about.css">
</head>

<body>

	<?php
	include('nav.php');
	?>

	<div class="content">
		<div class="mission">
			<h1> Mission </h1>

			<p>
				Reddit 2.0 encourages people to share stories they have about any events they see around them.
				Through Reddit 2.0 Features, people can create accounts to write their own stories and comment on other stories.
				We think people's voice is important so Reddit 2.0 is there for anyone to speak up and share their stories.
			</p>

		</div>




		<div class="features">
		<h1> Features </h1>
		<div class="list">
			<ul>
				<li> Sign in with an Existing Account </li>
				<li> Create a New Account </li>
				<li> Create your Stories </li>
				<li> Comment on Stories </li>
			</ul>
		</div>
		</div>
		



		<div class="signup">
		<h1>Join the Reddit 2.0 Community!
			<form action="signup.php" method="post">
				<input type="submit" value="Reddit 2.0">
			</form>
		</h1>
		</div>
		

	</div>
</body>

</html>