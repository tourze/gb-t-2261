<?php

namespace Tourze\GBT2261\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GBT2261\JobType;

/**
 * 从业状况(个人身份)代码测试
 */
class JobTypeTest extends TestCase
{
    /**
     * 测试枚举值
     */
    public function testEnum(): void
    {
        $this->assertSame(11, JobType::CIVIL_SERVANT->value);
        $this->assertSame(13, JobType::PROFESSIONAL_TECHNICAL->value);
        $this->assertSame(17, JobType::STAFF->value);
        $this->assertSame(21, JobType::ENTERPRISE_MANAGER->value);
        $this->assertSame(24, JobType::WORKER->value);
        $this->assertSame(27, JobType::FARMER->value);
        $this->assertSame(31, JobType::STUDENT->value);
        $this->assertSame(37, JobType::MILITARY_PERSONNEL->value);
        $this->assertSame(51, JobType::FREELANCER->value);
        $this->assertSame(54, JobType::SELF_EMPLOYED->value);
        $this->assertSame(70, JobType::UNEMPLOYED->value);
        $this->assertSame(80, JobType::RETIRED->value);
        $this->assertSame(90, JobType::OTHER->value);
    }

    /**
     * 测试标签
     */
    public function testLabel(): void
    {
        $this->assertSame('国家公务员', JobType::CIVIL_SERVANT->getLabel());
        $this->assertSame('专业技术人员', JobType::PROFESSIONAL_TECHNICAL->getLabel());
        $this->assertSame('职员', JobType::STAFF->getLabel());
        $this->assertSame('企业管理人员', JobType::ENTERPRISE_MANAGER->getLabel());
        $this->assertSame('工人', JobType::WORKER->getLabel());
        $this->assertSame('农民', JobType::FARMER->getLabel());
        $this->assertSame('学生', JobType::STUDENT->getLabel());
        $this->assertSame('现役军人', JobType::MILITARY_PERSONNEL->getLabel());
        $this->assertSame('自由职业者', JobType::FREELANCER->getLabel());
        $this->assertSame('个体经营者', JobType::SELF_EMPLOYED->getLabel());
        $this->assertSame('无业人员', JobType::UNEMPLOYED->getLabel());
        $this->assertSame('退（离）休人员', JobType::RETIRED->getLabel());
        $this->assertSame('其他', JobType::OTHER->getLabel());
    }

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
}
