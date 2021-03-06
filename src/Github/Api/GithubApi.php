<?php

namespace Github\Api;

use Github\Client;
use Github\Traits\ClientTrait;

/**
 *
 */
class GithubApi extends AbstractApi
{
    use ClientTrait;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
