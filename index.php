<?php
require_once("inc/functions.php");

$params = $_GET; 
$hmac = $_GET['hmac'];
$serializeArray = serialize($params);
$params = array_diff_key($params, array('hmac' => ''));
ksort($params);

$parsedUrl = parse_url('https://'.$params['shop']);
$host = explode('.', $parsedUrl['host']);
$subdomain = $host[0];

$shop = "excellencetechn-com";
$token = "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";


$array = array(
	'script_tag' => array(
		'event' => 'onload', 
		'src' => 'https://14e94543a949.ngrok.io/shopifyProject/script.js'
	)
);

$scriptTag = shopify_call($token, $shop, "/admin/api/2019-07/script_tags.json", $array, 'POST');

$scriptTag = json_decode($scriptTag['response'], JSON_PRETTY_PRINT);
print_r($scriptTag)

?>
