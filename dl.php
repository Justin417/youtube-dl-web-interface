<html>
<head>
<title>youtube-dl</title>
<style>
body{
	background-color:#708890;
	font-family:Arial;
	color:white;
}
.box{
	border: 1px solid;
	width:70%;
	margin:auto;
}
</style>
</head>
<body>
<center>
<h1>Your request is processing. Terminal output below:</h1>
<div class="box">
<?php

$url = $_POST['url'];

echo exec("youtube-dl --extract-audio --audio-format mp3 $url 2>&1", $output);
print_r($output);

echo "Operation completed successfully.";
?>
</div>
<p>
<?php 

echo "File saved as:";

echo exec("ls *.mp3 2>&1", $output1);
echo "$output1";

// Move new .mp3 file to desired location

echo exec("mv *.mp3 /home/cherrymusic/music/ 2>&1", $output2);
echo "Moving files...";
echo "$output2"; 

?> 
</p>
<p><img src="dl.png"></p>
</body>
</html>
