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

namespace Phalcon\Test\Integration\Mvc\Model\Criteria;

use IntegrationTester;

/**
 * Class GetParamsCest
 */
class GetParamsCest
{
    /**
     * Tests Phalcon\Mvc\Model\Criteria :: getParams()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcModelCriteriaGetParams(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\Criteria - getParams()');
        $I->skipTest('Need implementation');
    }
}
