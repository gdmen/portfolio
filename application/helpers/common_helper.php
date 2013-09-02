<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function active($name, $number)
{
	$ci = get_instance();

	if($name == 'projects' && $number == 1) {
		return "class='active'";
	}
	elseif(($name=="employment") && $number == 2) {
		return "class='active'";
	}
	elseif(($name=="education") && $number == 3) {
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
