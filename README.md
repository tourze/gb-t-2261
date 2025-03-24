# GB/T 2261

[English](#english) | [中文](#中文)

## English

GB/T 2261 is a Chinese national standard that specifies the classification and codes for personal basic information. This package provides PHP enums for various aspects of this standard.

### Features

- PHP 8.1+ enum implementation
- Implements `Labelable`, `Itemable`, and `Selectable` interfaces
- Provides human-readable labels in Chinese
- Type-safe and IDE-friendly

### Available Enums

- `Gender` - Gender codes (GB/T 2261.1)
- `MaritalStatus` - Marital status codes (GB/T 2261.2)
- `HealthSimpleStatus` - Simple health status codes (GB/T 2261.3)
- `HealthFullStatus` - Full health status codes (GB/T 2261.4)
- `JobType` - Job type codes (GB/T 2261.5)

### Installation

```bash
composer require tourze/gb-t-2261
```

### Usage

```php
use Tourze\GBT2261\Gender;

// Get enum value
$gender = Gender::MAN;

// Get label
echo $gender->getLabel(); // Output: 男

// Get all options for select
$options = Gender::getSelectOptions();
```

## 中文

GB/T 2261 是中华人民共和国国家标准，规定了个人基本信息的分类与代码。本包提供了该标准各个部分的 PHP 枚举实现。

### 特性

- 基于 PHP 8.1+ 的枚举实现
- 实现了 `Labelable`、`Itemable` 和 `Selectable` 接口
- 提供中文可读标签
- 类型安全，支持 IDE 智能提示

### 可用枚举

- `Gender` - 性别代码 (GB/T 2261.1)
- `MaritalStatus` - 婚姻状况代码 (GB/T 2261.2)
- `HealthSimpleStatus` - 健康状况代码（简化版）(GB/T 2261.3)
- `HealthFullStatus` - 健康状况代码（完整版）(GB/T 2261.4)
- `JobType` - 职业类型代码 (GB/T 2261.5)

### 安装

```bash
composer require tourze/gb-t-2261
```

### 使用示例

```php
use Tourze\GBT2261\Gender;

// 获取枚举值
$gender = Gender::MAN;

// 获取标签
echo $gender->getLabel(); // 输出：男

// 获取所有选项（用于下拉选择）
$options = Gender::getSelectOptions();
```
