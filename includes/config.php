<?php
// Site configuration settings
class Config {
    // Site environment constants
    const ENV_LOCAL = 'local';
    const ENV_PRODUCTION = 'production';
    
    // Current environment (will be detected)
    private static $environment;
    
    // Site URLs
    private static $siteURLs = [
        self::ENV_LOCAL => 'http://localhost/rectocode',
        self::ENV_PRODUCTION => 'https://rectocode.com',
    ];
    
    // Site root URL (will be populated)
    private static $siteRoot;
    
    /**
     * Initialize configuration
     * This should be called at the beginning of the application
     */
    public static function init() {
        // Detect the environment by server name
        self::detectEnvironment();
        
        // Set the site root based on environment
        self::$siteRoot = self::$siteURLs[self::$environment];
        
        // Define global constants
        self::defineConstants();
    }
    
    /**
     * Detect the current environment
     */
    private static function detectEnvironment() {
        $serverName = $_SERVER['SERVER_NAME'] ?? '';
        
        if ($serverName === 'localhost' || $serverName === '127.0.0.1') {
            self::$environment = self::ENV_LOCAL;
        } else {
            self::$environment = self::ENV_PRODUCTION;
        }
    }
    
    /**
     * Define global constants
     */
    private static function defineConstants() {
        // Define site root constant
        if (!defined('SITE_ROOT')) {
            define('SITE_ROOT', self::$siteRoot);
        }
        
        // Set environment constant
        if (!defined('ENVIRONMENT')) {
            define('ENVIRONMENT', self::$environment);
        }
    }
    
    /**
     * Get the site root URL
     */
    public static function getSiteRoot() {
        return self::$siteRoot;
    }
    
    /**
     * Get the current environment
     */
    public static function getEnvironment() {
        return self::$environment;
    }
    
    /**
     * Check if we're in local environment
     */
    public static function isLocal() {
        return self::$environment === self::ENV_LOCAL;
    }
    
    /**
     * Check if we're in production environment
     */
    public static function isProduction() {
        return self::$environment === self::ENV_PRODUCTION;
    }
    
    /**
     * Get absolute URL for a path
     * 
     * @param string $path The path to convert to absolute URL
     * @return string The absolute URL
     */
    public static function url($path = '') {
        // Remove leading slash if present
        $path = ltrim($path, '/');
        
        // Return the absolute URL
        return self::$siteRoot . '/' . $path;
    }
}

// Initialize configuration
Config::init(); 