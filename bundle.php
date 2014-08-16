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
<script type="text/javascript">// <![CDATA[
$(document).ready(function() {
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
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>
<body><div id="results">Loading ...</div>
</body>
</html>
