<?php
$apiurl = "https://www.bitstamp.net/api/ticker";
$content = file_get_contents($apiurl);
$json = json_decode($content, true);

$price = $json['last'];
$price2 = number_format($price, 2);
$high = $json['high'];
$high2 = number_format($high, 2);
$low = $json['low'];
$low2 = number_format($low, 2);
$open = $json['open'];
date_default_timezone_set('US/Eastern');
$date = date('M jS Y h:ia');

if ($open < $price) {
    $change = $price - $open;
    $percent = ($change / $open) * 100;
    $percentChange = number_format($percent, 2);
    $percentChange = '<i class="fa fa-chevron-down text-danger"></i>' . $percentChange . "%";
    $color = "#96d10c";
}

if ($open > $price) {
    $change = $open - $price;
    $percent = ($change / $open) * 100;
    $percentChange = number_format($percent, 2,);
    $percentChange = '<i class="fa fa-chevron-down text-danger"></i> '  . $percentChange;
    $color = "#cf2e2e";
}
$priceData = <<<EOT
    <div class="row">
        <div class="col-lg-8 text-center">
            <h3 class="text-white"><i class="fab fa-bitcoin fa-lg fa-fw"></i><span style="margin-left: 0.6rem;">Bitcoin Price</span></h3>
        </div>
        <div class="col-lg-4 text-center">
            <p class="h3 fw-bold" style="color:$color">$$price2</p>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-lg text-center">
            <p class="h3" style="color:$color;">$percentChange%</p>
        </div>
        <div class="col-lg pt-1 text-center">
            <p class="h6">$$high2 H</p>
            <p class="h6">$$low2 L</p>
        </div>
        <div class="col-lg text-center">$date EDT</div>
    </div>
    EOT;
echo $priceData;
