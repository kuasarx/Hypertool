<?php
// scripts/add_namespace.php
// Adds the Hypertool\Html namespace to all PHP class files in src/

$namespace = "Hypertool\\Html";
$srcDir = __DIR__ . '/../src';
$excludeFiles = [
    'Html.php', // Handle separately due to static factory methods needing updates
    'html_elements_master_list.php',
    'check_missing_elements.php',
    'generate_missing_elements.php',
    'add_usage_examples.php',
    'ScriptIncludes.php', // Assuming these might not need the namespace or are handled differently
    'ScriptManager.php'
];

$files = glob("$srcDir/*.php");

foreach ($files as $file) {
    $basename = basename($file);
    if (in_array($basename, $excludeFiles)) {
        echo "Skipping: $basename\n";
        continue;
    }

    $content = file_get_contents($file);

    // Check if namespace already exists
    if (strpos($content, "namespace $namespace;") !== false) {
        echo "Namespace already exists in: $basename\n";
        continue;
    }

    // Prepend namespace after <?php
    $newContent = preg_replace('/^<\?php\s*/', "<?php\n\nnamespace $namespace;\n\n", $content, 1);

    if ($newContent !== $content) {
        file_put_contents($file, $newContent);
        echo "Added namespace to: $basename\n";
    } else {
        echo "Could not add namespace to: $basename (Maybe no <?php tag?)\n";
    }
}

// Handle Html.php, ScriptIncludes.php, ScriptManager.php separately
foreach (['Html.php', 'ScriptIncludes.php', 'ScriptManager.php'] as $specialFile) {
     $filePath = $srcDir . '/' . $specialFile;
     if (!file_exists($filePath)) continue;

     $content = file_get_contents($filePath);
     if (strpos($content, "namespace $namespace;") !== false) {
        echo "Namespace already exists in: $specialFile\n";
        continue;
     }
     $newContent = preg_replace('/^<\?php\s*/', "<?php\n\nnamespace $namespace;\n\n", $content, 1);
     if ($newContent !== $content) {
        file_put_contents($filePath, $newContent);
        echo "Added namespace to: $specialFile\n";
     } else {
        echo "Could not add namespace to: $specialFile\n";
     }
}


echo "Namespace script finished.\n";
?>