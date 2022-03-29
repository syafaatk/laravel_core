<?php

/**
 * A Success json response
 * @param $response
 * @return \Illuminate\Http\JsonResponse
 */
if (!function_exists('json_response')) {
	function json_response($response = 'success')
	{
		$data = [
			'success' => 1,
			'error'   => null,
			'data'    => $response,
		];

		return response()->json($data);
	}
}

if (!function_exists('isJson')) {
	function isJson($string) {
		json_decode($string);
		return (json_last_error() == JSON_ERROR_NONE);
	}
}