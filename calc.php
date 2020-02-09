<?php

$ttvsubmod = 1;

$hours = $_POST['hours'];
$streams = $_POST['streams'];
$raids = $_POST['raids'];
if(isset($_POST['subbed'])) {
        $ttvsubmod = 2;
}
// $avgviewers = $_POST['avgviewers'];

// Number of minutes per points rewarded for watching
$ttvpntmin = 5;
// Points per $ttvpntmin minutes
$ttvpnt = 5;
// Number of minutes per active viewing rewards
$ttvredeemmin = 15;
// Points per $ttvredeemmin minutes
$ttvredeem = 50;
// Ammount of extra points you get for consecutive watches
$ttvstreak1 = 300;
$ttvstreak2 = 350;
$ttvstreak3 = 400;
// First cheer per month points
$ttvcheer = 350;
// First gift per month points
$ttvgift = 500;

// If they both sub and gift it cost the viewer this much per month.
// Calculate this based on options above.
// Defaulting to assuming both are true for now.
$viewercost = 10;

$ttvpnttot = (((($hours * 60) * $streams) / $ttvpntmin) * ($ttvsubmod * $ttvpnt) * 4);
$ttvredeemtot = (((($hours * 60) * $streams) / $ttvredeemmin) * ($ttvsubmod * $ttvredeem) * 4);
$ttvtotal = $ttvpnttot + $ttvredeemtot + $ttvstreak1 + $ttvstreak2 + $ttvstreak3 + $ttvcheer + $ttvgift;
$ttvtotxavg = $ttvtotal * $avgviewers;

echo "Total Points / Month: ".$ttvtotal."<br>\n\r";
// echo "Times AVG Viewers: ".$ttvtotxavg;
// echo 'hello world';

?>