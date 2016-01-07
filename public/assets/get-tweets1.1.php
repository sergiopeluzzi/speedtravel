<?php
session_start();
require_once('twitteroauth/twitteroauth.php'); //Path to twitteroauth library
 
$twitteruser = "@bugao7";
$notweets = 10;
$consumerkey = "pxMYwf4EojDtzAe0dLkpzGLjT";
$consumersecret = "ChecLGFgHVVPx43e7Q2qVMZme6oXQLEx8ZamB6P3GdPbeY1zE8";
$accesstoken = "67010301-4frXjOoC2G9itt1kmFfmrEeUKgFQ4uvHRdjwAvXRS";
$accesstokensecret = "0Wau5v9USh57Dnx0ZY6CCqXZPqkXgiA52YBfyavkiF5rS";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>