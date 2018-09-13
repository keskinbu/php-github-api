<?php

use Github\Client;
use Github\ApiToken;

require_once 'init.php';

$githubAccessToken = getenv('GITHUB_ACCESS_TOKEN');

$token  = new ApiToken($githubAccessToken);
$client = new Client($token);

print_r($client->getEvents('keskinbu'));
