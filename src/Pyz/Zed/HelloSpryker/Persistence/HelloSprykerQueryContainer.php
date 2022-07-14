<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloSpryker\Persistence;

use Orm\Zed\HelloSpryker\Persistence\PyzHelloSprykerQuery;
use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

/**
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerPersistenceFactory getFactory()
 */
class HelloSprykerQueryContainer extends AbstractQueryContainer implements HelloSprykerQueryContainerInterface
{
    /**
     * @param int $idHelloSpryker
     *
     * @return \Orm\Zed\HelloSpryker\Persistence\PyzHelloSprykerQuery
     */
    public function queryHelloSprykerById(int $idHelloSpryker): PyzHelloSprykerQuery
    {
        return $this->getFactory()->createHelloSprykerQuery()->filterByIdHelloSpryker($idHelloSpryker);
    }

    /**
     * @return \Orm\Zed\HelloSpryker\Persistence\PyzHelloSprykerQuery
     */
    public function queryHelloSpryker(): PyzHelloSprykerQuery
    {
        return $this->getFactory()->createHelloSprykerQuery();
    }
}
