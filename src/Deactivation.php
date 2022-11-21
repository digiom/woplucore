<?php namespace Woplucore;

defined('ABSPATH') || exit;

use Woplucore\Interfaces\Deactivable;
use Woplucore\Traits\SingletonTrait;

/**
 * Deactivation
 *
 * @package Woplucore
 */
class Deactivation implements Deactivable
{
	use SingletonTrait;
}