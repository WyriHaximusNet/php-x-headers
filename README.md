# X-* headers emitted by WyriHaximus.net and other related services

![Continuous Integration](https://github.com/wyrihaximusnet/php-x-headers/workflows/Continuous%20Integration/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/wyrihaximus-net/x-headers/v/stable.png)](https://packagist.org/packages/wyrihaximus-net/x-headers)
[![Total Downloads](https://poser.pugx.org/wyrihaximus-net/x-headers/downloads.png)](https://packagist.org/packages/wyrihaximus-net/x-headers/stats)
[![Type Coverage](https://shepherd.dev/github/wyrihaximusnet/php-x-headers/coverage.svg)](https://shepherd.dev/github/wyrihaximusnet/php-x-headers)
[![License](https://poser.pugx.org/wyrihaximus-net/x-headers/license.png)](https://packagist.org/packages/wyrihaximus-net/x-headers)

### Installation ###

To install via [Composer](http://getcomposer.org/), use the command below, it will automatically detect the latest version and bind it with `^`.

```
composer require wyrihaximus-net/x-headers
```

## Usage ##

The following echo's a random header from the set:

```php
$headers = Headers::HEADERS;
echo $headers[random_int(0, (count($headers) - 1))];
```

Alternatively you can get a list of randomly selected headers:

```php
var_export(Headers::random(6));
```

## Contributing ##

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License ##

Copyright 2021 [WyriHaximus.net](https://wyrihaximus.net/)

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
