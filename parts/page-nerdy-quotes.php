<?php 
$apiurlquote = "http://quotes.stormconsultancy.co.uk/random.json";
$contentquote = file_get_contents($apiurlquote);
$jsonquote = json_decode($contentquote, true);
$author = $jsonquote['author'];
$quote = $jsonquote['quote'];
?>

<div class="row">
    <div class="col-lg-12 text-center pt-3">
        <p class="fs-4 pb-3"><em><?php echo $quote; ?></em></p>
        <cite class="text-green fw-bold h4">- <?php echo $author; ?></cite>
    </div>
</div>