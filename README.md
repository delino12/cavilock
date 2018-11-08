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
if($verify == true){
    // return 
    return closure($request);
}
```
