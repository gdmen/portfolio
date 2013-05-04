<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function active($name, $number)
{
	$ci = get_instance();

	if($name == 'home' && $number == 1) {
		return "class='active'";
	}
	elseif(($name=="projects") && $number == 2) {
		return "class='active'";
	}
	elseif(($name=="photography") && $number == 3) {
		return "class='active'";
	}
	elseif($name=="blog" && $number == 4) {
		return "class='active'";
	}
}

function shuffle_assoc($list) { 
  if (!is_array($list)) return $list; 

  $keys = array_keys($list); 
  shuffle($keys); 
  $random = array(); 
  foreach ($keys as $key) 
    $random[$key] = $list[$key]; 

  return $random; 
}
?>
