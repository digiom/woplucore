<?php namespace Woplucore;

defined('ABSPATH') || exit;

use Woplucore\Interfaces\Uninstallable;
use Woplucore\Traits\SingletonTrait;

/**
 * Uninstall
 *
 * @package Woplucore
 */
class Uninstall implements Uninstallable
{
	use SingletonTrait;
}