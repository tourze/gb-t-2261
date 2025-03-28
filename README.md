# GB/T 2261

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-2261.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2261)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-2261.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2261)
[![License](https://img.shields.io/github/license/tourze/gb-t-2261.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2261)

GB/T 2261 is a Chinese national standard that specifies the classification and codes for personal basic information. This package provides PHP enums for various aspects of this standard.

## Features

- PHP 8.1+ enum implementation
- Type-safe and IDE-friendly
- Implements `Labelable`, `Itemable`, and `Selectable` interfaces
- Provides human-readable labels in Chinese
- Standards-compliant with GB/T 2261

## Available Enums

- `Gender` - Gender codes (GB/T 2261.1)
- `MaritalStatus` - Marital status codes (GB/T 2261.2)
- `HealthSimpleStatus` - Simple health status codes (GB/T 2261.3)
- `HealthFullStatus` - Full health status codes (GB/T 2261.4)
- `JobType` - Job type codes (GB/T 2261.5)

## Installation

```bash
composer require tourze/gb-t-2261
```

## Quick Start

```php
<?php

use Tourze\GBT2261\Gender;

// Get enum value
$gender = Gender::MAN;

// Get label
echo $gender->getLabel(); // Output: 男

// Get all options for select
$options = Gender::getSelectOptions();
```

## Use Cases

### Form Selection

```php
$genderOptions = Gender::getSelectOptions();
// Returns array suitable for dropdown menus
```

### Type Validation

```php
function processGender(Gender $gender): void
{
    // Type-safe parameter ensures only valid Gender enum values
    echo $gender->getLabel();
}
```

## Contributing

Contributions are welcome! Feel free to submit pull requests.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
