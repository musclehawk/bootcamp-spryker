<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\HelloSpryker\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Client\HelloSpryker\HelloSprykerClientInterface getClient()
 */
class IndexController extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array
     */
    public function indexAction(Request $request)
    {
        $helloSprykerTransfer = new HelloSprykerTransfer();
        $helloSprykerTransfer->setOriginalString('Hello Spryker!');

        $helloSprykerTransfer = $this->getClient()->reverseString($helloSprykerTransfer);

        return ['reverseString' => $helloSprykerTransfer->getReversedString()];
    }
}
