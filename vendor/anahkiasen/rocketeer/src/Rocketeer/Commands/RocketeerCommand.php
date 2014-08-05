<?php
/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Rocketeer\Commands;

use Rocketeer\Rocketeer;

/**
 * The core command when starting the Rocketeer CLI
 *
 * @author Maxime Fabre <ehtnam6@gmail.com>
 */
class RocketeerCommand extends DeployCommand
{
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'deploy';

	/**
	 * Displays the current version
	 *
	 * @return string
	 */
	public function fire()
	{
		// Display version
		if ($this->option('version')) {
			return $this->line('<info>Rocketeer</info> version <comment>'.Rocketeer::VERSION.'</comment>');
		}

		// Else run the Deploy task
		return parent::fire();
	}
}
