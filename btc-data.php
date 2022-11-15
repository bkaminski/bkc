<?php
$apiurl = "https://www.bitstamp.net/api/ticker";
$content = file_get_contents($apiurl);
$json = json_decode($content, true);

$price = $json['last'];
$price2 = number_format($price);
$high = $json['high'];
$high2 = number_format($high);
$low = $json['low'];
$low2 = number_format($low);
$open = $json['open'];
date_default_timezone_set('US/Eastern');
$date = date('M jS Y');
$time = date('h:ia');

if ($open < $price) {
    $change = $price - $open;
    $percent = ($change / $open) * 100;
    $percentChange = number_format($percent, 2);
    $percentChange = '<i class="fa fa-chevron-up text-green"></i> ' . $percentChange;
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
        <div class="col-lg-12 text-center">
            <h3><i class="fab fa-bitcoin fa-lg fa-fw satoshi-orange"></i><span style="margin-left: 0.6rem;">Bitcoin Price</span></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 text-center">
            <p class="h2 fw-bold" style="color:$color">$$price2</p>
        </div>
        <div class="col-lg-6 text-center">
            <p class="h5 pt-2" style="color:$color;">$percentChange%</p>
        </div>
    </div>   
    <div class="row pt-2">
        <div class="col-lg pt-1 text-center">
            <p class="h6">$$high2 H</p>
            <p class="h6">$$low2 L</p>
        </div>
        <div class="col-lg text-center">$date<br>$time</div>
    </div>
    EOT;
echo $priceData;
