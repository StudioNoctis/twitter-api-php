twitter-api-php
======================
Etherfeed Twitter API
Built on Simple PHP Wrapper for Twitter API v1.1 calls

We wanted to use our Etherfeed to pull in Twitter statistics for a specific user, unable to find one, we decided to adapt J7mbo's code and make these queries.

Requirements & Installation
---------------------------

- PHP 5.3+
- cURL

How To Use
----------
#### Include the class file ####

    require_once('TwitterAPIExchange.php');

#### Set access tokens ####

    $settings = array(
        'oauth_access_token' => "YOUR_OAUTH_ACCESS_TOKEN",
        'oauth_access_token_secret' => "YOUR_OAUTH_ACCESS_TOKEN_SECRET",
        'consumer_key' => "YOUR_CONSUMER_KEY",
        'consumer_secret' => "YOUR_CONSUMER_SECRET"
    );

#### Choose URL and Request Method ####

    $url = 'https://api.twitter.com/1.1/blocks/create.json';
    $requestMethod = 'GET';

#### Decode the JSON and echo the request! ####

    echo "Followers $user->followers_count    \n";

Example
-------

    $url = 'http://api.twitter.com/1.1/users/show.json';
    $getfield = '?screen_name=studionoctis';
    $requestMethod = 'GET';
    
    echo "Followers $user->followers_count    \n";


That is it! Really simple, works great with the 1.1 API. 
Thanks to @J7mbo for the original source
