<?php

function pap($f, $arg1)
{
	return function() use ($arg1,$f) {
		$args = func_get_args();
		array_unshift($args, $arg1);
		return call_user_func_array($f, $args);
	};
}