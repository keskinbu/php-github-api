<?php

namespace Github;

use Github\Exception\RuntimeException;

class ApiToken
{
    private $apiToken = null;

    /**
     * Token Bag
     *
     * @param string $_apiToken
     */
    public function __construct($_apiToken = null)
    {
        $this->apiToken = $_apiToken;
    }

    /**
     * Get the value of Api Token
     *
     * @return string
     */
    public function getApiToken()
    {
        return $this->apiToken;
    }

    /**
     * Set the value of Api Token
     *
     * @param string apiToken
     *
     * @return self
     */
    public function setApiToken($apiToken)
    {
        if (!is_string($apiToken)) {
            throw new RuntimeException('The Apitoken must be set.');
        }

        $this->apiToken = $apiToken;

        return $this;
    }
}
