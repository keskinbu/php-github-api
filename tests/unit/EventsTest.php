<?php

use Github\Client;
use Github\ApiToken;

class EventsTest extends PHPUnit\Framework\TestCase
{
    public function test()
    {
        $token  = new ApiToken();
        $client = new Client($token);

        $response = $client->user()->events('keskinbu');

        $this->assertGreaterThan(1, (count(json_decode($response, true))));
    }
}
