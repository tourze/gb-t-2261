<?php

namespace Tourze\GBT2261\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use Tourze\GBT2261\MaritalStatus;
use Tourze\PHPUnitEnum\AbstractEnumTestCase;

/**
 * 婚姻状况代码测试
 *
 * @internal
 */
#[CoversClass(MaritalStatus::class)]
final class MaritalStatusTest extends AbstractEnumTestCase
{
    /**
     * 测试选项列表
     */
    public function testGenOptions(): void
    {
        $options = MaritalStatus::genOptions();
        $this->assertCount(8, $options);

        // 验证每个选项包含正确的键和值
        foreach ($options as $option) {
            $this->assertArrayHasKey('label', $option);
            $this->assertArrayHasKey('text', $option);
            $this->assertArrayHasKey('value', $option);
            $this->assertArrayHasKey('name', $option);
        }

        // 验证值是否包含所有枚举值
        $values = array_column($options, 'value');
        $this->assertContains(10, $values);
        $this->assertContains(20, $values);
        $this->assertContains(21, $values);
        $this->assertContains(22, $values);
        $this->assertContains(23, $values);
        $this->assertContains(30, $values);
        $this->assertContains(40, $values);
        $this->assertContains(90, $values);
    }

    /**
     * 测试toArray方法
     */
    public function testToArray(): void
    {
        $arrayData = MaritalStatus::MARRIED->toArray();
        $this->assertArrayHasKey('value', $arrayData);
        $this->assertArrayHasKey('label', $arrayData);
        $this->assertSame(20, $arrayData['value']);
        $this->assertSame('已婚', $arrayData['label']);

        $arrayData = MaritalStatus::UNMARRIED->toArray();
        $this->assertSame(10, $arrayData['value']);
        $this->assertSame('未婚', $arrayData['label']);
    }

    /**
     * 测试toSelectItem方法
     */
}
