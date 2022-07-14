<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Business\Model;

use Generated\Shared\Transfer\HelloSprykerTransfer;

class StringReader
{
    public function __construct()
    {
    }

    /**
     * @param int $id
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     */
    public function readString(int $id)
    {
        $helloSprykerTransfer = new HelloSprykerTransfer();

        return $helloSprykerTransfer;
    }
}
