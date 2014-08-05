<?php
/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Rocketeer\Facades;

use Illuminate\Support\Facades\Facade;
use Rocketeer\RocketeerServiceProvider;

/**
 * Facade for Rocketeer's CLI
 *
 * @author Maxime Fabre <ehtnam6@gmail.com>
 *
 * @see Rocketeer\Console\Console
 */
abstract class StandaloneFacade extends Facade
{
	/**
	 * The class to fetch from the container
	 *
	 * @var string
	 */
	protected static $accessor;

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		if (!static::$app) {
			static::$app = RocketeerServiceProvider::make();
		}

		return static::$accessor;
	}
}
