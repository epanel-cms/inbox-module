<?php

/* Author : Noviyanto Rahmadi 
 * E-mail : novay@btekno.id
 * Copyright 2020 Borneo Teknomedia. */

Route::group(['prefix' => 'epanel', 'as' => 'epanel.'], function() 
{
	Route::resources([
	    'inbox' => 'InboxController'
	]);
});