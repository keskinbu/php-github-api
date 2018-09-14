<?php

namespace Github\Api;

use Github\Api\ApiInterface;
use Github\Client;
use Github\Traits\ClientTrait;

abstract class AbstractApi implements ApiInterface
{
    use ClientTrait;

    /**
     * Constructor
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Send a GET request
     *
     * @param  string $path
     * @param  array  $parameters
     * @param  array  $headers
     * @return mixed
     */
    public function get($path, array $parameters = [], $headers = [])
    {
        $response = $this->getClient()->getHttpClient()->get($path, $parameters, $headers);

        return $this->decodeResponse($response);
    }

    /**
     * Send a HEAD request
     *
     * @param $path
     * @param  array $parameters
     * @param  array $headers
     * @return mixed
     */
    public function head($path, array $parameters = [], $headers = [])
    {
        $response = $this->getClient()->getHttpClient()->head($path, $parameters, $headers);

        return $this->decodeResponse($response);
    }

    /**
     * Send a POST request
     *
     * @param  string $path
     * @param  null   $postBody
     * @param  array  $parameters
     * @param  array  $headers
     * @return mixed
     */
    public function post($path, $postBody = null, array $parameters = [], $headers = [])
    {
        $response = $this->getClient()->getHttpClient()->post($path, $postBody, $parameters, $headers);

        return $this->decodeResponse($response);
    }
}
