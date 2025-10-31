<?php

namespace Tourze\GBT2261\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use Tourze\GBT2261\JobType;
use Tourze\PHPUnitEnum\AbstractEnumTestCase;

/**
 * 从业状况(个人身份)代码测试
 *
 * @internal
 */
#[CoversClass(JobType::class)]
final class JobTypeTest extends AbstractEnumTestCase
{
    /**
     * 测试选项列表
     */
    public function testGenOptions(): void
    {
        $options = JobType::genOptions();
        $this->assertCount(13, $options);

        // 验证每个选项包含正确的键和值
        foreach ($options as $option) {
            $this->assertArrayHasKey('label', $option);
            $this->assertArrayHasKey('text', $option);
            $this->assertArrayHasKey('value', $option);
            $this->assertArrayHasKey('name', $option);
        }

        // 随机抽取几个值进行验证
        $values = array_column($options, 'value');
        $this->assertContains(11, $values);
        $this->assertContains(31, $values);
        $this->assertContains(54, $values);
        $this->assertContains(90, $values);

        // 随机抽取几个标签进行验证
        $labels = array_column($options, 'label');
        $this->assertContains('国家公务员', $labels);
        $this->assertContains('学生', $labels);
        $this->assertContains('个体经营者', $labels);
        $this->assertContains('其他', $labels);
    }

    /**
     * 测试枚举项列表
     */
    public function testCases(): void
    {
        $cases = JobType::cases();
        $this->assertCount(13, $cases);

        // 随机抽取几个枚举值进行验证
        $this->assertContains(JobType::CIVIL_SERVANT, $cases);
        $this->assertContains(JobType::STUDENT, $cases);
        $this->assertContains(JobType::SELF_EMPLOYED, $cases);
        $this->assertContains(JobType::OTHER, $cases);
    }

    /**
     * 测试toArray方法
     */
    public function testToArray(): void
    {
        $arrayData = JobType::STUDENT->toArray();
        $this->assertArrayHasKey('value', $arrayData);
        $this->assertArrayHasKey('label', $arrayData);
        $this->assertSame(31, $arrayData['value']);
        $this->assertSame('学生', $arrayData['label']);

        $arrayData = JobType::WORKER->toArray();
        $this->assertSame(24, $arrayData['value']);
        $this->assertSame('工人', $arrayData['label']);
    }

    /**
     * 测试toSelectItem方法
     */
}
