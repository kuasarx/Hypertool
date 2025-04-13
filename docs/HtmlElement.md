# Class: Hypertool\Html\HtmlElement

## 1. Overview

The `HtmlElement` class is the core component of the `hypertool/html` library. Its primary purpose is to provide a flexible and fluent interface for programmatically generating HTML elements in PHP. It serves as the base class for all specific HTML element classes (like `Div`, `Button`, etc.) and also provides static factory methods for creating any HTML element. It supports setting standard HTML attributes, managing child elements, adding text content, and includes dedicated methods for integrating with HTMX and Hyperscript attributes.

Within the Hypertool HTML Generator project, `HtmlElement` is the foundation upon which all HTML structures are built.

## 2. API Reference

### Constructor

#### `__construct(string $tagName)`

-   **Purpose:** Initializes a new HTML element instance.
-   **Parameters:**
    -   `$tagName` (string, required): The HTML tag name for the element (e.g., 'div', 'p', 'span').
-   **Initialization:** Sets the internal tag name for the element.
-   **Exceptions:** None directly, but invalid tag names might lead to invalid HTML output.

### Public Methods

*(Note: This is not exhaustive for all attribute setters, but covers key methods and categories.)*

#### `output(): string`

-   **Purpose:** Renders the HTML element and all its children into a string representation.
-   **Parameters:** None.
-   **Return Value:** (string) The complete HTML string for the element and its descendants.
-   **Side Effects:** None.
-   **Exceptions:** None.

#### `text(string $content): self`

-   **Purpose:** Sets the text content for the element. If the element already has children, this text content might not be rendered depending on the element type (usually rendered if no children exist).
-   **Parameters:**
    -   `$content` (string, required): The text content to set.
-   **Return Value:** (`self`) The instance, allowing method chaining.
-   **Side Effects:** Overwrites any previously set text content.
-   **Exceptions:** None.

#### `add_child(?string $identifier, string|HtmlElement $tagNameOrElement): HtmlElement`

-   **Purpose:** Adds a child element to the current element.
-   **Parameters:**
    -   `$identifier` (?string, optional): A unique string identifier to access this child later via magic properties (e.g., `$parentElement->childIdentifier`). If `null`, an auto-incrementing numeric identifier is used (not accessible via magic properties).
    -   `$tagNameOrElement` (string|HtmlElement, required): Either the tag name (string) of the child element to create, or an existing `HtmlElement` instance to add as a child.
-   **Return Value:** (`HtmlElement`) The newly added child element instance.
-   **Side Effects:** Modifies the internal children array.
-   **Exceptions:** None directly, but using duplicate identifiers will overwrite the previous child in the accessible map.

#### `setClass(string $class): self`

-   **Purpose:** Sets the `class` attribute for the element. Overwrites any existing classes.
-   **Parameters:**
    -   `$class` (string, required): The CSS class(es) to apply.
-   **Return Value:** (`self`) The instance for chaining.
-   **Side Effects:** Modifies the `class` attribute.
-   **Exceptions:** None.

#### `setId(string $id): self`

-   **Purpose:** Sets the `id` attribute for the element.
-   **Parameters:**
    -   `$id` (string, required): The unique ID.
-   **Return Value:** (`self`) The instance for chaining.
-   **Side Effects:** Modifies the `id` attribute.
-   **Exceptions:** None.

#### Attribute Setters (`setAttribute`, `setStyle`, `setSrc`, `setHref`, etc.)

-   **Purpose:** Numerous methods exist to set specific standard HTML attributes (global attributes, element-specific attributes like `href`, `src`, `type`, `value`, etc.). They generally follow the pattern `setAttributeName($value)`.
-   **Parameters:** Typically a single `$value` (string|int|bool) appropriate for the attribute.
-   **Return Value:** (`self`) The instance for chaining.
-   **Side Effects:** Modifies the corresponding attribute in the internal attributes array.
-   **Exceptions:** None.

#### HTMX Setters (`setHxGet`, `setHxPost`, `setHxTrigger`, `setHxSwap`, `setHxTarget`, `setHxOn`, etc.)

-   **Purpose:** Dedicated methods for setting HTMX-specific attributes (e.g., `hx-get`, `hx-trigger`).
-   **Parameters:** Typically a single `$value` (string) representing the attribute's value. `setHxOn` takes `$event` (string) and `$handler` (string).
-   **Return Value:** (`self`) The instance for chaining.
-   **Side Effects:** Adds or modifies HTMX attributes.
-   **Exceptions:** None.

#### Hyperscript Setter (`setHyperscript`)

-   **Purpose:** Sets the `_` attribute for Hyperscript.
-   **Parameters:**
    -   `$script` (string, required): The Hyperscript code.
-   **Return Value:** (`self`) The instance for chaining.
-   **Side Effects:** Modifies the `_` attribute.
-   **Exceptions:** None.

#### Static Factory Methods (`HtmlElement::div()`, `HtmlElement::button()`, etc.)

-   **Purpose:** Provides a static method for every supported HTML element (including deprecated ones) for convenient instantiation.
-   **Parameters:** Usually `$content = ''` (string, optional) for the element's initial text content. Some elements might have different required parameters (e.g., `img` might require `src`).
-   **Return Value:** (HtmlElement) A new instance of the corresponding element class (e.g., `HtmlElement::div()` returns a `Hypertool\Html\Div` instance).
-   **Side Effects:** None.
-   **Exceptions:** None.

### Public Attributes/Properties

All functional properties are managed internally and accessed/modified via public methods. There are no public attributes intended for direct manipulation.

