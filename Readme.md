# HTML Element Generator

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![HTMX](https://img.shields.io/badge/HTMX-supported-blue)](https://htmx.org/)
[![Hyperscript](https://img.shields.io/badge/Hyperscript-supported-blueviolet)](https://hyperscript.org/)

---

## Overview

This PHP library provides a comprehensive, extensible, and fluent interface for generating HTML elements, including full support for all HTML5 and deprecated elements. It features:

- Dedicated PHP classes and static factory methods for every HTML element
- Fluent attribute and child management
- Comprehensive support for [HTMX](https://htmx.org/) and [Hyperscript](https://hyperscript.org/)
- Automated, environment-aware script injection with robust error handling
- Usage examples and documentation in every element class file

---

## Table of Contents

- [Features](#features)
- [Setup](#setup)
- [Usage](#usage)
  - [Basic Usage](#basic-usage)
  - [HTMX & Hyperscript](#htmx--hyperscript)
  - [Automated Script Injection](#automated-script-injection)
- [Coverage](#coverage)
- [Contribution Guidelines](#contribution-guidelines)
- [License](#license)
- [Links](#links)

---

## Features

- All HTML5 and deprecated elements as PHP classes
- Static factory methods for all elements via `HtmlElement::elementname()`
- Fluent interface for setting attributes and adding children
- Usage examples in every element class file
- HTMX and Hyperscript support with dedicated setters
- Automated, environment-aware script injection (see [ScriptManager](#automated-script-injection))
- Easily extensible for future HTML elements and frontend libraries

---

## Setup

1. **Clone the repository:**
   ```sh
   git clone https://github.com/yourusername/html-element-generator.git
   cd html-element-generator
   ```

2. **Include the library in your project:**
   - Directly include the `src/` directory in your PHP project.
   - Or use Composer (if available in the future).

3. **(Optional) Configure environment:**
   - Set the `APP_ENV` environment variable to `production` for local asset loading, or leave unset for CDN loading.

---

## Usage

### Basic Usage

```php
require_once 'src/Html.php';

// Using the generic HtmlElement class
$html = new HtmlElement('div');
$html->setId('myDiv')->setClass('some-class');
$html->add_child('MainTitle','h1')->text('Hello, World!')->setClass('title');
$html->MainTitle->setStyle('color: blue;');
echo $html->output();
```

#### Using Dedicated Element Classes

```php
require_once 'src/Div.php';
$div = new Div('Content inside div');
echo $div->output();
```

#### Using Static Factory Methods

```php
$div = HtmlElement::div('Content inside div');
echo $div->output();
```

#### Usage Examples in Element Files

Each element class file (e.g., `src/b.php`, `src/section.php`) contains a usage example at the end, demonstrating both direct instantiation and static factory usage.

---

### HTMX & Hyperscript

This library provides comprehensive support for [HTMX](https://htmx.org/) and [Hyperscript](https://hyperscript.org/):

- **Dedicated setters for all official HTMX attributes and events** (e.g., `setHxGet`, `setHxPost`, `setHxTrigger`, `setHxSwap`, etc.)
- **Dedicated setter for Hyperscript's `_` attribute** (`setHyperscript`)
- **HTMX event support** via `setHxOn($event, $handler)`

#### HTMX Usage Example

```php
$button = HtmlElement::button('Load Data')
    ->setHxGet('/api/data')
    ->setHxTarget('#result')
    ->setHxSwap('outerHTML');
echo $button->output();
```

#### Hyperscript Usage Example

```php
$button = HtmlElement::button('Click Me')
    ->setHyperscript('on click add .clicked to me');
echo $button->output();
```

#### Combining HTMX and Hyperscript

```php
$button = HtmlElement::button('Load & Animate')
    ->setHxGet('/api/data')
    ->setHyperscript('on htmx:afterSwap add .animated to #result');
echo $button->output();
```

---

### Automated Script Injection

Use the `ScriptManager` class for robust, environment-aware script loading:

```php
require_once 'src/ScriptManager.php';

// In your page/component:
ScriptManager::requireHtmx();
ScriptManager::requireHyperscript();

// In your layout/footer (once per page):
echo ScriptManager::outputScripts();
```

- Loads from CDN in development, local assets in production
- Prevents duplicate inclusions
- Adds error handling and a <noscript> fallback

---

## Coverage

- All HTML5 elements and most deprecated elements are included.
- Deprecated elements (e.g., `<marquee>`, `<font>`, `<center>`, etc.) are supported for legacy compatibility.
- For a full list of supported elements, see `src/html_elements_master_list.php`.

---

## Contribution Guidelines

We welcome contributions! To contribute:

1. Fork the repository and create a new branch.
2. Add or update code, tests, or documentation.
3. Ensure your code follows the project's style and passes any tests.
4. Submit a pull request with a clear description of your changes.

**To add new HTML elements or attributes:**
- Create a new PHP class in `src/` for the element.
- Add usage examples at the end of the file.
- If adding new HTMX/Hyperscript features, update the relevant setters and documentation.

**To report bugs or request features:**
- Open an issue on [GitHub](https://github.com/yourusername/html-element-generator/issues).

---

## License

This project is licensed under the [MIT License](LICENSE).

---

## Links

- [HTMX Documentation](https://htmx.org/docs/)
- [Hyperscript Documentation](https://hyperscript.org/docs/)
- [GitHub Repository](https://github.com/yourusername/html-element-generator)
- [Open an Issue](https://github.com/yourusername/html-element-generator/issues)