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

/**
 * Facade for Rocketeer's CLI
 *
 * @author Maxime Fabre <ehtnam6@gmail.com>
 *
 * @see Rocketeer\Console\Console
 */
class Console extends StandaloneFacade
{
	/**
	 * The class to fetch from the container
	 *
	 * @var string
	 */
	protected static $accessor = 'rocketeer.console';
}
