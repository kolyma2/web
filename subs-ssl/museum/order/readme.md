<h1>
  <a href="https://foodforcoins.org/" target="blank">Food For Coins</a>
</h1>
  
  <p>The frontend and backend software for Food For Coins built on the <a href="https://laravel.com/" target="blank">Laravel</a> <a href="https://www.php.net/" target="blank">PHP</a> framework.</p>

## Installation

```bash
$ composer install
```
Your development server (e.g. Apache, Nginx, Httpd) should point to `/public`. Please make sure your `.env` file is present in the root directory.
Please use this template to create your `.env` file:

```
APP_ENV=local
APP_NAME="Application Name"
APP_KEY="base64"
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL="Application URL"

DB_CONNECTION=mysql
DB_PORT=3306
DB_HOST=localhost
DB_DATABASE="Database"
DB_USERNAME="Username"
DB_PASSWORD="Password"

BROADCAST_DRIVER=pusher
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=database

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST="SMTP Host"
MAIL_PORT=587
MAIL_USERNAME="SMTP Username"
MAIL_PASSWORD="SMTP Password"
MAIL_ENCRYPTION=tls

PUSHER_APP_ID="Pusher APP ID"
PUSHER_APP_KEY="Pusher APP KEY"
PUSHER_APP_SECRET="PUSHER APP SECRET"
PUSHER_APP_CLUSTER=DE1

CRYPTO_KEY="CRYPTO KEY"
CRYPTO_IV="CRYPTO IV"
```


## License

  Food For Coins is [MIT licensed](https://git.dotmanaged.eu/foodforcoins/website-php/blob/master/LICENSE).
