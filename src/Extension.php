<?php
/**
 * Расширение модуля веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Backend\Config\IpBlockList;

/**
 * Расширение "Список заблокированных IP-адресов".
 * 
 * IP-адреса пользователей, которые проходят проверку или во время проверки были 
 * заблокированы.
 * 
 * Расширение принадлежит модулю "Конфигурация".
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Backend\Config\IpBlockList
 * @since 1.0
 */
class Extension extends \Ge\Panel\Extension\Extension
{
    /**
     * {@inheritdoc}
     */
    public string $id = 'rg.be.config.ipblocklist';

    /**
     * {@inheritdoc}
     */
    public string $defaultController = 'grid';
}