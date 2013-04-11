<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function active($name, $number)
{
	$ci = get_instance();

	if($name == 'home' && $number == 1) {
		return "class='active'";
	}
	elseif($name=="blog" && $number == 2) {
		return "class='active'";
	}
	elseif(($name=="projects") && $number == 3) {
		return "class='active'";
	}
}
?>
