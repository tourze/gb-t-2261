# GB/T 2261

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-2261.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2261)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-2261.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2261)
[![License](https://img.shields.io/github/license/tourze/gb-t-2261.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2261)
[![PHP Version Require](https://img.shields.io/packagist/php-v/tourze/gb-t-2261.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2261)
[![Code Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen.svg?style=flat-square)](#)

GB/T 2261 是中华人民共和国国家标准，规定了个人基本信息的分类与代码。本包提供了该标准各个部分的 PHP 枚举实现。

## 特性

- 基于 PHP 8.1+ 的枚举实现
- 类型安全，支持 IDE 智能提示
- 实现了 `Labelable`、`Itemable` 和 `Selectable` 接口
- 提供中文可读标签
- 符合 GB/T 2261 标准规范

## 可用枚举

- `Gender` - 性别代码 (GB/T 2261.1)
- `MaritalStatus` - 婚姻状况代码 (GB/T 2261.2)
- `HealthSimpleStatus` - 健康状况代码（简化版）(GB/T 2261.3)
- `HealthFullStatus` - 健康状况代码（完整版）(GB/T 2261.4)
- `JobType` - 职业类型代码 (GB/T 2261.5)

## 安装

```bash
composer require tourze/gb-t-2261
```

## 快速开始

```php
<?php

use Tourze\GBT2261\Gender;

// 获取枚举值
$gender = Gender::MAN;

// 获取标签
echo $gender->getLabel(); // 输出：男
```

## 使用场景

### 表单选择

```php
$genderOptions = Gender::getSelectOptions();
// 返回适用于下拉菜单的数组
```

### 类型验证

```php
function processGender(Gender $gender): void
{
    // 类型安全参数确保只能使用有效的Gender枚举值
    echo $gender->getLabel();
}
```

## 贡献

欢迎贡献！请随时提交拉取请求。

## 许可证

MIT 许可证 (MIT)。详情请参阅 [许可证文件](LICENSE)。 