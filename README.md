[![Scientist](scientist.png)](https://github.com/daylerees/scientist)

# Scientist for Symfony

[![Packagist Version](https://img.shields.io/packagist/v/danhanly/scientist-symfony.svg)](https://packagist.org/packages/danhanly/scientist-symfony)
[![Packagist](https://img.shields.io/packagist/dt/danhanly/scientist-symfony.svg)](https://packagist.org/packages/danhanly/scientist-symfony)

Allow the [Scientist library](https://github.com/daylerees/scientist) to be used with [Symfony](https://symfony.com/).

## Installation

Require the latest version of Scientist Symfony using [Composer](https://getcomposer.org/).

    composer require danhanly/scientist-symfony

Register the bundle in your AppKernel.

```php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            ...
            new DanHanly\ScientistBundle\ScientistBundle()
        ];
        ...
    }
}
```

## Usage

You can access Scientist from any Container Aware Class.

```php
$scientist = $this->container->get('scientist');
```

From this point, you can use the library as normal within your processes.

```php

$scientist->experiment('my experiment')
    ->control($controlCallback)
    ->trial('trial name', $trialCallback);

$value = $experiment->run();

```

