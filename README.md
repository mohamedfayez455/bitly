# bitly Package

bitly Package used Shorten Long Urls Using Bitly Api

# to install run this command 

composer require mohamedfayez/bitly

# then publish vendor throw this command 

php artisan vendor:publish --tag="bitlyConfig"

# to use Bitly


use Bitly;

Route::get('/', function () {

    return Bitly::shorten('https://www.youtube.com/watch?v=yThuwsKIFm8&list=PLQGB1EXRExDCsLSm9UjwomIOkf76CGsK3&index=2');

});


the static method shorten accept one paramter with url you want to shorten
