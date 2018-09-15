<?php

namespace Github;

use Github\Exception\RuntimeException;

class ApiToken
{
    private $token = null;

    /**
     * Token Bag
     *
     * @param string $_apiToken
     */
    public function __construct($_apiToken = null)
    {
        $this->token = $_apiToken;
    }

    /**
     * Get the value of Api Token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of Api Token
     *
     * @param string apiToken
     *
     * @return self
     */
    public function setToken($apiToken)
    {
        if (!is_string($apiToken)) {
            throw new RuntimeException('The API token must be set.');
        }

        $this->token = $apiToken;

        return $this;
    }
}
