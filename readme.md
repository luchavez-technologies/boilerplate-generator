# Fligno Packager & Boilerplate Generator for Laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

<center><img src="./images/logo.png" width="300"/></center>

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

```bash
$ composer req fligno/boilerplate-generator --dev
$ php artisan bg:install
```

## Usage

### List of `bg:package` commands

| Name            | Command              | Description                                                                        |
|-----------------|----------------------|------------------------------------------------------------------------------------|
| Package List    | `bg:package:list`    | List all locally installed packages.                                               |
| Package Create  | `bg:package:create`  | Create a new Laravel package.                                                      |
| Package Remove  | `bg:package:remove`  | Remove a Laravel package.                                                          |
| Package Enable  | `bg:package:enable`  | Enable a Laravel package.                                                          |
| Package Disable | `bg:package:disable` | Disable a Laravel package.                                                         |
| Package Clone   | `bg:package:clone`   | Clone a Laravel package using Git.                                                 |
| Package Publish | `bg:package:publish` | Publish a Laravel package using Git.                                               |

### List of `bg:domain` commands

| Name           | Command             | Description                         |
|----------------|---------------------|-------------------------------------|
| Domain List    | `bg:domain:list`    | List all locally installed domains. |
| Domain Create  | `bg:domain:create`  | Create a new Laravel domain.        |
| Domain Enable  | `bg:domain:enable`  | Enable a Laravel domain.            |
| Domain Disable | `bg:domain:disable` | Disable a Laravel domain.           |

### List of `bg:make` commands

| Type         |        Command         | Laravel Counterpart | Description                                                                  |
|--------------|:----------------------:|:-------------------:|:-----------------------------------------------------------------------------|
| Cast         |     `bg:make:cast`     |     `make:cast`     | Create a new custom Eloquent cast class in Laravel or in a specific package. |
| Channel      |   `bg:make:channel`    |   `make:channel`    | Create a new channel class in Laravel or in a specific package.              |
| Class        |    `bg:make:class`     |                     | Create a new PHP class in Laravel or in a specific package.                  |
| Command      |   `bg:make:command`    |   `make:command`    | Create a new Artisan command in Laravel or in a specific package.            |
| Component    |  `bg:make:component`   |  `make:component`   | Create a new view component class in Laravel or in a specific package.       |
| Config       |    `bg:make:config`    |                     | Create a new view component class in Laravel or in a specific package.       |
| Container    |  `bg:make:container`   |                     | Create a new service container in Laravel or in a specific package.          |
| Controller   |  `bg:make:controller`  |  `make:controller`  | Create a new controller class in Laravel or in a specific package.           |
| Data         |     `bg:make:data`     |                     | Create a new data class in Laravel or in a specific package.                 |
| Docs         |      `bg:make:df`      |                     | Create a new data factory class in Laravel or in a specific package.         |
| Event        |    `bg:make:event`     |    `make:event`     | Create a new event class in Laravel or in a specific package.                |
| Exception    |  `bg:make:exception`   |  `make:exception`   | Create a new custom exception class in Laravel or in a specific package.     |
| Facade       |    `bg:make:facade`    |                     | Create a new facade in Laravel or in a specific package.                     |
| Factory      |   `bg:make:factory`    |   `make:factory`    | Create a new model factory in Laravel or in a specific package.              |
| Gitlab CI    |    `bg:make:gitlab`    |                     | Create a Gitlab CI YML file in a specific package.                           |
| Helper       |    `bg:make:helper`    |                     | Create a new helper file in Laravel or in a specific package.                |
| Interface    |  `bg:make:interface`   |                     | Create a new interface in Laravel or in a specific package.                  |
| Job          |     `bg:make:job`      |     `make:job`      | Create a new job class in Laravel or in a specific package.                  |
| Interface    |  `bg:make:interface`   |                     | Create a new interface in Laravel or in a specific package.                  |
| Listener     |   `bg:make:listener`   |   `make:listener`   | Create a new event listener class in Laravel or in a specific package.       |
| Mail         |     `bg:make:mail`     |     `make:mail`     | Create a new email class in Laravel or in a specific package.                |
| Middleware   |  `bg:make:middleware`  |  `make:middleware`  | Create a new middleware class in Laravel or in a specific package.           |
| Migration    |  `bg:make:migration`   |  `make:migration`   | Create a new migration file in Laravel or in a specific package.             |
| Model        |    `bg:make:model`     |    `make:model`     | Create a new Eloquent model class in Laravel or in a specific package.       |
| Notification | `bg:make:notification` | `make:notification` | Create a new notification class in Laravel or in a specific package.         |
| Observer     |   `bg:make:observer`   |   `make:observer`   | Create a new observer class in Laravel or in a specific package.             |
| Policy       |    `bg:make:policy`    |    `make:policy`    | Create a new policy class in Laravel or in a specific package.               |
| Provider     |   `bg:make:provider`   |   `make:provider`   | Create a new service provider class in Laravel or in a specific package.     |
| Repository   |  `bg:make:repository`  |                     | Create a new repository class in Laravel or in a specific package.           |
| Request      |   `bg:make:request`    |   `make:request`    | Create a new form request class in Laravel or in a specific package.         |
| Resource     |   `bg:make:resource`   |   `make:resource`   | Create a new resource file in Laravel or in a specific package.              |
| Routes       |    `bg:make:routes`    |                     | Create web and/or api route files in a specific package.                     |
| Rule         |     `bg:make:rule`     |     `make:rule`     | Create a new validation rule in Laravel or in a specific package.            |
| Seeder       |    `bg:make:seeder`    |    `make:seeder`    | Create a new seeder class in Laravel or in a specific package.               |
| Test         |     `bg:make:test`     |     `make:test`     | Create a new test class in Laravel or in a specific package.                 |
| Trait        |    `bg:make:trait`     |                     | Create a new interface in Laravel or in a specific package.                  |

### Other `bg` commands

| Name            | Command              | Description                                                                        |
|-----------------|----------------------|------------------------------------------------------------------------------------|
| Package List    | `bg:package:list`    | List all locally installed packages.                                               |
| Package Create  | `bg:package:create`  | Create a new Laravel package.                                                      |

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

There would be 2 Packages inside your Laravel Project:
```boilerplate-generator``` and ```<dummy package you will create>```.

1. Create a Dummy Package for Testing:
    ```bash 
    $ php artisan fligno:package:create Dummy Package
    ```

2. Proceed to Testing
    ``` bash
    $ php artisan fligno:test
    ```
    or
    ``` bash
    $ php artisan fligno:test -p
    ```

    It would probably be the same as below
    ``` bash
    Choose target package [Laravel]:
    
    [0] Laravel
    [1] dummy/package
    [2] fligno/boilerplate-generator
    ```
    Choose the ```dummy/package``` you created earlier by entering its corresponding number. In this case, ```[1]```.

3. Wait for the Test to Finish. To further verify, your ```dummy/package``` Package should contain "Random"-named Files including ```Class```, ```Event```, ```Route```, etc.

4. Upon successful testing, you can now remove the Dummy Package you create by using
   ``` bash
    $ php artisan fligno:package:remove Dummy Package
    ```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email jamescarloluchavez@gmail.com instead of using the issue tracker.

## Credits

- [James Carlo Luchavez][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/fligno/boilerplate-generator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/fligno/boilerplate-generator.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/fligno/boilerplate-generator/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/fligno/boilerplate-generator
[link-downloads]: https://packagist.org/packages/fligno/boilerplate-generator
[link-travis]: https://travis-ci.org/fligno/boilerplate-generator
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/luhmewep
[link-contributors]: ../../contributors
