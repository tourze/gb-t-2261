<?php

namespace Tourze\GBT2261\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GBT2261\Gender;

/**
 * 人的性别代码测试
 */
class GenderTest extends TestCase
{
    /**
     * 测试枚举值
     */
    public function testEnum(): void
    {
        $this->assertSame(0, Gender::UNKNOWN->value);
        $this->assertSame(1, Gender::MAN->value);
        $this->assertSame(2, Gender::WOMAN->value);
        $this->assertSame(9, Gender::UNSPECIFIED->value);
    }

    /**
     * 测试标签
     */
    public function testLabel(): void
    {
        $this->assertSame('未知性别', Gender::UNKNOWN->getLabel());
        $this->assertSame('男', Gender::MAN->getLabel());
        $this->assertSame('女', Gender::WOMAN->getLabel());
        $this->assertSame('未说明', Gender::UNSPECIFIED->getLabel());
    }

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
}
