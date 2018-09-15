<?php

namespace Github\Traits;

use Github\Api\Base\User;

trait MethodsTrait
{
    /**
     *
     * @return User
     */
    public function user()
    {
        return new User($this);
    }
}