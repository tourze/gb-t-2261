<?php

namespace Tourze\GBT2261;

use Tourze\EnumExtra\Itemable;
use Tourze\EnumExtra\ItemTrait;
use Tourze\EnumExtra\Labelable;
use Tourze\EnumExtra\Selectable;
use Tourze\EnumExtra\SelectTrait;

/**
 * 个人基本信息分类与代码 第1部分:人的性别代码
 *
 * @see https://std.samr.gov.cn/gb/search/gbDetailed?id=71F772D79FF7D3A7E05397BE0A0AB82A
 */
enum Gender: int implements Labelable, Itemable, Selectable
{
    use ItemTrait;
    use SelectTrait;

    case UNKNOWN = 0;
    case MAN = 1;
    case WOMAN = 2;
    case UNSPECIFIED = 9;

    public function getLabel(): string
    {
        return match ($this) {
            self::UNKNOWN => '未知性别',
            self::MAN => '男',
            self::WOMAN => '女',
            self::UNSPECIFIED => '未说明',
        };
    }
}
