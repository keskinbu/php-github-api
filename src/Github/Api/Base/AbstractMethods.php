<?php

namespace Github\Api\Base;

use Github\Client;
use Github\Traits\ClientTrait;

class AbstractMethods
{
    use ClientTrait;

    public function __construct(Client $client)
    {
        $this->setClient($client);
    }
}