<?php
/**
 * ScriptManager: Automated, environment-aware script injection for HTMX and Hyperscript.
 * - Prevents duplicate inclusions
 * - Supports environment-based loading (CDN in dev, local in prod)
 * - Adds error handling and <noscript> fallback
 * - Allows conditional loading per page/component
 */
class ScriptManager {
    private static $included = [
        'htmx' => false,
        'hyperscript' => false,
    ];
    private static $pending = [
        'htmx' => false,
        'hyperscript' => false,
    ];
    private static $env = null; // 'production' or 'development'
    private static $htmxVersion = '1.9.10';
    private static $hyperscriptVersion = '0.9.12';

    /**
     * Set environment: 'production' or 'development'
     */
    public static function setEnv($env) {
        self::$env = $env;
    }

    /**
     * Request HTMX for this page/component
     */
    public static function requireHtmx() {
        self::$pending['htmx'] = true;
    }

    /**
     * Request Hyperscript for this page/component
     */
    public static function requireHyperscript() {
        self::$pending['hyperscript'] = true;
    }

    /**
     * Output all required scripts, with error handling and <noscript> fallback.
     * Call this once in your layout/template footer.
     */
    public static function outputScripts() {
        $out = '';
        // Detect environment if not set
        $env = self::$env ?? (getenv('APP_ENV') === 'production' ? 'production' : 'development');
        // HTMX
        if (self::$pending['htmx'] && !self::$included['htmx']) {
            $src = $env === 'production'
                ? '/assets/js/htmx.min.js'
                : "https://unpkg.com/htmx.org@" . self::$htmxVersion;
            $out .= '<script src="' . $src . '" onerror="alert(\'HTMX failed to load!\')"></script>' . "\n";
            self::$included['htmx'] = true;
        }
        // Hyperscript
        if (self::$pending['hyperscript'] && !self::$included['hyperscript']) {
            $src = $env === 'production'
                ? '/assets/js/hyperscript.min.js'
                : "https://unpkg.com/hyperscript.org@" . self::$hyperscriptVersion;
            $out .= '<script src="' . $src . '" onerror="alert(\'Hyperscript failed to load!\')"></script>' . "\n";
            self::$included['hyperscript'] = true;
        }
        // <noscript> fallback (only output once)
        if ($out !== '') {
            $out .= '<noscript><div class="alert alert-warning">This site works best with JavaScript enabled.</div></noscript>' . "\n";
        }
        // Reset pending for next request cycle
        self::$pending = [
            'htmx' => false,
            'hyperscript' => false,
        ];
        return $out;
    }
}