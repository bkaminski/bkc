<?php 
$apiurlquote = "https://geek-quote-api.herokuapp.com/v1/quote";
$contentquote = file_get_contents($apiurlquote);
$jsonquote = json_decode($contentquote, true);
$author = $jsonquote['author'];
$quote = $jsonquote['quote'];
?>

<div class="row">
    <div class="col-lg-12 text-center pt-2">
        <blockquote class="fs-5 pb-3"><em>"<?php echo $quote; ?>"</em></blockquote>
        <cite class="text-green fw-bold h5">- <?php echo $author; ?></cite>
    </div>
</div>
