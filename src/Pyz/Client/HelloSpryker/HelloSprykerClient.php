<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\HelloSpryker;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\HelloSpryker\HelloSprykerFactory getFactory()
 */
class HelloSprykerClient extends AbstractClient implements HelloSprykerClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFactory()
            ->createZedHelloSprykerStub()
            ->reverseString($helloSprykerTransfer);
    }
}
