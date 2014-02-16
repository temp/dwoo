<?php
namespace Dwoo\Plugins\Functions;
use Dwoo\Compiler;

/**
 * Checks whether a variable is not null
 * <pre>
 *  * var : variable to check
 * </pre>
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 *
 * @author     David Sanchez <david38sanchez@gmail.com>
 * @copyright  Copyright (c) 2014, David Sanchez
 * @license    http://dwoo.org/LICENSE GNU Lesser General Public License v3.0
 * @link       http://dwoo.org/
 * @version    2.0
 * @date       2013-09-06
 * @package    Dwoo
 */
function functionIssetCompile(Compiler $compiler, $var) {
	return '(' . $var . ' !== null)';
}
