# JumiaExercise
This project is a Single Page Application that lists phone numbers from a sample database and filters by country and if it is valid or not.
[![Table](https://i.imgur.com/qAGLUjd.png)](https://i.imgur.com/qAGLUjd.png)

## Installation

```bash
$ composer install
$ docker-compose up
```
> After running those comands you now can open the browser and go to : - http://localhost:8100/

## Unit-Testing

### Testing CustomerHelperTest
- On the project root run:
```sh
$ ./app/vendor/bin/phpunit --bootstrap app/vendor/autoload.php app/src/tests/helpers/CustomerHelperTest
```
### Testing CustomerFactoryTest
- On the project root run:
```sh
$ ./app/vendor/bin/phpunit --bootstrap app/vendor/autoload.php app/src/tests/factories/CustomerFactoryTest
```
## Used Technologies
- Php 7.2
- Sqlite 3
- PhpUnit 7
- Bootstrap 4
