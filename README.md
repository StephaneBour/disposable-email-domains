# Disposable Email Domains list
[![Build Status](https://travis-ci.org/StephaneBour/disposable-email-domains.svg?branch=master)](https://travis-ci.org/StephaneBour/disposable-email-domains)

A simple list of domain names of disposable emails. The list contains **184 904** domain names.

## Installation

```
composer require stephanebour/disposable-email-domains
```

## How to use

retrieve the list as an array :

```php
$domains = \StephaneBour\Disposable\Domains::all();
```

Check if the domain of an email is in the list:

```php
if(\StephaneBour\Disposable\Domains::isDisposable('coucou@yopmail.com'))
{
    die('go away');
}
```
