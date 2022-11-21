<?php namespace Woplucore;

defined('ABSPATH') || exit;

use Woplucore\Interfaces\Activable;
use Woplucore\Traits\SingletonTrait;

/**
 * Activation
 *
 * @package Woplucore
 */
class Activation implements Activable
{
	use SingletonTrait;
}