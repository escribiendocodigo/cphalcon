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

namespace Phalcon\Test\Unit\Annotations\Annotation;

use UnitTester;

class GetNamedParameterCest
{
    /**
     * Tests Phalcon\Annotations\Annotation :: getNamedParameter()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function annotationsAnnotationGetNamedParameter(UnitTester $I)
    {
        $I->wantToTest('Annotations\Annotation - getNamedParameter()');

        $I->skipTest('Need implementation');
    }
}
