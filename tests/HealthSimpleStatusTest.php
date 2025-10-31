<?php

namespace Tourze\GBT2261\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use Tourze\GBT2261\HealthSimpleStatus;
use Tourze\PHPUnitEnum\AbstractEnumTestCase;

/**
 * 健康状况代码（简单版）测试
 *
 * @internal
 */
#[CoversClass(HealthSimpleStatus::class)]
final class HealthSimpleStatusTest extends AbstractEnumTestCase
{
    /**
     * 测试选项列表
     */
    public function testGenOptions(): void
    {
        $options = HealthSimpleStatus::genOptions();
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
        $this->assertContains(1, $values);
        $this->assertContains(2, $values);
        $this->assertContains(3, $values);
        $this->assertContains(6, $values);

        // 验证标签是否正确
        $labels = array_column($options, 'label');
        $this->assertContains('健康或良好', $labels);
        $this->assertContains('一般或较弱', $labels);
        $this->assertContains('有慢性病', $labels);
        $this->assertContains('残疾', $labels);
    }

    /**
     * 测试枚举项列表
     */
    public function testCases(): void
    {
        $cases = HealthSimpleStatus::cases();
        $this->assertCount(4, $cases);
        $this->assertContains(HealthSimpleStatus::HEALTH, $cases);
        $this->assertContains(HealthSimpleStatus::WEAK, $cases);
        $this->assertContains(HealthSimpleStatus::SICK, $cases);
        $this->assertContains(HealthSimpleStatus::DISABLED, $cases);
    }

    /**
     * 测试toArray方法
     */
    public function testToArray(): void
    {
        $arrayData = HealthSimpleStatus::HEALTH->toArray();
        $this->assertArrayHasKey('value', $arrayData);
        $this->assertArrayHasKey('label', $arrayData);
        $this->assertSame(1, $arrayData['value']);
        $this->assertSame('健康或良好', $arrayData['label']);

        $arrayData = HealthSimpleStatus::DISABLED->toArray();
        $this->assertSame(6, $arrayData['value']);
        $this->assertSame('残疾', $arrayData['label']);
    }

    /**
     * 测试toSelectItem方法
     */
}
