<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Github\Client;
use Github\ApiToken;

class EventsTest extends TestCase
{
    public function test()
    {
        $dotenv = new Dotenv\Dotenv(__DIR__ . '/../..');
        $dotenv->load();

        $githubAccessToken = getenv('GITHUB_ACCESS_TOKEN');

        $token  = new ApiToken($githubAccessToken);
        $client = new Client($token);

        $response = $client->getEvents('keskinbu');

        $this->assertGreaterThan(1, (count(json_decode($response, true))));
    }
}
