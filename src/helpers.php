<?php

if ( ! function_exists('orchestra'))
{
	/**
	 * Return orchestra.app instance.
	 *
	 * @return Orchestra\Foundation\Application
	 */
	function orchestra()
	{

		return app('orchestra.app');
	}
}

if ( ! function_exists('memorize'))
{
	/**
	 * Return memory configuration associated to the request
	 *
	 * @see    Orchestra\Core::memory()
	 * @param  string   $key
	 * @param  string   $default
	 * @return mixed
	 */
	function memorize($key, $default = null)
	{
		return Orchestra\Support\Facades\App::memory()->get($key, $default);
	}
}

if ( ! function_exists('handles'))
{
	/**
	 * Return handles configuration for a package/app.
	 * 
	 * @param  string   $name   Package name
	 * @return string
	 */
	function handles($name)
	{
		return Orchestra\Support\Facades\App::handles($name);
	}
}
