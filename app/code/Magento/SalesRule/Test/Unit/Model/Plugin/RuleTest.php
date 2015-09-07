<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\SalesRule\Test\Unit\Model\Plugin;

class RuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\SalesRule\Model\Plugin\Rule
     */
    protected $plugin;

    /**}
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $subject;

    /**
     * @var \Closure
     */
    protected $genericClosure;

    public function setUp()
    {
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->subject = $this->getMockBuilder('Magento\SalesRule\Model\Rule')
            ->disableOriginalConstructor()
            ->getMock();
        $this->genericClosure = function () {
            return;
        };

        $this->plugin = $objectManager->getObject('Magento\SalesRule\Model\Plugin\Rule');
    }

    public function testLoadCouponCode()
    {
        $this->assertEquals(
            $this->subject,
            $this->plugin->aroundLoadCouponCode($this->subject, $this->genericClosure)
        );
    }
}