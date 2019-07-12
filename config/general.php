<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */

return [
    '*' => [
        'defaultWeekStartDay' => 0,
        'enableCsrfProtection' => true,
        'omitScriptNameInUrls' => true,
        'usePathInfo' => true,
        'cpTrigger' => 'admin',
        'securityKey' => getenv('SECURITY_KEY'),
        'siteUrl' => getenv('DEFAULT_SITE_URL'),
        'generateTransformsBeforePageLoad' => true,
        'useProjectConfigFile' => true,
    ],
    'dev' => [
        'devMode' => true,
    ],
    'staging' => [
    ],
    'production' => [
    ],
];
