<?php

namespace Tourze\GBT2261;

use Tourze\EnumExtra\Itemable;
use Tourze\EnumExtra\ItemTrait;
use Tourze\EnumExtra\Labelable;
use Tourze\EnumExtra\Selectable;
use Tourze\EnumExtra\SelectTrait;

/**
 * 标准号：GB/T 2261.4-2003
 * 中文标准名称：个人基本信息分类与代码 第4部分: 从业状况(个人身份)代码
 * 英文标准名称：Classificationand codes of basic personal information--Part 4: Codes for state of employment
 *
 * @see https://openstd.samr.gov.cn/bzgk/gb/newGbInfo?hcno=16BCF58D77D483BA134C0938972A8B90
 */
enum JobType: int implements Labelable, Itemable, Selectable
{
    use ItemTrait;
    use SelectTrait;

    case CIVIL_SERVANT = 11;
    case PROFESSIONAL_TECHNICAL = 13;
    case STAFF = 17;
    case ENTERPRISE_MANAGER = 21;
    case WORKER = 24;
    case FARMER = 27;
    case STUDENT = 31;
    case MILITARY_PERSONNEL = 37;
    case FREELANCER = 51;
    case SELF_EMPLOYED = 54;
    case UNEMPLOYED = 70;
    case RETIRED = 80;
    case OTHER = 90;

    public function getLabel(): string
    {
        return match ($this) {
            self::CIVIL_SERVANT => '国家公务员',
            self::PROFESSIONAL_TECHNICAL => '专业技术人员',
            self::STAFF => '职员',
            self::ENTERPRISE_MANAGER => '企业管理人员',
            self::WORKER => '工人',
            self::FARMER => '农民',
            self::STUDENT => '学生',
            self::MILITARY_PERSONNEL => '现役军人',
            self::FREELANCER => '自由职业者',
            self::SELF_EMPLOYED => '个体经营者',
            self::UNEMPLOYED => '无业人员',
            self::RETIRED => '退（离）休人员',
            self::OTHER => '其他',
        };
    }
}
