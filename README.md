# Shortener Link

Api for short your link with laravel

## Installation
Clone the repository and follow the stpes

```bash
composer install
```
```bash
php artian migrate
```
```bash
php artisan serve
```

## Apis

```
# Get top 100 most viseted urls
(GET) /top-one-hundred 

# Redirect url with code
(GET) /{code} 

# Formdata with url and code params to creat a short url
(POST) /shortUrl
```


