<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Mvc\Collection;

use IntegrationTester;

/**
 * Class GetConnectionServiceCest
 */
class GetConnectionServiceCest
{
    /**
     * Tests Phalcon\Mvc\Collection :: getConnectionService()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcCollectionGetConnectionService(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Collection - getConnectionService()');
        $I->skipTest('Need implementation');
    }
}
