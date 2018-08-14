<?php
/*
 * This file is part of the Marketo REST API Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CSD\Marketo\Response;

use CSD\Marketo\Response;

/**
 * Response for the getMyTokens API method.
 */
class GetMyTokensResponse extends Response
{
    /**
     * @return array|null
     */
    public function getMyTokens()
    {
        if ($this->isSuccess())
        {
            $result = $this->getResult();
            return $result[0];
        }
        return null;
    }

    /**
     * @return array|null
     */
    public function getTokenList()
    {
        if ($this->isSuccess())
        {
            $tokens = $this->getMyTokens();
            return $tokens['tokens'];
        }
        return null;
    }
}
