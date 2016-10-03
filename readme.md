# Bee Ready! API

## install
for local development
```
$ git clone https://github.com/wimjjj/bee-ready-api
$ cd bee-ready-api
$ composer install
$ touch database/database.sqlite
$ mv env.example .env
```

edit the following line in .env as follow:
```
DB_CONNECTION=mysql -> DB_CONNECTION=sqlite
```

## run
```
$ php artisan serve
```

## API routes

### Show Plants
```
/api/plants/{ofset?}
```
* method: GET
* parameters: ofset [integer] [optional]
* returns: array of 10 plants

### Store Scan
```
/api/scan
```
* method: POST
* parameters
  * POST:
  * plant_id [integer]
  * longitude [integer]
  * latitude [integer]
* returns: new scan

