<?php
/**
* Copyright 2016 aheadWorks. All rights reserved.
* See LICENSE.txt for license details.
*/

namespace Aheadworks\Freeshippinglabel\Test\Unit\Model\Source;

use Aheadworks\Freeshippinglabel\Model\Source\Fonts;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use PHPUnit\Framework\TestCase;

/**
 * Test for \Aheadworks\Freeshippinglabel\Model\Source\Fonts
 */
class FontsTest extends TestCase
{
    /**
     * @var Fonts|\PHPUnit_Framework_MockObject_MockObject
     */
    private $model;

    /**
     * Init mocks for tests
     *
     * @return void
     */
    public function setUp()
    {
        $objectManager = new ObjectManager($this);
        $this->model = $objectManager->getObject(
            Fonts::class,
            []
        );
    }

    /**
     * Testing of toOptionArray method
     */
    public function testToOptionArray()
    {
        $this->assertTrue(is_array($this->model->toOptionArray()));
    }
}
