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
  'gc' => '01',
  'lat' => $_POST['lat'],
  'lon' => $_POST['lon'],
  'dist' => '3'
);
 
$ch = curl_init($api.'?'.http_build_query($params));
curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT      => "Yahoo AppID: $appid"
));
 
$result = curl_exec($ch);
curl_close($ch);
return $result
?>
