SQL query builder
=================

[![Latest Stable Version](https://poser.pugx.org/professionalweb/query-builder/v/stable)](https://packagist.org/packages/professionalweb/query-builder)
[![Build Status](https://travis-ci.org/SergioMadness/query-builder.svg?branch=dev)](https://travis-ci.org/SergioMadness/query-builder)
[![Code Climate](https://codeclimate.com/github/SergioMadness/query-builder/badges/gpa.svg)](https://codeclimate.com/github/SergioMadness/query-builder)
[![Coverage Status](https://coveralls.io/repos/github/SergioMadness/query-builder/badge.svg?branch=dev)](https://coveralls.io/github/SergioMadness/query-builder?branch=dev)
[![Dependency Status](https://www.versioneye.com/user/projects/57581c1a7757a00034dc4a5e/badge.svg?style=flat)](https://www.versioneye.com/user/projects/57581c1a7757a00034dc4a5e)
[![License](https://poser.pugx.org/professionalweb/query-builder/license)](https://packagist.org/packages/professionalweb/query-builder)
[![Latest Unstable Version](https://poser.pugx.org/professionalweb/query-builder/v/unstable)](https://packagist.org/packages/professionalweb/query-builder)

Project structure
-------------------
```
abstraction/         abstract classes
adapters/            implementations for different databases
interfaces/          interfaces
traits/              traits
```


Requirements
------------
 - PHP 5.4+


Installation
------------
Query builder is available through [composer](https://getcomposer.org/)

composer require professionalweb/query-builder "dev-master"

Alternatively you can add the following to the `require` section in your `composer.json` manually:

```json
"professionalweb/query-builder": "dev-master"
```
Run `composer update` afterwards.



The MIT License (MIT)
---------------------

Copyright (c) 2016 Sergey Zinchenko, [Professional web](http://web-development.pw)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.