<?php

namespace Tourze\GBT2261\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GBT2261\HealthSimpleStatus;

/**
 * 健康状况代码（简单版）测试
 */
class HealthSimpleStatusTest extends TestCase
{
    /**
     * 测试枚举值
     */
    public function testEnum(): void
    {
        $this->assertSame(1, HealthSimpleStatus::Health->value);
        $this->assertSame(2, HealthSimpleStatus::Weak->value);
        $this->assertSame(3, HealthSimpleStatus::Silk->value);
        $this->assertSame(6, HealthSimpleStatus::Disabled->value);
    }

    /**
     * 测试标签
     */
    public function testLabel(): void
    {
        $this->assertSame('健康或良好', HealthSimpleStatus::Health->getLabel());
        $this->assertSame('一般或较弱', HealthSimpleStatus::Weak->getLabel());
        $this->assertSame('有慢性病', HealthSimpleStatus::Silk->getLabel());
        $this->assertSame('残疾', HealthSimpleStatus::Disabled->getLabel());
    }

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
        $this->assertContains(HealthSimpleStatus::Health, $cases);
        $this->assertContains(HealthSimpleStatus::Weak, $cases);
        $this->assertContains(HealthSimpleStatus::Silk, $cases);
        $this->assertContains(HealthSimpleStatus::Disabled, $cases);
    }
}
