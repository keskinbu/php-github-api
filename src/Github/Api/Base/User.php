<?php

namespace Github\Api\Base;

class User extends AbstractMethods
{
    public function events(string $username)
    {
        return $this->getClient()->makeRequest('users/' . $username . '/events')->getBody()->getContents();
    }
}
