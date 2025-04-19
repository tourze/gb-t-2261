<?php

namespace Tourze\GBT2261\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GBT2261\HealthFullStatus;

/**
 * 健康状况代码（详细版）测试
 */
class HealthFullStatusTest extends TestCase
{
    /**
     * 测试枚举值
     */
    public function testEnum(): void
    {
        $this->assertSame(10, HealthFullStatus::HEALTHY->value);
        $this->assertSame(20, HealthFullStatus::GENERAL->value);
        $this->assertSame(30, HealthFullStatus::CHRONIC_DISEASE->value);
        $this->assertSame(31, HealthFullStatus::CARDIOVASCULAR_DISEASE->value);
        $this->assertSame(32, HealthFullStatus::CEREBROVASCULAR_DISEASE->value);
        $this->assertSame(33, HealthFullStatus::CHRONIC_RESPIRATORY_DISEASE->value);
        $this->assertSame(34, HealthFullStatus::CHRONIC_DIGESTIVE_DISEASE->value);
        $this->assertSame(35, HealthFullStatus::CHRONIC_NEPHRITIS->value);
        $this->assertSame(36, HealthFullStatus::TUBERCULOSIS->value);
        $this->assertSame(37, HealthFullStatus::DIABETES->value);
        $this->assertSame(38, HealthFullStatus::NEUROLOGICAL_OR_PSYCHIATRIC_DISEASE->value);
        $this->assertSame(41, HealthFullStatus::CANCER->value);
        $this->assertSame(49, HealthFullStatus::OTHER_CHRONIC_DISEASE->value);
        $this->assertSame(60, HealthFullStatus::DISABLED->value);
        $this->assertSame(61, HealthFullStatus::VISION_DISABILITY->value);
        $this->assertSame(62, HealthFullStatus::HEARING_DISABILITY->value);
        $this->assertSame(63, HealthFullStatus::SPEECH_DISABILITY->value);
        $this->assertSame(64, HealthFullStatus::PHYSICAL_DISABILITY->value);
        $this->assertSame(65, HealthFullStatus::INTELLECTUAL_DISABILITY->value);
        $this->assertSame(66, HealthFullStatus::PSYCHIATRIC_DISABILITY->value);
        $this->assertSame(67, HealthFullStatus::MULTIPLE_DISABILITIES->value);
        $this->assertSame(69, HealthFullStatus::OTHER_DISABILITY->value);
    }

    /**
     * 测试标签
     */
    public function testLabel(): void
    {
        $this->assertSame('健康或良好', HealthFullStatus::HEALTHY->getLabel());
        $this->assertSame('一般或较弱', HealthFullStatus::GENERAL->getLabel());
        $this->assertSame('有慢性病', HealthFullStatus::CHRONIC_DISEASE->getLabel());
        $this->assertSame('心血管病', HealthFullStatus::CARDIOVASCULAR_DISEASE->getLabel());
        $this->assertSame('脑血管病', HealthFullStatus::CEREBROVASCULAR_DISEASE->getLabel());
        $this->assertSame('慢性呼吸系统病', HealthFullStatus::CHRONIC_RESPIRATORY_DISEASE->getLabel());
        $this->assertSame('慢性消化系统病', HealthFullStatus::CHRONIC_DIGESTIVE_DISEASE->getLabel());
        $this->assertSame('慢性肾炎', HealthFullStatus::CHRONIC_NEPHRITIS->getLabel());
        $this->assertSame('结核病', HealthFullStatus::TUBERCULOSIS->getLabel());
        $this->assertSame('糖尿病', HealthFullStatus::DIABETES->getLabel());
        $this->assertSame('神经或精神疾病', HealthFullStatus::NEUROLOGICAL_OR_PSYCHIATRIC_DISEASE->getLabel());
        $this->assertSame('癌症', HealthFullStatus::CANCER->getLabel());
        $this->assertSame('其他慢性病', HealthFullStatus::OTHER_CHRONIC_DISEASE->getLabel());
        $this->assertSame('残疾', HealthFullStatus::DISABLED->getLabel());
        $this->assertSame('视力残疾', HealthFullStatus::VISION_DISABILITY->getLabel());
        $this->assertSame('听力残疾', HealthFullStatus::HEARING_DISABILITY->getLabel());
        $this->assertSame('言语残疾', HealthFullStatus::SPEECH_DISABILITY->getLabel());
        $this->assertSame('肢体残疾', HealthFullStatus::PHYSICAL_DISABILITY->getLabel());
        $this->assertSame('智力残疾', HealthFullStatus::INTELLECTUAL_DISABILITY->getLabel());
        $this->assertSame('精神残疾', HealthFullStatus::PSYCHIATRIC_DISABILITY->getLabel());
        $this->assertSame('多重残疾', HealthFullStatus::MULTIPLE_DISABILITIES->getLabel());
        $this->assertSame('其他残疾', HealthFullStatus::OTHER_DISABILITY->getLabel());
    }

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
}
