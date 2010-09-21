<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2010, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace li3_behaviors\extensions;

use li3_behaviors\extensions\model\Behaviors;

class Model extends \lithium\data\Model {

	protected $_actsAs = array();

	public static function __init() {
		static::_isBase(__CLASS__, true);
		parent::__init();
		$class = get_called_class();

		if (!static::_isBase($class) && $behaviors = static::_object()->_actsAs) {
			Behaviors::apply($class, $behaviors);
		}
	}
}

?>