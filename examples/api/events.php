<?php

use Github\Client;
use Github\ApiToken;

require_once 'init.php';

$githubAccessToken = getenv('GITHUB_ACCESS_TOKEN');

$token  = new ApiToken($githubAccessToken);
$client = new Client($token);

$response = $client->user()->events('keskinbu');

print_r($response);
