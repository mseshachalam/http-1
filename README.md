# Orno\Http

[![Latest Version](https://img.shields.io/github/release/orno/http.svg?style=flat)](https://github.com/orno/http/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/orno/http/master.svg?style=flat)](https://travis-ci.org/orno/http)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/orno/http.svg?style=flat)](https://scrutinizer-ci.com/g/orno/http/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/orno/http.svg?style=flat)](https://scrutinizer-ci.com/g/orno/http)
[![Total Downloads](https://img.shields.io/packagist/dt/orno/http.svg?style=flat)](https://packagist.org/packages/orno/http)

This package is simply a wrapper for the [Symfony\HttpFoundation](http://symfony.com/doc/current/components/http_foundation/introduction.html) component with a little encapsulation of properties added and some pre-built response objects and convenience 4xx HTTP exceptions.

It is recommended you check out the documentation [here](http://symfony.com/doc/current/components/http_foundation/introduction.html) and for information on using the pre-built responses and HTTP exceptions, consider looking at [Orno\Route](https://github.com/orno/route).

## Encapsulation

This package provides encapsulated methods for all `Request` and `Response` based objects. These are as follows.

### Request

| Method    | Arguments         | Description                                                                                                                                                                                                                                                                 |
| --------- | ----------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `query`   | `$key` `$default` | Provides access to the `ParameterBag` containing data from the `$_GET` global. Calling without a `$key` will return the object, with a `$key` will return the value of that key. Providing a `$default` value will return that value if the key is not present.             |
| `post`    | `$key` `$default` | Provides access to the `ParameterBag` containing data from the `$_POST` global. Calling without a `$key` will return the object, with a `$key` will return the value of that key. Providing a `$default` value will return that value if the key is not present.            |
| `server`  | `$key` `$default` | Provides access to the `ParameterBag` containing data from the `$_SERVER` global. Calling without a `$key` will return the object, with a `$key` will return the value of that key. Providing a `$default` value will return that value if the key is not present.          |
| `files`   | `$key` `$default` | Provides access to the `ParameterBag` containing data from the `$_FILES` global. Calling without a `$key` will return the object, with a `$key` will return the value of that key. Providing a `$default` value will return that value if the key is not present.           |
| `cookie`  | `$key` `$default` | Provides access to the `ParameterBag` containing data from the `$_COOKIE` global. Calling without a `$key` will return the object, with a `$key` will return the value of that key. Providing a `$default` value will return that value if the key is not present.          |
| `headers` | `$key` `$default` | Provides access to the `HeaderBag` containing headers taken from the `$_SERVER` global. Calling without a `$key` will return the object, with a `$key` will return the value of that key. Providing a `$default` value will return that value if the key is not present.    |

### Response

| Method    | Arguments         | Description                                                                                                                                                                                                                                                                      |
| --------- | ----------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `cookie`  | `$key` `$default` | Provides access to the data from the `$_COOKIE` global. Calling without a `$key` will return an array of all cookies, with a `$key` will return the value of that key. Providing a `$default` value will return that value if the key is not present.                            |
| `headers` | `$key` `$default` | Provides access to the `ResponseHeaderBag` containing headers taken from the `$_SERVER` global. Calling without a `$key` will return the object, with a `$key` will return the value of that key. Providing a `$default` value will return that value if the key is not present. |
