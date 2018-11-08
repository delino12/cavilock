<?php 
/*
|---------------------------------------------------------------------------
| REGISTER OR CAVILOCK ROUTE URI HERE
|---------------------------------------------------------------------------
*/
Route::get('cavidel/verify', function(){

	return Cavilock::verifySofware();

});
