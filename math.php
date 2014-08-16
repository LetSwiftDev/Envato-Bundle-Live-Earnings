<?php

/*

math.php
Envato-Bundle-Live-Earnings
Created 13.08.2014
MagicWorkers


Support
-----------
http://codecanyon.net/forums/thread/live-bundle-earnings-code-gift-from-magicworkers-/139131
http://codecanyon.net/user/MagicWorkers
support@magicworkers.com


Usage 
-----------

1- Change your $html for bundle url.
2- Edit Config Here Are Values
3- Publish And Use Your bundle.php

*/


// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

// get DOM from URL or file 
$html = file_get_html('http://themeforest.net/item/the-envato-market-bundle-is-on-for-1-week/8468659');

$totalsales = $html->find('.sidebar-stats__number', 0, 1)->plaintext;
$totalsales = str_replace(array(','), '' , $totalsales);


// CONFIG HERE
$itemprice = "18.00";   		 // YOUR BUNDLE ITEM PRICE
$bundleprice = "30.00"; 		 // BUNDLE PRICE
$bundletotalprice = "1000.00";	 // BUNDLE TOTAL PRICE
$bundle_start_time = strtotime('13 August 2014 4:00am'); // BUNDLE START TIME
$bundle_length = 60*60*24*7; // BUNDLE LENGHT




// DONT CHANGE UNDER
$math1 = ($bundleprice) * ($totalsales); // total earnings
$math2 = ($math1) / 2; // authors earnings

$math3 = ($itemprice) / ($bundletotalprice); // your % earning
$math3 = ($math3) * (100);

$yourearning = ($math2 / 100) * ($math3);

$expected_earnings = 0;

$percentage_time = (time() - $bundle_start_time)/$bundle_length;
$expected_earnings = $yourearning / $percentage_time;


// Expected Sales Count
$expected_sales_count_value = number_format($yourearning, 2);
$expected_sales_count_math = ($expected_sales_count_value) / ($totalsales);
$expected_sales_count_math_value = number_format($expected_earnings, 2);
$expected_sales_count = ($expected_sales_count_math_value) / ($expected_sales_count_math);

 ?>
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
</style>


<table width="100%" height="443" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="63" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size: 16px; color: #333;"><img src="http://www.magicworkers.com/bundle/envato.png" width="181" height="57"  alt=""/></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#e58a3b" style="font-size: 16px; color: #fff;">Bundle Live Earnings </td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#fff" style="font-size: 16px; color: #333;">Total Sales</td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#1b87c8" style="color: #fff;"><? echo $totalsales; ?></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#fff"><span style="font-size: 16px; color: #333;">Your Earnings</span></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#81b441" style="color: #fff">&dollar;<? echo number_format($yourearning, 2); ?></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#fff"><span style="font-size: 16px; color: #333;">Expected Earnings</span></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#d43d3c" style="color: #fff"> <? echo ("$expected_sales_count"); ?> Item Sales -  &dollar;<? echo number_format($expected_earnings, 2); ?></td>
  </tr>
  
  <tr>
    <td height="32" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="54" align="center" valign="middle"><table width="430" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="140" height="31" align="center" valign="middle"><a href="http://themeforest.net/item/the-envato-market-bundle-is-on-for-1-week/8468659" style="font-size: 16px; color: #666;" target="_blank">Bundle info</a></td>
        <td width="161" align="center" valign="middle"><a href="https://github.com/MagicWorkers/Envato-Bundle-Live-Earnings" style="font-size: 16px; color: #666;" target="_blank">Github Project</a></td>
        <td width="129" align="center" valign="middle"><a href="http://themeforest.net/user/MagicWorkers" style="font-size: 16px; color: #666;">MagicWorkers</a></td>
      </tr>
    </table></td>
  </tr>
  
</table>
