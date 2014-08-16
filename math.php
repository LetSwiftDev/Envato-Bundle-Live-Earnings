
<?php
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

<table width="100%" height="280" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size: 16px; color: #333;">Envato Bundle's Live Sales And - Earnings Page - Free</td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#EFEFEF" style="font-size: 16px; color: #333;">Total Sales</td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#FFFFFF"><? echo $totalsales; ?></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#EFEFEF"><span style="font-size: 16px; color: #333;">Your Earnings</span></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#FFFFFF" style="color: #0C6">&dollar;<? echo number_format($yourearning, 2); ?></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#EFEFEF"><span style="font-size: 16px; color: #333;">Expected Earnings</span></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#FFFFFF" style="color: #4C908E"> <? echo ("$expected_sales_count"); ?> Item Sales -  &dollar;<? echo number_format($expected_earnings, 2); ?></td>
  </tr>
  
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#D8D8D8"><span style="font-size: 16px; color: #333;"><a href="http://themeforest.net/item/the-envato-market-bundle-is-on-for-1-week/8468659" style="font-size: 16px; color: #333;" target="_blank">Bundle info</a> - <a href="http://themeforest.net/user/MagicWorkers" style="font-size: 16px; color: #333;">MagicWorkers</a></span></td>
  </tr>
  
</table>
