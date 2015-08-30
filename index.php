<html>
<head>
	<title>The Hindu Feeder</title>

	  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

  <style type="text/css">
  .heading {
    font-size:18px;
    text-align:left;
    background-color:#ee6e73;
    color:#FFFFFF;
    padding:5px;}
    </style>
  
</head>
<body>

	<?php 

include('feed-reader.php');

$get_feed = new rss('http://www.thehindu.com/news/national/tamil-nadu/?service=rss');
echo $get_feed->get_display(10,"The Hindu Feed Collector"); // feed count , heading  
 ?>


</body>
</html>