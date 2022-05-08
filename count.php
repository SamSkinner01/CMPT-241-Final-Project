<?php
// Set the current working directory
$directory = getcwd()."/";

// Initialize filecount variable
$story_count = 0;
 
$files1 = glob( $directory ."story*" );

 
if( $files1) {
	$story_count = count($files1);
	$story_count++;
}

$fname1 = "story";
$fname2 = "comment";
$ex = ".txt";
$myfile = fopen($fname1.$story_count.$ex, "w");
$myfile = fopen($fname2.$story_count.$ex, "w");

echo "<br>";
?>
