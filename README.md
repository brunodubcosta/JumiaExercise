# JumiaExercise
This project is a Single Page Application that lists phone numbers from a sample database and filters by country and if it is valid or not.

## Installation

```bash
Composer install
Docker-compose up
```



## Unit-Testing

### Testing CustomerHelperTest
- On the project root run:
```bash
./app/vendor/bin/phpunit --bootstrap app/vendor/autoload.php app/src/tests/helpers/CustomerHelperTest
```
### Testing CustomerFactoryTest
- On the project root run:
```bash
./app/vendor/bin/phpunit --bootstrap app/vendor/autoload.php app/src/tests/factories/CustomerFactoryTest
```
