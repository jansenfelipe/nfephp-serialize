# NFePHP Serialize
[![Travis](https://travis-ci.org/jansenfelipe/nfephp-serialize.svg?branch=2.0)](https://travis-ci.org/jansenfelipe/nfephp-serialize)
[![Latest Stable Version](https://poser.pugx.org/jansenfelipe/nfephp-serialize/v/stable.svg)](https://packagist.org/packages/jansenfelipe/nfephp-serialize) 
[![Total Downloads](https://poser.pugx.org/jansenfelipe/nfephp-serialize/downloads.svg)](https://packagist.org/packages/jansenfelipe/nfephp-serialize) 
[![Latest Unstable Version](https://poser.pugx.org/jansenfelipe/nfephp-serialize/v/unstable.svg)](https://packagist.org/packages/jansenfelipe/nfephp-serialize)
[![MIT license](https://img.shields.io/dub/l/vibe-d.svg)](http://opensource.org/licenses/MIT)

Transforme NFe(xml) em objetos PHP

### Como utilizar

Adicione a library

```sh
$ composer require jansenfelipe/cnpj-gratis
```

Adicione o autoload.php do composer no seu arquivo PHP.

```php
require_once 'vendor/autoload.php';  
```

Chame o método `xml2Object` para transformar uma NFe XML em um Objeto

```php
$object = NFePHPSerialize::xml2Object(file_get_contents('nfe.xml'));
```

### License

The MIT License (MIT)
