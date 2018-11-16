<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Cavilock
Cavilock helps developer's or software providers monitor their application status and fire a lock event when subscription elapsed

### Get Started (Installation)
```javascript
>_ composer require cavidel/cavilock
```

### App Configuration (Providers)
Locate the laravel config/app.php and add the following below
```javascript

'providers' => [
	...
	Cavidel\Cavilock\CavilockServiceProvider::class,
]


'aliases' => [
	...
	'Cavilock' => Cavidel\Cavilock\Facades\Cavilock::class,
]
	
```

Next is to clear compiled class, run the following command.
``` 
>_ composer dump-autoload
```

### How to use (Middleware)
```javascript
$verify = new Cavilock::verify();
if($verify["status"] == true){
    // return 
    return closure($request);
}else{
	// do other cool stuff
	
}
```
