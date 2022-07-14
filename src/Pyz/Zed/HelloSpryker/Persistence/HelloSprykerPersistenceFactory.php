<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Persistence;

use Orm\Zed\HelloSpryker\Persistence\PyzHelloSprykerQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerQueryContainerInterface getQueryContainer()
 */
class HelloSprykerPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\HelloSpryker\Persistence\PyzHelloSprykerQuery
     */
    public function createHelloSprykerQuery()
    {
        return PyzHelloSprykerQuery::create();
    }
}
