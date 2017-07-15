# Dazzle Events & Dispatchers

[![Build Status](https://travis-ci.org/dazzle-php/event.svg)](https://travis-ci.org/dazzle-php/event)
[![Code Coverage](https://scrutinizer-ci.com/g/dazzle-php/event/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/dazzle-php/event/?branch=master)
[![Code Quality](https://scrutinizer-ci.com/g/dazzle-php/event/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dazzle-php/event/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/dazzle-php/event/v/stable)](https://packagist.org/packages/dazzle-php/event) 
[![Latest Unstable Version](https://poser.pugx.org/dazzle-php/event/v/unstable)](https://packagist.org/packages/dazzle-php/event) 
[![License](https://poser.pugx.org/dazzle-php/event/license)](https://packagist.org/packages/dazzle-php/event/license)

> **Note:** This repository is part of [Dazzle Project](https://github.com/dazzle-php/dazzle) - the next-gen library for PHP. The project's purpose is to provide PHP developers with a set of complete tools to build functional async applications. Please, make sure you read the attached README carefully and it is guaranteed you will be surprised how easy to use and powerful it is. In the meantime, you might want to check out the rest of our async libraries in [Dazzle repository](https://github.com/dazzle-php) for the full extent of Dazzle experience.

<br>
<p align="center">
<img src="https://raw.githubusercontent.com/dazzle-php/dazzle/master/media/dazzle-x125.png" />
</p>

## Description

Dazzle Event is a library which purpose is to provide all of the tools that are required to implement event-based architecture in any application. It delivers classes and interfaces designed specifically for that exact purpose and is designed to be easy to work with, efficient and effective.

## Feature Highlights

Dazzle Event features:

* Support for working with events, event-dispatchers and event-handlers,
* Support for synchronous events,
* Support for asynchronous events using loop,
* Built-in event handlers,
* Built-in expanded interfaces for attaching listeners and managing events propagation,
* ...and more.

## Provided Example(s)

### Quickstart

```php
use Dazzle\Event\EventEmitter;

$emitter = new EventEmitter();

$emitter->on('script.start', function($user, $time) {
    echo "User '$user' has started this script at $time.\n";
});

$emitter->emit('script.start', [ get_current_user(), date('H:i:s Y-m-d') ]);
```

### Additional

Additional examples can be found in [example](https://github.com/dazzle-php/event/tree/master/example) directory. Below is the list of provided examples as a reference and preferred consumption order:

- [Quickstart](https://github.com/dazzle-php/event/blob/master/example/events_quickstart.php)
- [Using multiple listeners](https://github.com/dazzle-php/event/blob/master/example/events_handlers_multiple.php)
- [Using disposable (one-time) listeners](https://github.com/dazzle-php/event/blob/master/example/events_handlers_disposable.php)
- [Using delayed listeners](https://github.com/dazzle-php/event/blob/master/example/events_handlers_delayed.php)
- [Using exact (multiple-times) listeners](https://github.com/dazzle-php/event/blob/master/example/events_handlers_exact.php)
- [Using mixed listeners](https://github.com/dazzle-php/event/blob/master/example/events_handlers_mixed.php)
- [Cancelling](https://github.com/dazzle-php/event/blob/master/example/events_cancelling.php)
- [__Advanced:__ Asynchronous event-emitters](https://github.com/dazzle-php/event/blob/master/example/advanced_async_emitters.php)
- [__Advanced:__ Copying events](https://github.com/dazzle-php/event/blob/master/example/advanced_flow_copying_events.php)
- [__Advanced:__ Forwarding events](https://github.com/dazzle-php/event/blob/master/example/advanced_flow_forwarding_events.php)
- [__Advanced:__ Chaining events propagation](https://github.com/dazzle-php/event/blob/master/example/advanced_flow_chaining.php)
- [__Advanced:__ Switching propagation modes of event-emitters](https://github.com/dazzle-php/event/blob/master/example/advanced_flow_switching_modes.php)

If any of the above examples has left you confused, please take a look in the [tests](https://github.com/dazzle-php/event/tree/master/test) directory as well.

## Requirements

Dazzle Event requires:

* PHP-5.6 or PHP-7.0+,
* UNIX or Windows OS.

## Installation

To install this library make sure you have [composer](https://getcomposer.org/) installed, then run following command:

```
$> composer require dazzle-php/event
```

## Tests

Tests can be run via:

```
$> vendor/bin/phpunit -d memory_limit=1024M
```

## Contributing

Thank you for considering contributing to this repository! The contribution guide can be found in the [contribution tips](https://github.com/dazzle-php/event/blob/master/CONTRIBUTING.md). Open tickets can be found in [issues section](https://github.com/dazzle-php/event/issues). To contact the author(s) see the information attached in [composer.json](https://github.com/dazzle-php/event/blob/master/composer.json) file.

## License

Dazzle Framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

<hr>
<p align="center">
<i>"Everything is possible. The impossible just takes longer."</i> ― Dan Brown
</p>
