<?php
namespace Keskinbu\Github\Client\Builder;

use GuzzleHttp\Client;

class AuthenticationBuilder
{
    /**
     * GuzzleHttp Client
     *
     * @var Client $client
     */
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * [test description]
     * @param  string $test [description]
     * @return array        [description]
     */
    public function test(string $test): array
    {
        $test = 2;

        $test =3;

        $test = $test . $test2;

        return [];
    }

    public function asd()
    {
        $this->test('asd');
    }
}
