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
 * Response for the getProgramsByTag API method.
 */
class GetProgramsByTagResponse extends Response
{
    /**
     * @return array|null
     */
    public function getPrograms()
    {
        if ($this->isSuccess())
        {
            $result = $this->getResult();
            return $result;
        }
        return null;
    }

    /**
     * @return array|null
     */
    public function getProgramList()
    {
        if ($this->isSuccess())
        {
            $programs = $this->getPrograms();
            return $programs;
        }
        return null;
    }
}
