# Cavilock
Cavilock helps developer's or software providers monitor their application status and fire a lock event when subscription elapsed

## Get Started (Installation)
```javascript
>_ composer require cavidel/cavilock

$verify = new Cavilock::verify();
if($verify == true){
    // return 
    return closure($request);
}
```


