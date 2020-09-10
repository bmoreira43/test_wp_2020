

<?php
$win = "win";
$gif_url = 'https://api.giphy.com/v1/gifs/search?api_key=XNiaDgAz2g1N9259GY4aMnpMAsWLn5Jv&q=' . $win .'&limit=5';

$jsondata = file_get_contents($gif_url);
$obj = json_decode($jsondata, true);
print_r($obj['Result']);
    

?>
