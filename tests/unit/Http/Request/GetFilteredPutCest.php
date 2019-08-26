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

namespace Phalcon\Test\Unit\Http\Request;

use UnitTester;

class GetFilteredPutCest
{
    /**
     * Tests Phalcon\Http\Request :: getFilteredPut()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function httpRequestGetFilteredPut(UnitTester $I)
    {
        $I->wantToTest('Http\Request - getFilteredPut()');
        $I->skipTest('Need implementation');
    }
}
