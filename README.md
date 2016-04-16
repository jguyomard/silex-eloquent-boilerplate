# Silex 2 with Eloquent - Boilerplate

This boilerplate is a fully functional [Silex](http://silex.sensiolabs.org/) Application. You can use it for your new applications.

This boilerplate is configured with Eloquent ORM Service Provider (instead of Doctrine, for instance) and Twig.
It also comes with Gulp to build js/sass files (but you can find a version without gulp on [`master/no-npm`](https://github.com/jguyomard/silex-eloquent-boilerplate/tree/master/no-npm) branch if you prefer).


**Note:** I only make this boilerplate for my quick and fun projects.
It's configured with Silex 2.0@**dev**. Use it at your own risk.

## Code Organization

I like organizing my app in terms of features.
For instance, all Controllers/Repositories/Entities/Tests/Views and CSS/JS related to the "Blog" module can be found in `./src/Blog` directory tree.

Config is in `./config` directory.

## Creating a new Silex Application

```
composer create-project jguyomard/silex-eloquent-boilerplate ./myapp 2.0.x-dev
cd ./myapp
```

## Running

Create a sql database, import `boilerplate.sql` and update `./config/dev.config.php` width information required to connect to the database. With mysql:
```
mysql -u ... < boilerplate.sql
vi ./config/dev.config.php
```

To build js/sass files:
```
npm install
gulp build
```

To run this app with PHP built-in web server:
```
APP_ENV=dev php -S localhost:8080 -t web/ web/index.php
```

## About this boilerplate

This Silex Boilerplate is configured with:

### Service Providers

* [CapsuleServiceProvider](http://github.com/jguyomard/silex-capsule-eloquent/) (~2.0@dev)
* [TwigServiceProvider](http://silex.sensiolabs.org/doc/providers/twig.html)
* [UrlGeneratorServiceProvider](http://silex.sensiolabs.org/doc/providers/url_generator.html)
* [ServiceControllerServiceProvider](http://silex.sensiolabs.org/doc/providers/service_controller.html)
* [HttpFragmentServiceProvider](http://silex.sensiolabs.org/doc/providers/http_fragment.html)
* [WebProfilerServiceProvider](https://github.com/silexphp/Silex-WebProfiler) (~2.0@dev)
* [DebugServiceProvider](https://github.com/jeromemacias/Silex-Debug) (~2.0@dev)
* [MonologServiceProvider](http://silex.sensiolabs.org/doc/providers/monolog.html)


### Front-End

This *Gulp version* is also configured with :

* [gulp](https://www.npmjs.com/package/gulp)
* [gulp-sass](https://www.npmjs.com/package/gulp-sass)
* [gulp-concat](https://www.npmjs.com/package/gulp-concat)
* [gulp-uglify](https://www.npmjs.com/package/gulp-uglify)
* [gulp-sourcemaps](https://www.npmjs.com/package/gulp-sourcemaps)
* [browser-sync](https://www.npmjs.com/package/browser-sync)

You can run :

```
gulp build                  // to build js/sass files with sourcemaps
gulp build --production     // to build js/sass files
gulp watch                  // to watch for files changes
```

## Testing

To run the test suite, you need [PHPUnit](https://phpunit.de/):

```
phpunit
```

## Issues

If you have any problems with or questions about this boilerplate, please contact me through a [GitHub issue](https://github.com/jguyomard/silex-eloquent-boilerplate/issues).
If the issue is related to Silex itself, or any configured packages, please leave an issue on their official repository.


## Contributing

You are invited to contribute new features, fixes or updates to this container, through a [Github Pull Request](https://github.com/jguyomard/silex-eloquent-boilerplate/pulls).
