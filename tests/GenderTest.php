<?php

namespace Tourze\GBT2261\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use Tourze\GBT2261\Gender;
use Tourze\PHPUnitEnum\AbstractEnumTestCase;

/**
 * 人的性别代码测试
 *
 * @internal
 */
#[CoversClass(Gender::class)]
final class GenderTest extends AbstractEnumTestCase
{
    /**
     * 测试选项列表
     */
    public function testGenOptions(): void
    {
        $options = Gender::genOptions();
        $this->assertCount(4, $options);

        // 验证每个选项包含正确的键和值
        foreach ($options as $option) {
            $this->assertArrayHasKey('label', $option);
            $this->assertArrayHasKey('text', $option);
            $this->assertArrayHasKey('value', $option);
            $this->assertArrayHasKey('name', $option);
        }

        // 验证值是否正确
        $values = array_column($options, 'value');
        $this->assertContains(0, $values);
        $this->assertContains(1, $values);
        $this->assertContains(2, $values);
        $this->assertContains(9, $values);

        // 验证标签是否正确
        $labels = array_column($options, 'label');
        $this->assertContains('未知性别', $labels);
        $this->assertContains('男', $labels);
        $this->assertContains('女', $labels);
        $this->assertContains('未说明', $labels);
    }

    /**
     * 测试枚举项列表
     */
    public function testCases(): void
    {
        $cases = Gender::cases();
        $this->assertCount(4, $cases);
        $this->assertContains(Gender::UNKNOWN, $cases);
        $this->assertContains(Gender::MAN, $cases);
        $this->assertContains(Gender::WOMAN, $cases);
        $this->assertContains(Gender::UNSPECIFIED, $cases);
    }

    /**
     * 测试toArray方法
     */
    public function testToArray(): void
    {
        $arrayData = Gender::MAN->toArray();
        $this->assertArrayHasKey('value', $arrayData);
        $this->assertArrayHasKey('label', $arrayData);
        $this->assertSame(1, $arrayData['value']);
        $this->assertSame('男', $arrayData['label']);

        $arrayData = Gender::WOMAN->toArray();
        $this->assertSame(2, $arrayData['value']);
        $this->assertSame('女', $arrayData['label']);
    }

    /**
     * 测试toSelectItem方法
     */
}
