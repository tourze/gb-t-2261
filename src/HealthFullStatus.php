<?php

declare(strict_types=1);

namespace Tourze\GBT2261;

use Tourze\EnumExtra\Itemable;
use Tourze\EnumExtra\ItemTrait;
use Tourze\EnumExtra\Labelable;
use Tourze\EnumExtra\Selectable;
use Tourze\EnumExtra\SelectTrait;

/**
 * 标准号：GB/T 2261.3-2003
 * 中文标准名称：个人基本信息分类与代码 第3部分: 健康状况代码
 * 英文标准名称：Classification and codesof basic personal information--Part 3: Codes for state of health
 *
 * @see https://openstd.samr.gov.cn/bzgk/gb/newGbInfo?hcno=5D8EAFFA6F8B4AB6582FA764EF85041F
 */
enum HealthFullStatus: int implements Labelable, Itemable, Selectable
{
    use ItemTrait;
    use SelectTrait;

    case HEALTHY = 10;
    case GENERAL = 20;
    case CHRONIC_DISEASE = 30;
    case CARDIOVASCULAR_DISEASE = 31;
    case CEREBROVASCULAR_DISEASE = 32;
    case CHRONIC_RESPIRATORY_DISEASE = 33;
    case CHRONIC_DIGESTIVE_DISEASE = 34;
    case CHRONIC_NEPHRITIS = 35;
    case TUBERCULOSIS = 36;
    case DIABETES = 37;
    case NEUROLOGICAL_OR_PSYCHIATRIC_DISEASE = 38;
    case CANCER = 41;
    case OTHER_CHRONIC_DISEASE = 49;
    case DISABLED = 60;
    case VISION_DISABILITY = 61;
    case HEARING_DISABILITY = 62;
    case SPEECH_DISABILITY = 63;
    case PHYSICAL_DISABILITY = 64;
    case INTELLECTUAL_DISABILITY = 65;
    case PSYCHIATRIC_DISABILITY = 66;
    case MULTIPLE_DISABILITIES = 67;
    case OTHER_DISABILITY = 69;

    public function getLabel(): string
    {
        return match ($this) {
            self::HEALTHY => '健康或良好',
            self::GENERAL => '一般或较弱',
            self::CHRONIC_DISEASE => '有慢性病',
            self::CARDIOVASCULAR_DISEASE => '心血管病',
            self::CEREBROVASCULAR_DISEASE => '脑血管病',
            self::CHRONIC_RESPIRATORY_DISEASE => '慢性呼吸系统病',
            self::CHRONIC_DIGESTIVE_DISEASE => '慢性消化系统病',
            self::CHRONIC_NEPHRITIS => '慢性肾炎',
            self::TUBERCULOSIS => '结核病',
            self::DIABETES => '糖尿病',
            self::NEUROLOGICAL_OR_PSYCHIATRIC_DISEASE => '神经或精神疾病',
            self::CANCER => '癌症',
            self::OTHER_CHRONIC_DISEASE => '其他慢性病',
            self::DISABLED => '残疾',
            self::VISION_DISABILITY => '视力残疾',
            self::HEARING_DISABILITY => '听力残疾',
            self::SPEECH_DISABILITY => '言语残疾',
            self::PHYSICAL_DISABILITY => '肢体残疾',
            self::INTELLECTUAL_DISABILITY => '智力残疾',
            self::PSYCHIATRIC_DISABILITY => '精神残疾',
            self::MULTIPLE_DISABILITIES => '多重残疾',
            self::OTHER_DISABILITY => '其他残疾',
        };
    }
}
