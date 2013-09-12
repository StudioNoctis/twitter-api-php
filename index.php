<?php

/**
 * Twitter-API-PHP : Simple Etherfeed Twitter Data
 * 
 * PHP version 5.3.27
 * 
 * @category    	Data Stream
 * @package     	Twitter-API-PHP-Etherfeed
 * @author      	David McGreavy <david@studionoctis.com>
 * @basedon             twitter-api-php by J7mbo
 * @license     	MIT License
 * @link        	http://github.com/StudioNoctis/twitter-api-php-etherfeed
 * @requirements	PHP 5.3+ with cURL, Twitter Application
 */

ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "SET_VALUE",
    'oauth_access_token_secret' => "SET_VALUE",
    'consumer_key' => "SET_VALUE",
    'consumer_secret' => "SET_VALUE"
);

/** URL for the Twitter request, pulling in the stats for the username below **/
$url = 'http://api.twitter.com/1.1/users/show.json';
$getfield = '?screen_name=SET_VALUE';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
                    ->buildOauth($url, $requestMethod)
                    ->performRequest();
$user = json_decode($response);

/** echos the response from the GET Request **/
/** Due to Etherfeed limitations it will only allow one line item **/
/** Simply uncomment which field you want and save, it'll refresh **/

echo "Followers $user->followers_count    \n";
//echo "Favorites = $user->favourites_count  \n";
//echo "Retweets = " . $user->status->retweet_count . "   \n";

?>
