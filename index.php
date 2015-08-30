<html>
<head>
	<title>The Hindu Feeder</title>

	  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
  
</head>
<body>

	<?php 

include('feed-reader.php');

$get_feed = new rss('http://www.thehindu.com/news/national/tamil-nadu/?service=rss');
echo $get_feed->get_display(10,"hindu"); // feed count , heading  
 ?>


</body>
</html>