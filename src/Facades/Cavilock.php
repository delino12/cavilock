<?php

namespace Cavidel\Cavilock\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * Cavilock pack
 */
class Cavilock extends Facade
{
	// locate facade accessor
	protected static function getFacadeAccessor(){
		return 'cavidel-cavilock';
	}
}