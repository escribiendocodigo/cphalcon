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

namespace Phalcon\Test\Integration\Forms\Element\Textarea;

use IntegrationTester;
use Phalcon\Forms\Element\Textarea;
use Phalcon\Tag;
use Phalcon\Test\Fixtures\Traits\DiTrait;

class ToStringCest
{
    use DiTrait;

    public function _before(IntegrationTester $I)
    {
        $this->newDi();
        $this->setDiEscaper();
        $this->setDiUrl();
    }

    /**
     * executed after each test
     */
    public function _after(IntegrationTester $I)
    {
        // Setting the doctype to XHTML5 for other tests to run smoothly
        Tag::setDocType(
            Tag::XHTML5
        );
    }

    /**
     * Tests Phalcon\Forms\Element\Textarea :: __toString()
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2019-05-23
     */
    public function formsElementTextareaToStringSimple(IntegrationTester $I)
    {
        $I->wantToTest('Forms\Element\Textarea - __toString()');

        $element = new Textarea('simple');

        $I->assertEquals(
            '<textarea id="simple" name="simple"></textarea>',
            (string) $element
        );
    }

    /**
     * Tests Phalcon\Forms\Element\Textarea :: __toString() with parameters
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2019-05-23
     */
    public function formsElementTextareaToStringWithParameters(IntegrationTester $I)
    {
        $I->wantToTest('Forms\Element\Textarea - __toString() with parameters');

        $element = new Textarea(
            'fantastic',
            [
                'class'       => 'fancy',
                'placeholder' => 'Initial value',
            ]
        );

        $I->assertEquals(
            '<textarea id="fantastic" name="fantastic" class="fancy" placeholder="Initial value"></textarea>',
            (string) $element
        );
    }
}
