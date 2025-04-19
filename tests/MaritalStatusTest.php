<?php

namespace Tourze\GBT2261\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GBT2261\MaritalStatus;

/**
 * 婚姻状况代码测试
 */
class MaritalStatusTest extends TestCase
{
    /**
     * 测试枚举值
     */
    public function testEnum(): void
    {
        $this->assertSame(10, MaritalStatus::UNMARRIED->value);
        $this->assertSame(20, MaritalStatus::MARRIED->value);
        $this->assertSame(21, MaritalStatus::FIRST_MARRIAGE->value);
        $this->assertSame(22, MaritalStatus::REMARRIAGE->value);
        $this->assertSame(23, MaritalStatus::REMARRY->value);
        $this->assertSame(30, MaritalStatus::WINDOWED->value);
        $this->assertSame(40, MaritalStatus::DIVORCE->value);
        $this->assertSame(90, MaritalStatus::UNSPECIFIED->value);
    }

    /**
     * 测试标签
     */
    public function testLabel(): void
    {
        $this->assertSame('未婚', MaritalStatus::UNMARRIED->getLabel());
        $this->assertSame('已婚', MaritalStatus::MARRIED->getLabel());
        $this->assertSame('初婚', MaritalStatus::FIRST_MARRIAGE->getLabel());
        $this->assertSame('再婚', MaritalStatus::REMARRIAGE->getLabel());
        $this->assertSame('复婚', MaritalStatus::REMARRY->getLabel());
        $this->assertSame('丧偶', MaritalStatus::WINDOWED->getLabel());
        $this->assertSame('离婚', MaritalStatus::DIVORCE->getLabel());
        $this->assertSame('未说明的婚姻状况', MaritalStatus::UNSPECIFIED->getLabel());
    }

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
     * 测试枚举项列表
     */
    public function testCases(): void
    {
        $cases = MaritalStatus::cases();
        $this->assertCount(8, $cases);
        $this->assertContains(MaritalStatus::UNMARRIED, $cases);
        $this->assertContains(MaritalStatus::MARRIED, $cases);
        $this->assertContains(MaritalStatus::FIRST_MARRIAGE, $cases);
        $this->assertContains(MaritalStatus::REMARRIAGE, $cases);
        $this->assertContains(MaritalStatus::REMARRY, $cases);
        $this->assertContains(MaritalStatus::WINDOWED, $cases);
        $this->assertContains(MaritalStatus::DIVORCE, $cases);
        $this->assertContains(MaritalStatus::UNSPECIFIED, $cases);
    }
}
