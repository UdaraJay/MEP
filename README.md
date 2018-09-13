# [Minimal Email Parser](https://github.com/UdaraJay/MEP) (MEP)
[![Build Status](https://travis-ci.org/UdaraJay/MEP.svg?branch=master)](https://travis-ci.org/UdaraJay/MEP) 
[![Latest Stable Version](https://poser.pugx.org/udarajay/mep/version)](https://packagist.org/packages/udarajay/mep)
[![Total Downloads](https://poser.pugx.org/udarajay/mep/downloads)](https://packagist.org/packages/udarajay/mep)
[![License](https://poser.pugx.org/udarajay/mep/license)](https://packagist.org/packages/udarajay/mep)

A minimal PHP library for parsing RAW emails (rfc2822).

## Motivation
Creating the simplest possible parser for taking a raw email and converting it to a simple
decoded object with easily accessible headers and body parts (threaded emails) that
can be rendered beautifully. 
  
## Installation
The recommended way to install MEP is through [Composer](https://getcomposer.org/):
```
composer require udarajay/mep
```

## Usage
```php
require 'vendor/autoload.php';

use UJ\MEP\EmailParser;

// Init by passing in a raw email as a string
$parser = EmailParser::parse($raw); 

// Access un-parsed parts
$parser->getRaw();
$parser->getBody();
$parser->getHeaders();

// Parsed header content
$parser->getMessageId();
$parser->getFrom();
$parser->getTo();
$parser->getSubject();
$parser->getDeliveredTo();
$parser->getContentType();
$parser->getContentLanguage();
$parser->getMimeVersion();

// Parsed fragments (Message parts)
$fragments = $parser->getFragments();
```


## Todo
- [x] Parse headers with fallback
- [ ] Parse HTML body in fragments with fallback to Text
- [ ] Generate raw email (threaded) messages for Gmail
