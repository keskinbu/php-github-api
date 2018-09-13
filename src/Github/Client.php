<?php

namespace Github;

use Github\Api\GithubApi;
use Github\ApiToken;

/**
 *
 */
class Client
{
    /** Base API URI */
    public const GITHUB_URI = 'https://api.github.com/';

    /**
     * Store the options
     *
     * @var array
     */
    private $options = [];

    /**
     * Github api
     *
     * @var GithubApi
     */
    private $api;

    public function __construct(ApiToken $apiToken, array $options = [])
    {
        $this->api = new GithubApi($apiToken);
    }

    public function getEvents(string $username)
    {
        return $this->api->getEvents($username);
    }
}
