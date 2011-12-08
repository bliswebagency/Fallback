<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------

/**
 * Fallback Plugin
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Blis
 * @link		
 */

$plugin_info = array(
	'pi_name'		=> 'Fallback',
	'pi_version'	=> '1.0',
	'pi_author'		=> 'Blis',
	'pi_author_url'	=> '',
	'pi_description'=> 'Will check multiple options depending on if your first choice is blank',
	'pi_usage'		=> Fallback::usage()
);


class Fallback {

	public $return_data;
    
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->EE =& get_instance();
	}
	
	public function options()
	{
		if ($option1 != "")
		return $option1;
		
		if ($option2 != "")
		return $option2;
		
		if ($option3 != "")
		return $option3;
	}
	
	// ----------------------------------------------------------------
	
	/**
	 * Plugin Usage
	 */
	public static function usage()
	{
		ob_start();
?>

{exp:fallback:options option1="{video}" option2="{image}" option3="/images/default.png"}
<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}


/* End of file pi.fallback.php */
/* Location: /system/expressionengine/third_party/fallback/pi.fallback.php */