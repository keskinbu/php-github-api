<?php

namespace Github\Traits;

trait ClientTrait
{
    /**
     * The client
     *
     * @var Client
     */
    protected $client;

    /**
     * Get the value of The client
     *
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of The client
     *
     * @param Client client
     *
     * @return self
     */
    public function setClient(Client $client)
    {
        $this->client = $client;

        return $this;
    }
}
