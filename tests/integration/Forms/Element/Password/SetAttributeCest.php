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

namespace Phalcon\Test\Integration\Forms\Element\Password;

use IntegrationTester;

/**
 * Class SetAttributeCest
 */
class SetAttributeCest
{
    /**
     * Tests Phalcon\Forms\Element\Password :: setAttribute()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function formsElementPasswordSetAttribute(IntegrationTester $I)
    {
        $I->wantToTest('Forms\Element\Password - setAttribute()');
        $I->skipTest('Need implementation');
    }
}
