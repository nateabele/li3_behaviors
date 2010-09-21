<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2010, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace li3_behaviors\extensions\model;

use lithium\core\Libraries;

class Behaviors extends \lithium\core\StaticObject {

	public static function apply($model, array $behaviors) {
		foreach ($behaviors as $name => $config) {
			if (is_string($config)) {
				$name = $config;
				$config = array();
			}
			if ($class = Libraries::locate('behavior', $name)) {
				$class::bind($model, $config);
			}
		}
	}
}

?>