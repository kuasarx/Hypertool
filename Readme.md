# HTML Element Generator

This PHP class provides a convenient way to generate HTML elements with attributes and child elements. It supports creating a variety of HTML tags and setting attributes using a fluent interface.

## Usage

1. Include the `HtmlElement` class in your PHP code.

2. Create an instance of the `HtmlElement` class to generate HTML elements.

3. Use the various methods provided by the class to set attributes, add child elements, and modify properties.

4. Output the generated HTML using the `output()` method.

### Creating and Modifying HTML Elements

```php
// Create an HTML element
$html = new HtmlElement('div');
$html->setId('myDiv')->setClass('some-class');

// Add child elements and modify them
$html->add_child('MainTitle','h1')->text('Hello, World!')->setClass('title');

// Modify the child element using a fluent interface
$html->MainTitle->setStyle('color: blue;');

// Output the HTML
echo $html->output();
```