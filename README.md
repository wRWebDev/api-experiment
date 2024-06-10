# BED Test

## Instructions

This test requires a Laravel PHP development environment running version PHP 8.2 or above. Laravel Sail is installed by default so you are able to utilise Docker.

Install required dependencies by running `composer install`. Then start the project by running `./vendor/bin/sail up`. The script will start the full development environment including database.

## Development Service

You will find an interface called `DevelopmentServiceInterface` with a corresponding implementation called `EloquentDevelopmentService`. This service is responsible for fetching the properties from the data source.

There is automated tests which validate the functionality of the given interface/service implementation. These are located in `DevelopmentServiceInterfaceTest`. Currently, this test fails.

Update the code in the project to make the test pass. You are free to make any changes to the codebase to achieve this.

## Development API

A functional requirement is to create an API endpoint which returns a list of developments (including filtering for a given postcode). The tests and implementation are not provided.

Please implement using the Laravel framework. You are free to structure the code as you see fit but you should utilise the `DevelopmentServiceInterface` to fetch the data.

### `GET /developments`

Returns all developments as a list, which looks like:

```json
[
    {
        "id": 73864112,
        "name": "Buckingham Palace",
        "postcode": "SW1A 1AA"
    },
    {
        ...
    }
]
```

#### Filter and sort the result set

In order to filter and sort the result, please the supply relevant query parameters. (e.g. `http://localhost/api/developments?postcode=SW1A%201AA`)

| parameter | description                               |
|-----------|-------------------------------------------|
| postcode  | The postcode to search for (eg. SW1A 1AA) |

**NOTE** Supplying invalid query parameter (empty, null or undefined) will return an empty list. Please omit query parameters without any value.
