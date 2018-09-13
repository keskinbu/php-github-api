<?php

namespace Github\Api;

use GuzzleHttp\Client as GuzzleHttpClient;
use Github\ApiToken;
use Github\Client;

/**
 *
 */
class GithubApi
{
    /**
     * GuzzleHttp Client
     *
     * @var GuzzleHttpClient $httpClient
     */
    private $httpClient;

    /**
     * ApiToken bag.
     *
     * @var ApiToken
     */
    private $apiToken;

    public function __construct(ApiToken $apiToken)
    {
        $this->apiToken = $apiToken;
        $this->httpClient = new GuzzleHttpClient();
    }

    private function makeRequest(string $endpoint)
    {
        return $this->httpClient->request(
            'GET',
            Client::GITHUB_URI . $endpoint,
            [
                'headers' => [
                    'Accept' => 'application/vnd.github.v3+json',
                    'Authorization' => 'Bearer ' . $this->apiToken->getApiToken()
                ],
            ]
        );
    }

    public function getEvents(string $username)
    {
        return $this->makeRequest('users/' . $username . '/events')->getBody()->getContents();
    }
}
