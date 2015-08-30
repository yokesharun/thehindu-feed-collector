<html>
<head>
	<title>The Hindu Feeder</title>
</head>
<body>

	<?php 

include('feed-reader.php');

$get_feed = new rss('http://www.thehindu.com/news/national/tamil-nadu/?service=rss');
echo $get_feed->get_display(10,"hindu"); // feed count , heading  
 ?>


</body>
</html>