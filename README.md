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
<img src="https://avatars0.githubusercontent.com/u/29509136?v=3&s=150" />
</p>

## Description

Dazzle Event provides classes to implement event-based architecture in any application.

## Feature Highlights

Event features:

* Support for working with events, dispatchers and handlers,
* Support for asynchronous events using loop,
* Built-in event handlers,
* Built-in expanded interfaces for attaching listeners and managing events propagation,
* ...and more.

## Requirements

* PHP-5.6 or PHP-7.0+,
* UNIX or Windows OS.

## Installation

```
$> composer require dazzle-php/event
```

## Tests

```
$> vendor/bin/phpunit -d memory_limit=1024M
```

## Contributing

Thank you for considering contributing to this repository! The contribution guide can be found in the [contribution tips][1].

## License

Dazzle Framework is open-sourced software licensed under the [MIT license][2].

[1]: https://github.com/dazzle-php/event/blob/master/CONTRIBUTING.md
[2]: http://opensource.org/licenses/MIT
