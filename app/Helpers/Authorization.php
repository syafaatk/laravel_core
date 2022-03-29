<?php

function isValidRole($akses, $roles)
{
	$data['akses'] = $akses;
	$data['role'] = $akses;

	if (gettype($roles)=="array") {
		foreach ($roles as $role) {
			if (property_exists($data['role'], $role)){
				$data['role'] = $data['role']->{$role};
			} else {
				return false;
			}
		}
	} else {
		if (property_exists($data['role'], $roles)){
			$data['role'] = $data['role']->{$roles};
		} else {
			return false;
		}
	}

	return $data['role'];
}