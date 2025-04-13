# Plan: Make Library Composer Installable

## Objective

Refactor the PHP HTML element generator library to be installable via Composer, using PSR-4 autoloading and namespaces.

---

## 1. Choose Namespace

- **Vendor:** `Hypertool`
- **Package/Namespace:** `Html`
- **Full Namespace:** `Hypertool\Html`

---

## 2. Add Namespace Declarations

- **Action:** Iterate through all `.php` files within the `src/` directory.
- **Modification:** Add the following line at the top of each PHP file, immediately after the opening `<?php` tag:
  ```php
  namespace Hypertool\Html;
  ```
- **Update Internal References:** Ensure any internal class references within the library (e.g., in static factory methods in `HtmlElement.php`) are updated to use the fully qualified namespace or have appropriate `use` statements added.

---

## 3. Create `composer.json`

- **Action:** Create a `composer.json` file in the project root.
- **Content:**
  ```json
  {
      "name": "hypertool/html",
      "description": "A comprehensive PHP library for generating HTML elements with HTMX and Hyperscript support.",
      "type": "library",
      "license": "MIT",
      "authors": [
          {
              "name": "Your Name", // Replace with actual author name
              "email": "your.email@example.com" // Replace with actual author email
          }
      ],
      "require": {
          "php": ">=7.4" // Or specify a higher minimum version if needed
      },
      "autoload": {
          "psr-4": {
              "Hypertool\\Html\\": "src/"
          }
      },
      "minimum-stability": "stable",
      "prefer-stable": true
  }
  ```
- **Note:** Replace placeholder author details. Adjust the PHP version requirement if necessary.

---

## 4. Update Usage Examples

- **Action:** Modify `examples/*.php` scripts.
- **Modification:** Add `use` statements at the top of each example file for the classes being used:
  ```php
  <?php
  require_once __DIR__ . '/../vendor/autoload.php'; // Use Composer autoloader

  use Hypertool\Html\HtmlElement;
  use Hypertool\Html\ScriptManager;
  // Add use statements for specific element classes if needed
  use Hypertool\Html\Div;
  use Hypertool\Html\Button;
  // ... etc.

  // Example code remains largely the same, but now uses namespaced classes
  $div = HtmlElement::div('Content');
  ScriptManager::requireHtmx();
  echo ScriptManager::outputScripts();
  ?>
  ```

---

## 5. Update README.md

- **Action:** Modify the `Readme.md` file.
- **Modification:**
  - Update the "Setup" section to include Composer installation:
    ```markdown
    ## Setup

    1. **Install via Composer:**
       ```sh
       composer require hypertool/html
       ```
    2. **Include the autoloader in your project:**
       ```php
       require_once 'vendor/autoload.php';
       ```
    3. **Use the namespaced classes:**
       ```php
       use Hypertool\Html\HtmlElement;
       use Hypertool\Html\ScriptManager;
       // ... etc.
       ```
  - Remove any previous setup instructions involving direct includes.
  - Update any references to the old package name/namespace.

---

## 6. Testing

- **Action:** Perform testing after implementation.
- **Steps:**
  - Run `composer install` in the project root to generate the autoloader.
  - Execute the updated example scripts (`php examples/html_element_example.php`, `php examples/script_manager_example.php`) to verify that autoloading works and the examples run without errors.

---

## 7. Commit and Push

- **Action:** Commit all changes (namespaced files, `composer.json`, updated examples, updated README) to Git.
- **Message:** e.g., `refactor: Add Composer support with Hypertool\Html namespace`

---
