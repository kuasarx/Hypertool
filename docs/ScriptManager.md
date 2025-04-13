# Class: Hypertool\Html\ScriptManager

## 1. Overview

The `ScriptManager` class provides an automated and intelligent system for injecting HTMX and Hyperscript JavaScript library tags into HTML layouts or templates. Its primary purpose is to ensure these scripts are included efficiently and correctly, addressing common challenges like duplicate inclusions and environment-specific loading (CDN vs. local assets).

It acts as a central registry within a single request lifecycle to track which scripts (`htmx.js`, `hyperscript.js`) have been requested by different parts of an application (pages, components, partials) and then outputs the necessary `<script>` tags exactly once, typically just before the closing `</body>` tag.

## 2. API Reference

`ScriptManager` uses static methods and properties to maintain state throughout a single PHP request.

### Static Methods

#### `setEnv(string $env): void`

-   **Purpose:** Explicitly sets the application environment to control script source URLs.
-   **Parameters:**
    -   `$env` (string, required): The environment name. Typically 'production' or 'development'.
-   **Return Value:** `void`.
-   **Side Effects:** Sets the internal static environment state. If not called, the class attempts to detect the environment using `getenv('APP_ENV')`.
-   **Exceptions:** None.

#### `requireHtmx(): void`

-   **Purpose:** Registers a request to include the HTMX script on the current page render. Call this from any page or component that utilizes HTMX features.
-   **Parameters:** None.
-   **Return Value:** `void`.
-   **Side Effects:** Sets an internal flag indicating HTMX is needed for the current request.
-   **Exceptions:** None.

#### `requireHyperscript(): void`

-   **Purpose:** Registers a request to include the Hyperscript script on the current page render. Call this from any page or component that utilizes Hyperscript features (e.g., the `_` attribute).
-   **Parameters:** None.
-   **Return Value:** `void`.
-   **Side Effects:** Sets an internal flag indicating Hyperscript is needed for the current request.
-   **Exceptions:** None.

#### `outputScripts(): string`

