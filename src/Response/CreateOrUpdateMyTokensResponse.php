<?php
/*
 * This file is part of the Marketo REST API Client package.
 *
 * (c) 2014 Daniel Chesterton
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CSD\Marketo\Response;

use CSD\Marketo\Response;

/**
 * Response for the create/update lead API methods.
 */
class CreateOrUpdateMyTokensResponse extends Response
{
    /**
     * Get the result of a create/update token request.
     *
     * @return array|null
     */
    public function getTokenResult()
    {
       if ($this->isSuccess()) {
            $result = $this->getResult();
            return $result[0];
        }
        return false;
    }


    /**
     * @return array|null
     */
    public function getTokenValues()
    {
        if ($this->isSuccess())
        {
            $tokens = $this->getTokenResult();
            return $tokens['tokens'];
        }
        return null;
    }
}
