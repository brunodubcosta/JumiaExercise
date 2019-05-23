# JumiaExercise
This project is a Single Page Application that lists phone numbers from a sample database and filters by country and if it is valid or not.

 [![Table](https://i.imgur.com/qAGLUjd.png)](https://i.imgur.com/qAGLUjd.png)

## Installation
- On the folder 'JumiaExercise/app/' run the following code:
```sh
$ composer install
```

## Run App
- On the folder 'JumiaExercise/' run the following code:
```sh
$ docker-compose up --build
```
> After running those comands you now can open the browser and go to : - http://localhost:8100/

## Unit-Testing

### Testing CustomerHelperTest
- On the folder 'JumiaExercise/' run the following code:
```sh
$ ./app/vendor/bin/phpunit --bootstrap app/vendor/autoload.php app/src/tests/helpers/CustomerHelperTest
```
### Testing CustomerFactoryTest
- On the folder 'JumiaExercise/' run the following code:
```sh
$ ./app/vendor/bin/phpunit --bootstrap app/vendor/autoload.php app/src/tests/factories/CustomerFactoryTest
```
## Used Technologies
- Php 7.2
- Sqlite 3
- PhpUnit 7
- Bootstrap 4
