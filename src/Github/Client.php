<?php

namespace Github;

use Github\Traits\ClientTrait;
use Github\Traits\MethodsTrait;
use GuzzleHttp\Client as GuzzleHttpClient;

/**
 *
 */
class Client
{
    use ClientTrait;
    use MethodsTrait;

    /** Base API URI */
    public const GITHUB_URI = 'https://api.github.com/';

    /**
     * Guzzle Http Client
     *
     * @var GuzzleHttpClient
     */
    private $guzzleHttpClient;

    /**
     * Store the options
     *
     * @var array
     */
    private $options = [];

    /**
     * Api token class
     *
     * @var ApiToken
     */
    private $apiToken;

    public function __construct(ApiToken $apiToken, array $options = [])
    {
        $this->guzzleHttpClient = new GuzzleHttpClient();
        $this->apiToken = $apiToken;
    }

    public function makeRequest(string $endpoint)
    {
        $headers = [
            'Accept' => 'application/vnd.github.v3+json'
        ];

        if ($this->getApiToken()->getToken()) {
            $headers = array_merge($headers, [
                'Authorization' => 'Bearer ' . $this->getApiToken()->getToken()
            ]);
        }

        return $this->guzzleHttpClient->request(
            'GET',
            Client::GITHUB_URI . $endpoint,
            [
                'headers' => $headers,
            ]
        );
    }

    /**
     * @return \Github\ApiToken
     */
    public function getApiToken(): \Github\ApiToken
    {
        return $this->apiToken;
    }

    /**
     * @param \Github\ApiToken $apiToken
     *
     * @return $this
     */
    public function setApiToken(\Github\ApiToken $apiToken)
    {
        $this->apiToken = $apiToken;
        return $this;
    }
}
