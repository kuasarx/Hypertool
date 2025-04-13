# HTML Element Generator

This PHP library provides a comprehensive and convenient way to generate HTML elements with attributes and child elements. It now supports **all HTML5 and deprecated HTML elements**, with a dedicated PHP class and static factory method for each element. Every element class file includes a usage example.

## Features

- Dedicated PHP class for every HTML5 and deprecated HTML element
- Static factory methods for all elements via `HtmlElement::elementname()`
- Fluent interface for setting attributes and adding children
- Usage examples included in every element class file
- Easily extensible for future HTML elements

## Usage

1. Include the `HtmlElement` class in your PHP code.

2. Create an instance of any HTML element using either the class directly or the static factory method.

3. Use the fluent interface to set attributes, add child elements, and modify properties.

4. Output the generated HTML using the `output()` method.

### Creating and Modifying HTML Elements

```php
// Using the generic HtmlElement class
$html = new HtmlElement('div');
$html->setId('myDiv')->setClass('some-class');

// Add child elements and modify them
$html->add_child('MainTitle','h1')->text('Hello, World!')->setClass('title');

// Modify the child element using a fluent interface
$html->MainTitle->setStyle('color: blue;');

// Output the HTML
echo $html->output();
```

### Using Dedicated Element Classes

```php
// Using a specific element class
$div = new Div('Content inside div');
echo $div->output();
```

### Using Static Factory Methods

```php
// Using the static factory method
$div = HtmlElement::div('Content inside div');
echo $div->output();
```

### Usage Examples in Element Files

Each element class file (e.g., `src/b.php`, `src/section.php`) contains a usage example at the end, demonstrating both direct instantiation and static factory usage.

---

## Coverage

- All HTML5 elements and most deprecated elements are included.
- Deprecated elements (e.g., `<marquee>`, `<font>`, `<center>`, etc.) are supported for legacy compatibility.
- For a full list of supported elements, see `src/html_elements_master_list.php`.

---

## TO DO:
- [ ] Add support for [HTMX](https://htmx.org/).
- [ ] Add support for [Hyperscript](https://hyperscript.org/).
- [ ] Add support for CSS frameworks like Bootstrap or Tailwind.