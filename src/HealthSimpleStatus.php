<?php

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
enum HealthSimpleStatus: int implements Labelable, Itemable, Selectable
{
    use ItemTrait;
    use SelectTrait;

    case Health = 1;
    case Weak = 2;
    case Silk = 3;
    case Disabled = 6;

    public function getLabel(): string
    {
        return match ($this) {
            self::Health => '健康或良好',
            self::Weak => '一般或较弱',
            self::Silk => '有慢性病',
            self::Disabled => '残疾',
        };
    }
}
