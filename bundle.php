<?

/*

bundle.php
Envato-Bundle-Live-Earnings
Created 13.08.2014
MagicWorkers


Support
-----------
http://codecanyon.net/forums/thread/live-bundle-earnings-code-gift-from-magicworkers-/139131
http://codecanyon.net/user/MagicWorkers
support@magicworkers.com


Dont change anything here ! Edit only math.php

*/



?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Envato - Bundle Sales - Live Earning</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="flipclock.min.js"></script>
<link href="flipclock.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">// <![CDATA[
var clock;
$(document).ready(function() {

  /************* FLIPCLOCK *************/

  // Grab the current date
  var currentDate = new Date();

  // Set some date in the future. In this case, it's always Jan 1
  var futureDate  = new Date(currentDate.getFullYear(), 7, 20,12);


  // Calculate the difference in seconds between the future and current date
  var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

  // Instantiate a coutdown FlipClock
  clock = $('.clock').FlipClock(diff, {
  clockFace: 'DailyCounter',
  countdown: true,
  showSeconds: true
});

$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
  function instantGratification( fn, delay ) {
      fn();
      setInterval( fn, delay );
  }
  instantGratification( function() {
      $('#results').load('math.php');
  }, 60000);
});
// ]]></script>
<style type="text/css">
body,td,th {
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	font-size: 24px;
	color: #F36;
}
body {
	background-color: #D8D8D8;
	text-align:center;margin:0 auto;
}
#liveclock {
	width:700px;
	text-align:center;
	margin:0 auto;
}
#results {
	margin-bottom:40px;
}
</style>
</head>
<body>
<div id="results">Loading ...</div>
<div id="liveclock"><div class="clock"></div></div>
</body>
</html>
