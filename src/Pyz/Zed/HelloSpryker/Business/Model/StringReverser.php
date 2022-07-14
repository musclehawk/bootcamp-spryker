<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Business\Model;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Orm\Zed\HelloSpryker\Persistence\PyzHelloSpryker;

class StringReverser
{
    /**
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer)
    {
        $reverseString = strrev($helloSprykerTransfer->getOriginalString());
        $helloSprykerTransfer->setReversedString($reverseString);

        $this->saveReverseString($helloSprykerTransfer);

        return $helloSprykerTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return void
     */
    private function saveReverseString(HelloSprykerTransfer $helloSprykerTransfer)
    {
        $helloSprykerEntity = new PyzHelloSpryker();
        $helloSprykerEntity->setReversedString($helloSprykerTransfer->getReversedString())->save();
    }
}
