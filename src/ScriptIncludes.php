<?php
/**
 * Helper for including HTMX and Hyperscript scripts in your project.
 * Usage:
 *   echo ScriptIncludes::htmx();
 *   echo ScriptIncludes::hyperscript();
 *   // Or specify a version:
 *   echo ScriptIncludes::htmx('1.9.10');
 *   echo ScriptIncludes::hyperscript('0.9.12');
 */
class ScriptIncludes {
    public static function htmx($version = '1.9.10') {
        return "<script src=\"https://unpkg.com/htmx.org@$version\"></script>\n";
    }
    public static function hyperscript($version = '0.9.12') {
        return "<script src=\"https://unpkg.com/hyperscript.org@$version\"></script>\n";
    }
}