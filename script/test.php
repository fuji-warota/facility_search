<?php
/**
 * ルビ振りAPIへのリクエストサンプル（GET）
 *
 */
//$api = 'http://jlp.yahooapis.jp/FuriganaService/V1/furigana';
$api = 'https://map.yahooapis.jp/search/local/V1/localSearch';
//$appid = '<アプリケーションID>';
require('token.php');
$params = array(
    'lat' => '35',
    'lon' => '136',
    'dist' => '3',
    'gc' => '01'
);
 
$ch = curl_init($api.'?'.http_build_query($params));
curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT      => "Yahoo AppID: $appid"
));
 
$result = curl_exec($ch);
curl_close($ch);
print_r($result);
return $result
?>
