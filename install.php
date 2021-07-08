<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "088245e9f0ade4b0858216762f2fd89f";
$scopes = "read_orders,write_products,write_script_tags";
$redirect_uri = "https://14e94543a949.ngrok.io/shopifyProject/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();