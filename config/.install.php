<?php
/**
 * Этот файл является частью расширения модуля веб-приложения RosGear.
 * 
 * Файл конфигурации установки расширения.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'id'          => 'rg.be.config.ipblocklist',
    'moduleId'    => 'rg.be.config',
    'name'        => 'IP Blocklist',
    'description' => 'IP addresses of users who are being verified or were blocked during verification',
    'namespace'   => 'Rg\Backend\Config\IpBlockList',
    'path'        => '/rg/rg.be.config.ipblocklist',
    'route'       => 'ipblocklist',
    'locales'     => ['ru_RU', 'en_GB'],
    'permissions' => ['any', 'info'],
    'events'      => [],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'RG Workspace'],
        ['app', 'code' => 'RG CMS'],
        ['app', 'code' => 'RG CRM'],
        ['module', 'id' => 'rg.be.config']
    ]
];