## 3. Usage Examples

*(Assumes Composer autoloader is included and `use Hypertool\Html\HtmlElement;`)*

**Example 1: Basic Form Input**
```php
<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Hypertool\Html\HtmlElement;

$label = HtmlElement::label('Username')->setFor('username-input');
$input = HtmlElement::input()
    ->setType('text')
    ->setId('username-input')
    ->setName('username')
    ->setPlaceholder('Enter your username')
    ->setClass('form-control'); // Example Bootstrap class

echo $label->output();
echo $input->output();
?>
// Expected Output:
// <label for="username-input">Username</label>
// <input type="text" id="username-input" name="username" placeholder="Enter your username" class="form-control">
```

**Example 2: Nested Structure with Children**
```php
<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Hypertool\Html\HtmlElement;

$list = HtmlElement::ul()->setClass('list-group'); // Create a <ul>

$item1 = HtmlElement::li('First item')->setClass('list-group-item');
$item2 = HtmlElement::li('Second item')->setClass('list-group-item active'); // Add 'active' class
$item3 = HtmlElement::li()->setClass('list-group-item'); // Empty item
$link = HtmlElement::a('Click me')->setHref('#');
$item3->add_child('link', $link); // Add link to the third item

$list->add_child('i1', $item1)
     ->add_child('i2', $item2)
     ->add_child('i3', $item3);

echo $list->output();
?>
// Expected Output:
// <ul class="list-group">
//   <li class="list-group-item">First item</li>
//   <li class="list-group-item active">Second item</li>
//   <li class="list-group-item"><a href="#">Click me</a></li>
// </ul>
```

**Example 3: HTMX Partial Loading with Hyperscript Interaction**
```php
<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Hypertool\Html\HtmlElement;

$loadButton = HtmlElement::button('Load Content')
    ->setClass('btn btn-secondary')
    ->setHxGet('/content-partial')
    ->setHxTarget('#content-area')
    ->setHxSwap('innerHTML')
    ->setHyperscript('on click add @disabled then add .opacity-50 until htmx:afterRequest then remove @disabled remove .opacity-50');

$contentArea = HtmlElement::div()->setId('content-area');

echo $loadButton->output();
echo $contentArea->output();
?>
// Expected Output:
// <button class="btn btn-secondary" hx-get="/content-partial" hx-target="#content-area" hx-swap="innerHTML" _="on click add @disabled then add .opacity-50 until htmx:afterRequest then remove @disabled remove .opacity-50">Load Content</button>
// <div id="content-area"></div>
```

## 4. Detailed Use Cases/Scenarios

1.  **Building Standard HTML Pages:** Use the library to generate common HTML structures like headers, footers, navigation, content sections, lists, and tables programmatically, often within a PHP templating system or framework.
2.  **Creating Reusable UI Components:** Encapsulate complex HTML structures (like cards, modals, form groups) into custom PHP classes that extend `HtmlElement`, applying consistent styling (e.g., Bootstrap/Tailwind classes) and behavior.
3.  **Developing HTMX-powered Interfaces:** Easily add HTMX attributes (`hx-get`, `hx-target`, `hx-trigger`, etc.) to elements to create dynamic, AJAX-driven user interfaces without writing complex JavaScript.
4.  **Integrating Hyperscript for Client-Side Behavior:** Add simple, inline client-side interactivity using the `_` attribute via the `setHyperscript` method, often in conjunction with HTMX events.

## 5. Dependencies

-   PHP `>=7.4` (as defined in `composer.json`).
-   Relies on the specific element classes (e.g., `Hypertool\Html\Div`, `Hypertool\Html\Button`) located within the same namespace (`src/`) when using the static factory methods. These are part of the same library.
-   No external PHP library dependencies by default.

## 6. Error Handling & Exceptions

-   The class itself does not throw many explicit exceptions during typical usage.
-   **Invalid Child Identifiers:** Using the same string identifier multiple times in `add_child` for the same parent will result in only the last child being accessible via the magic property (e.g., `$parent->childId`). The element will still be rendered correctly as a child.
-   **Invalid HTML:** While the library helps structure HTML, it doesn't strictly validate against HTML standards (e.g., putting a `<div>` inside a `<p>`). Incorrect usage can lead to invalid HTML output.
-   **Namespacing Issues:** If not using the Composer autoloader or correct `use` statements, PHP will throw errors related to class not found.

## 7. Configuration

-   No specific configuration is required for `HtmlElement` itself.
-   The related `ScriptManager` class uses the `APP_ENV` environment variable (or `setEnv` method) to determine whether to load assets locally or from CDN, but this doesn't directly affect `HtmlElement`.

## 8. Best Practices & Pitfalls

-   **Chaining:** Leverage method chaining for cleaner code when setting multiple attributes: `$el->setId('x')->setClass('y')->setHxGet('/z');`
-   **Static Factories:** Prefer using the static factory methods (`HtmlElement::div()`) for readability and convenience over `new HtmlElement('div')`.
-   **Specific Classes:** When available, using specific element classes (`new Div()`) can sometimes offer more tailored methods or constructors, although the static factories are generally sufficient.
-   **Readability:** For elements with many classes (especially Tailwind), consider breaking `setClass()` calls or using helper methods if you implement them (see framework compatibility discussion).
-   **Child Management:** Use meaningful identifiers in `add_child` if you need to access or modify specific children later via magic properties. Avoid relying on numeric indices.
-   **Content vs. Children:** Remember that setting text content via `text()` might be ignored if the element already has children added via `add_child`. Add text content *to* child elements instead if needed.