<?php
// examples/script_manager_example.php

// Use Composer's autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Import necessary class from the namespace
use Hypertool\Html\ScriptManager;

echo "--- ScriptManager Examples (with Namespace) ---\n\n";

// --- Simulate Development Environment ---
echo "1. Development Environment:\n";
ScriptManager::setEnv('development'); // Or let it auto-detect

// Page 1 requires HTMX
ScriptManager::requireHtmx();
// Page 2 requires Hyperscript
ScriptManager::requireHyperscript();
// Component A requires HTMX again (should not duplicate)
ScriptManager::requireHtmx();

$output_dev = ScriptManager::outputScripts();
echo $output_dev;
// Basic check
if (strpos($output_dev, 'unpkg.com/htmx.org') !== false && strpos($output_dev, 'unpkg.com/hyperscript.org') !== false && substr_count($output_dev, '<script src') === 2) {
    echo "  [PASS] Dev: Correct scripts included without duplicates.\n";
} else {
    echo "  [FAIL] Dev: Script inclusion failed.\n";
}
echo "\n";

// --- Simulate Production Environment ---
echo "2. Production Environment:\n";
ScriptManager::setEnv('production');

// Reset included status for simulation (in real app, this happens per request)
// Note: This reset is just for this example script. ScriptManager handles this internally per request.
// Reflection hack to reset private static properties for demo purposes ONLY.
try {
    $reflection = new ReflectionClass(ScriptManager::class); // Use ::class for namespaced class
    $includedProp = $reflection->getProperty('included');
    $includedProp->setAccessible(true);
    $includedProp->setValue(null, ['htmx' => false, 'hyperscript' => false]);
    $pendingProp = $reflection->getProperty('pending');
    $pendingProp->setAccessible(true);
    $pendingProp->setValue(null, ['htmx' => false, 'hyperscript' => false]);
} catch (ReflectionException $e) {
    echo "  [WARN] Could not reset ScriptManager state via reflection: " . $e->getMessage() . "\n";
}


// Page 3 requires only HTMX
ScriptManager::requireHtmx();

$output_prod = ScriptManager::outputScripts();
echo $output_prod;
// Basic check
// Ensure local asset paths exist for this check to pass in production mode
if (strpos($output_prod, '/assets/js/htmx.min.js') !== false && strpos($output_prod, 'hyperscript') === false && substr_count($output_prod, '<script src') === 1) {
    echo "  [PASS] Prod: Correct local HTMX script included conditionally.\n";
} else {
    echo "  [FAIL] Prod: Script inclusion failed. (Check if /assets/js/htmx.min.js exists?)\n";
}
echo "\n";

// --- Simulate No Scripts Required ---
echo "3. No Scripts Required:\n";
// Reset included status again for demo
try {
    $includedProp->setAccessible(true);
    $includedProp->setValue(null, ['htmx' => false, 'hyperscript' => false]);
    $pendingProp->setAccessible(true);
    $pendingProp->setValue(null, ['htmx' => false, 'hyperscript' => false]);
} catch (ReflectionException $e) {
     echo "  [WARN] Could not reset ScriptManager state via reflection: " . $e->getMessage() . "\n";
}


$output_none = ScriptManager::outputScripts();
echo "Output (should be empty): '" . trim($output_none) . "'\n";
// Basic check
if (trim($output_none) === '') {
    echo "  [PASS] No scripts output when none required.\n";
} else {
    echo "  [FAIL] Unexpected output when no scripts required.\n";
}
echo "\n";

?>