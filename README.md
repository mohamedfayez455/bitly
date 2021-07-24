# bitly Package

bitly Package used Shorten Long Urls Using Bitly Api

# to install run this command 

composer require mohamedfayez/bitly

# then publish vendor throw this command 

php artisan vendor:publish --tag="bitlyConfig"

# to use Bitly


use Bitly;

Route::get('/', function () {

    return Bitly::shorten('https://web.facebook.com');

});


the static method shorten accept one paramter the url you want to shorten
