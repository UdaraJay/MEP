# [Minimal Email Parser](https://github.com/UdaraJay/MEP) (MEP)
[![Build Status](https://travis-ci.org/UdaraJay/MEP.svg?branch=master)](https://travis-ci.org/UdaraJay/MEP) 
[![Latest Stable Version](https://poser.pugx.org/udarajay/mep/version)](https://packagist.org/packages/udarajay/mep)
[![Total Downloads](https://poser.pugx.org/udarajay/mep/downloads)](https://packagist.org/packages/udarajay/mep)
[![License](https://poser.pugx.org/udarajay/mep/license)](https://packagist.org/packages/udarajay/mep)

**Work in progress.** 

A minimal PHP library for parsing RAW emails (rfc2822).

## Status
Currently works well with Gmail emails. It's able to get you useful header information 
and parse the HTML body of an email. 

## Installation
The recommended way to install MEP is through [Composer](https://getcomposer.org/):
```
composer require udarajay/mep
```

## Todo
- [ ] Parse headers with fallback
- [ ] Parse HTML body with fallback to Text
- [ ] Generate raw email (threaded) messages for Gmail
