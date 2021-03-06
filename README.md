# bitesquad

### Installation

You can follow the next steps to configure and run the project

```sh
$ git clone git@github.com:jbetanzos/bitsquad-c.git
$ cd bitsquad-c
```

Create a .env file using 

```sh
$ vi .env
```

Place the following content
```sh
APP_ENV=dev
```

Continue installing the dependencies
```sh
$ php composer.phar install
```

Finally run the local server
```sh
$ php bin/console server:run
```
### Testing

Verify the application by navigating to your server address in your preferred browser.

```sh
http://127.0.0.1:8000/1/101
```

In order to check the Unit Testing and coverage report you can run the following command 
```sh
$ ./bin/phpunit --coverage-html ./tests/Report
```

Output sample
```sh
[
    {
        "number": 1,
        "toString": 1
    },
    .
    .
    .
    {
        "number": 3,
        "toString": "Multipli"
    },
    {
        "number": 4,
        "toString": 4
    },
    {
        "number": 5,
        "toString": "IT"
    },
    .
    .
    .
    {
        "number": 15,
        "toString": "Multiplianos"
    },
    {
        "number": 16,
        "toString": 16
    },
    .
    .
    .
]
```

### Heroku Server
You can check the implementation in a Heroku (free) app in the following link

```sh
https://app-bitsquad-c.herokuapp.com/1/101
```
