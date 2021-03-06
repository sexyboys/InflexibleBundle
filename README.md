InflexibleBundle  [![Build Status](https://travis-ci.org/sexyboys/InflexibleBundle.png?branch=master)](https://travis-ci.org/sexyboys/InflexibleBundle)
=======================

Table of contents
-----------------

1. [Description](#description)
2. [Installation](#installation)
3. [Usage](#usage)
  1. [Datetime](#datetime)
    1. [Relative](#relative)
  2. [Number](#number)
    1. [HumanByte](#humanbyte)
    2. [Ordinalize](#ordinalize)
    3. [Shorten](#shorten)
    4. [Textualize](#textualize)
  3. [String](#string)
    1. [Camelize](#camelize)
    2. [Denamespace](#denamespace)
    3. [Humanize](#humanize)
    4. [NamespaceOnly](#namespaceonly)
    5. [Slugify](#slugify)
    6. [Shorten](#shorten-string)
    7. [Pluralize](#pluralize)
    8. [Singularize](#singularize)
    9. [Tableize](#tableize)
4. [Run the test](#run-the-test)
5. [Contributing](#contributing)
6. [Requirements](#requirements)
7. [Authors](#authors)
8. [License](#license)

Description
-----------

InflexibleBundle provides a bridge between Symfony2 and Inflexible library which aims to gather a collection of commonly used Inflectors into a single lib.
It provides twig extensions too.

Installation
------------

Using [Composer](http://getcomposer.org/), just `$ composer require sexyboys/inflexiblebundle` package or:

``` javascript
{
  "require": {
    "sexyboys/inflexiblebundle": "dev-master"
  }
}
```

Define the bundle inside your AppKernel.php file


```php
new Sexyboys\InflexibleBundle\SexyboysInflexibleBundle()
```

Usage
-----

To use it, just call the service named "inflexible" which provides all functions of Inflexible library.

##Datetime

### Relative
Convert a `DateTime` object or a number of seconds into the most fitted unit:

#### Php
```php
$this->container->get('inflexible')->relativeDatetime(86400);
```
#### Twig
```twig
86400|relative_datetime
```

Returns

```php
array(
    1,
    'day'
)
```

You may also want to get the relative datetime from a given date:

#### Php
```php
$this->container->get('inflexible')->relativeDatetime(new DateTime('2012-01-10'), new DateTime('2012-01-17'));
```
#### Twig
```twig
post.firstDate|relativeDatetime(post.secondDate)
```

Returns

```php
array(
    1,
    'week'
)
```

The available units are:

* second
* minute
* hour
* day
* week
* month
* year

## Number

### HumanByte

Convert bytes to an human readable representation to the most fitted unit:

#### Php
```php
$this->container->get('inflexible')->humanByte(1024);
// 1.00 KB
```

```php
$this->container->get('inflexible')->humanByte(1048576);
// 1.00 MB
```

```php
$this->container->get('inflexible')->humanByte(1073741824);
// 1.00 GB
```
#### Twig
```twig
1024|human_byte
```

You may also provided an optional precision as a second argument (default to 2)

### Ordinalize

Converts number to its ordinal English form:

#### Php
```php
$this->container->get('inflexible')->ordinalize(1);
// 1st
```

```php
$this->container->get('inflexible')->ordinalize(13);
// 13th
```
#### Twig
```twig
13|ordinalize
```

### Shorten

Formats a number using the SI units (k, M, G, etc.):

#### Php
```php
$this->container->get('inflexible')->shorten(100);
// array(100, null)
// No units for number < 1000
```

```php
$this->container->get('inflexible')->shorten(1523);
// 1k
```
#### Twig
```twig
1523|shorten_number
```

### Textualize

Returns the textual representation of a number

#### Php
```php
$this->container->get('inflexible')->textualize(1025433);
// One Million, Twenty Five Thousand, Four Hundred and Thirty Three
```
#### Twig
```twig
1025433|textualize
```


## String

### Camelize

Converts a word like "foo_bar" to "FooBar".
It also removes non-alphanumeric characters:

#### Php
```php
$this->container->get('inflexible')->camelize('foo_bar');
// FooBar
```
#### Twig
```twig
'foo_bar'|camelize
```

### Denamespace

Returns only the class name

#### Php
```php
$this->container->get('inflexible')->denamespace('\Foo\Bar\Baz');
// Baz
```
#### Twig
```twig
'\Foo\Bar\Baz'|denamespace
```

### Humanize

Converts CamelCased word and underscore to space to return a readable string:

#### Php
```php
$this->container->get('inflexible')->humanize('foo_bar');
// Foo Bar
```

```php
$this->container->get('inflexible')->humanize('FooBar');
// Foo Bar
```
#### Twig
```twig
'FooBar'|humanize
```

### NamespaceOnly

Returns the namespace of a fully qualified class name:

#### Php
```php
$this->container->get('inflexible')->namespaceOnly('\Foo\Bar\Baz');
// Foo\Bar
```
#### Twig
```twig
'\Foo\Bar\Baz'|namespace_only
```

### Slugify

Slugify a string:

#### Php
```php
$this->container->get('inflexible')->slugify('lo\rem ipsum do|or sid amet||| #\`[|\" 10 .');
// lo-rem-ipsum-do-or-sid-amet-10
```
#### Twig
```twig
'lo\rem ipsum do|or sid amet||| #\`[|\" 10 .'|slugify
```

You may optionally set the separator, a max length or decide to whether lower the case:

#### Php
```php
$this->container->get('inflexible')->slugify(
    'LoRem ipsum do|or sid amet||| #\`[|\" 10 .',
    array(
        'maxlength' => 4,
        'lowercase' => true,
        'separator' => '_'
    )
);
// lore
```
#### Twig
```twig
'lo\rem ipsum do|or sid amet||| #\`[|\" 10 .'|slugify(options)
```

### Shorten

Shorten a string using the options such as the maximum length, affix and its position:

#### Php
```php
$this->container->get('inflexible')->shorten("Lorem ipsum dolor sit amet",5,Shorten::AFFIX_POSITION_START);
```
#### Twig
```twig
"Lorem ipsum dolor sit amet"|shorten_string(5,'start')
```

### Pluralize

Returns a word in plural form:

#### Php
```php
$this->container->get('inflexible')->pluralize("child");
//children
```
#### Twig
```twig
"child"|pluralize
```

### Singularize

Returns a word in singular form:

#### Php
```php
$this->container->get('inflexible')->singularize("children");
//child
```
#### Twig
```twig
"children"|singularize
```

### Tableize

Converts a word into the format for a Doctrine table name:

#### Php
```php
$this->container->get('inflexible')->tableize("ModelName");
//model_name
```
#### Twig
```twig
"ModelName"|tableize
```

Run the test
------------

First make sure you have installed all the dependencies, run:

`$ composer install --dev`

then, run the test from within the root directory:

`$ phpunit`

Contributing
------------

1. Take a look at the [list of issues](http://github.com/sexyboys/InflexibleBundle/issues).
2. Fork
3. Write a test (for either new feature or bug)
4. Make a PR

Requirements
------------

* PHP 5.3+
* Symfony 2

Authors
-------

Boris Guéry - <guery.b@gmail.com> - <http://twitter.com/borisguery> - <http://borisguery.com>

Eric Pidoux - <eric.pidoux@gmail.com> - <http://twitter.com/epidoux> - <http://eric-pidoux.com>

License
-------

`InflexibleBundle` is licensed under the WTFPL License - see the LICENSE file for details
