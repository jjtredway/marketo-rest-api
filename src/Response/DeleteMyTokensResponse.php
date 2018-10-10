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
 * Response for the delete token API methods.
 */
class DeleteMyTokensResponse extends Response
{
    /**
     * Get the result of a delete token request.
     *
     * @return array|null
     */
    public function getTokenResult()
    {
        if ($this->isSuccess())
        {
            $result = $this->getResult();
            return $result[0];
        }
        return false;
    }
}
