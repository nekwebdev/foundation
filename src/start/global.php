<?php

App::make('orchestra.memory')->extend('user', function ($app, $name)
{
	return new Orchestra\Services\UserMetaRepository($app, $name);
});
