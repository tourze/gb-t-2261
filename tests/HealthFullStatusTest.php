<?php

namespace Tourze\GBT2261\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use Tourze\GBT2261\HealthFullStatus;
use Tourze\PHPUnitEnum\AbstractEnumTestCase;

/**
 * 健康状况代码（详细版）测试
 *
 * @internal
 */
#[CoversClass(HealthFullStatus::class)]
final class HealthFullStatusTest extends AbstractEnumTestCase
{
    /**
     * 测试选项列表
     */
    public function testGenOptions(): void
    {
        $options = HealthFullStatus::genOptions();
        $this->assertCount(22, $options);

        // 验证每个选项包含正确的键和值
        foreach ($options as $option) {
            $this->assertArrayHasKey('label', $option);
            $this->assertArrayHasKey('text', $option);
            $this->assertArrayHasKey('value', $option);
            $this->assertArrayHasKey('name', $option);
        }

        // 随机抽取几个值进行验证
        $values = array_column($options, 'value');
        $this->assertContains(10, $values);
        $this->assertContains(20, $values);
        $this->assertContains(30, $values);
        $this->assertContains(60, $values);
        $this->assertContains(69, $values);

        // 随机抽取几个标签进行验证
        $labels = array_column($options, 'label');
        $this->assertContains('健康或良好', $labels);
        $this->assertContains('一般或较弱', $labels);
        $this->assertContains('有慢性病', $labels);
        $this->assertContains('残疾', $labels);
        $this->assertContains('其他残疾', $labels);
    }

    /**
     * 测试枚举项列表
     */
    public function testCases(): void
    {
        $cases = HealthFullStatus::cases();
        $this->assertCount(22, $cases);

        // 随机抽取几个枚举值进行验证
        $this->assertContains(HealthFullStatus::HEALTHY, $cases);
        $this->assertContains(HealthFullStatus::GENERAL, $cases);
        $this->assertContains(HealthFullStatus::CHRONIC_DISEASE, $cases);
        $this->assertContains(HealthFullStatus::DISABLED, $cases);
        $this->assertContains(HealthFullStatus::OTHER_DISABILITY, $cases);
    }

    /**
     * 测试toArray方法
     */
    public function testToArray(): void
    {
        $arrayData = HealthFullStatus::HEALTHY->toArray();
        $this->assertArrayHasKey('value', $arrayData);
        $this->assertArrayHasKey('label', $arrayData);
        $this->assertSame(10, $arrayData['value']);
        $this->assertSame('健康或良好', $arrayData['label']);

        $arrayData = HealthFullStatus::DIABETES->toArray();
        $this->assertSame(37, $arrayData['value']);
        $this->assertSame('糖尿病', $arrayData['label']);
    }

    /**
     * 测试toSelectItem方法
     */
}
