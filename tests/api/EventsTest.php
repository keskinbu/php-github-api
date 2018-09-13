<?php

use PHPUnit\Framework\TestCase;
use Github\Client;
use Github\ApiToken;

class EventsTest extends TestCase
{
    public function test()
    {
        $token  = new ApiToken();
        $client = new Client($token);

        $response = $client->getEvents('keskinbu');

        $this->assertGreaterThan(1, (count(json_decode($response, true))));
    }
}
