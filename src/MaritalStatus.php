<?php

declare(strict_types=1);

namespace Tourze\GBT2261;

use Tourze\EnumExtra\Itemable;
use Tourze\EnumExtra\ItemTrait;
use Tourze\EnumExtra\Labelable;
use Tourze\EnumExtra\Selectable;
use Tourze\EnumExtra\SelectTrait;

/**
 * GBT 2261.2-2003 个人基本信息分类与代码 第2部分：婚姻状况代码
 */
enum MaritalStatus: int implements Labelable, Itemable, Selectable
{
    use ItemTrait;
    use SelectTrait;

    case UNMARRIED = 10;
    case MARRIED = 20;
    case FIRST_MARRIAGE = 21;
    case REMARRIAGE = 22;
    case REMARRY = 23;
    case WINDOWED = 30;
    case DIVORCE = 40;
    case UNSPECIFIED = 90;

    public function getLabel(): string
    {
        return match ($this) {
            self::UNMARRIED => '未婚',
            self::MARRIED => '已婚',
            self::FIRST_MARRIAGE => '初婚',
            self::REMARRIAGE => '再婚',
            self::REMARRY => '复婚',
            self::WINDOWED => '丧偶',
            self::DIVORCE => '离婚',
            self::UNSPECIFIED => '未说明的婚姻状况',
        };
    }
}