-   **Purpose:** Generates the HTML `<script>` tags for all requested libraries (HTMX and/or Hyperscript) that haven't already been output during the current request. It also includes basic error handling and a `<noscript>` fallback message. This method should be called **once** per page request, typically in the main layout file just before the closing `</body>` tag.
-   **Parameters:** None.
-   **Return Value:** (string) The HTML string containing the necessary `<script>` tags and the `<noscript>` fallback, or an empty string if no scripts were requested or already output.
-   **Side Effects:** Marks the requested scripts as "included" internally for the current request to prevent duplicates on subsequent calls within the same request (though it's designed to be called only once). Resets the pending requests for the next cycle (relevant in long-running processes, though typically used per-request in web apps).
-   **Exceptions:** None.

### Static Properties

-   `$included` (private static array): Tracks which scripts have been output in the current request.
-   `$pending` (private static array): Tracks which scripts have been requested via `requireHtmx`/`requireHyperscript` in the current request.
-   `$env` (private static ?string): Stores the explicitly set environment ('production' or 'development').
-   `$htmxVersion` (private static string): Default HTMX version for CDN URL.
-   `$hyperscriptVersion` (private static string): Default Hyperscript version for CDN URL.

*(These properties are internal state and should not be accessed directly.)*

## 3. Usage Examples

*(Assumes Composer autoloader is included and `use Hypertool\Html\ScriptManager;`)*

**Example 1: Basic Layout Integration**
```php
<?php // layout.php
use Hypertool\Html\ScriptManager;

// Simulate different parts of the page requesting scripts
// Header component might require HTMX
ScriptManager::requireHtmx();

// A specific widget requires Hyperscript
ScriptManager::requireHyperscript();

// Another component also needs HTMX (won't cause duplication)
ScriptManager::requireHtmx();

?>
<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
    <!-- Other head elements -->
</head>
<body>
    <!-- Page content -->
    <h1>Welcome</h1>
    <div id="widget">...</div>

    <!-- Output scripts just before closing body -->
    <?php echo ScriptManager::outputScripts(); ?>
</body>
</html>
// Expected Output (in development):
// <script src="https://unpkg.com/htmx.org@1.9.10" onerror="alert('HTMX failed to load!')"></script>
// <script src="https://unpkg.com/hyperscript.org@0.9.12" onerror="alert('Hyperscript failed to load!')"></script>
// <noscript><div class="alert alert-warning">This site works best with JavaScript enabled.</div></noscript>
```

**Example 2: Production Environment**
```php
<?php // layout.php (in production)
use Hypertool\Html\ScriptManager;

// Set environment explicitly (or rely on APP_ENV)
ScriptManager::setEnv('production');

ScriptManager::requireHtmx();
// Only HTMX is needed for this page

?>
<!DOCTYPE html>
<html>
<body>
    <!-- Page content -->

    <?php echo ScriptManager::outputScripts(); ?>
</body>
</html>
// Expected Output (in production):
// <script src="/assets/js/htmx.min.js" onerror="alert('HTMX failed to load!')"></script>
// <noscript><div class="alert alert-warning">This site works best with JavaScript enabled.</div></noscript>
// (Assumes /assets/js/htmx.min.js exists)
```

**Example 3: No Scripts Required**
```php
<?php // simple_page.php
use Hypertool\Html\ScriptManager;

// No calls to requireHtmx() or requireHyperscript() made for this page

?>
<!DOCTYPE html>
<html>
<body>
    <h1>Static Content</h1>
    <!-- No dynamic scripts needed -->

    <?php echo ScriptManager::outputScripts(); // Call is safe, outputs nothing ?>
</body>
</html>
// Expected Output:
// (Empty string from outputScripts())
```

## 4. Detailed Use Cases/Scenarios

1.  **Standard Web Application Layout:** The most common use case. Call `requireHtmx()` or `requireHyperscript()` within controllers, views, or components that depend on these libraries. Then, in the main HTML layout file (e.g., `layout.php`, `base.html.twig`), make a single call to `ScriptManager::outputScripts()` just before `</body>` to inject all necessary scripts exactly once.
2.  **Component-Based Systems:** In systems where pages are built from smaller, potentially reusable components (like view composers, partials, or widgets), each component can independently call `requireHtmx()` or `requireHyperscript()` if it needs them. The `ScriptManager` ensures that even if multiple components request the same script, it's only included once when `outputScripts()` is called in the final layout.
3.  **Development vs. Production Builds:** Use `setEnv('production')` or the `APP_ENV` environment variable to automatically switch between loading scripts from a CDN (fast for development, no local setup needed) and loading locally bundled/minified versions (better performance, reliability, and offline capability in production).
4.  **AJAX/Partial Rendering:** While `ScriptManager` primarily works within a single PHP request, if you are rendering HTML partials via AJAX (e.g., using HTMX itself), ensure that the main page load has already included the necessary base libraries (HTMX/Hyperscript) using `ScriptManager`. The partials themselves wouldn't typically call `outputScripts()`.

## 5. Dependencies

-   PHP `>=7.4` (as defined in `composer.json`).
-   Relies on the environment variable `APP_ENV` for optional automatic environment detection (defaults to 'development' if not set or not 'production').
-   If using 'production' mode, assumes local script files exist at `/assets/js/htmx.min.js` and `/assets/js/hyperscript.min.js` (paths are currently hardcoded but could be made configurable).

## 6. Error Handling & Exceptions

-   The class itself does not throw exceptions during normal operation.
-   **Script Loading Errors:** Basic client-side error handling is included via the `onerror` attribute on the generated `<script>` tags, which will trigger a JavaScript `alert()`. This provides immediate feedback if the CDN or local file fails to load.
-   **`<noscript>` Fallback:** A simple message is included within `<noscript>` tags to inform users if JavaScript is disabled or if the primary scripts failed to execute.

## 7. Configuration

-   **Environment:** Set via `ScriptManager::setEnv('production'|'development')` or automatically detected using the `APP_ENV` environment variable.
-   **Script Versions (CDN):** Default versions for CDN URLs are hardcoded (`$htmxVersion`, `$hyperscriptVersion`). These could be made configurable via static setters if needed.
-   **Local Asset Paths (Production):** Paths for production assets (`/assets/js/...`) are hardcoded. These could be made configurable if necessary.

## 8. Best Practices & Pitfalls

-   **Call `outputScripts()` Once:** Ensure `outputScripts()` is called exactly once per full page render, typically at the very end of the `<body>` in your main layout file. Calling it multiple times within the same request might lead to unexpected behavior (though the internal `$included` flag offers some protection).
-   **Call `require` Methods Appropriately:** Call `requireHtmx()` and `requireHyperscript()` only in the code paths (controllers, views, components) that actually *use* those libraries for the current request. Don't call them unconditionally in the layout if not every page needs them.
-   **Environment Configuration:** Ensure the environment (`APP_ENV` or `setEnv`) is correctly set for production deployments to load local assets.
-   **Local Assets:** If using production mode, ensure the specified local asset files (`/assets/js/htmx.min.js`, etc.) actually exist and are served correctly by your web server.
-   **State Reset:** The class uses static properties, meaning its state persists only for the duration of a single PHP request in typical web server environments (like Apache+mod_php, php-fpm). Be mindful of this if using in long-running processes or testing frameworks where manual state reset might be needed between tests (as shown in the example using Reflection, which should *not* be used in production code).