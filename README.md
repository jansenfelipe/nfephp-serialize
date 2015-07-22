# NFePHP Serialize
[![Travis](https://travis-ci.org/jansenfelipe/nfephp-serialize.svg?branch=master)](https://travis-ci.org/jansenfelipe/nfephp-serialize)
[![Latest Stable Version](https://poser.pugx.org/jansenfelipe/nfephp-serialize/v/stable.svg)](https://packagist.org/packages/jansenfelipe/nfephp-serialize) 
[![Total Downloads](https://poser.pugx.org/jansenfelipe/nfephp-serialize/downloads.svg)](https://packagist.org/packages/jansenfelipe/nfephp-serialize) 
[![Latest Unstable Version](https://poser.pugx.org/jansenfelipe/nfephp-serialize/v/unstable.svg)](https://packagist.org/packages/jansenfelipe/nfephp-serialize)
[![MIT license](https://poser.pugx.org/jansenfelipe/nfephp-serialize/license.svg)](http://opensource.org/licenses/MIT)

Transforme NFe(xml) em objetos PHP e vice-versa

### Como utilizar

Adicione a library

```sh
$ composer require jansenfelipe/nfephp-serialize
```

Adicione o autoload.php do composer no seu arquivo PHP.

```php
require_once 'vendor/autoload.php';  
```

### Serialize

Chame o método `xmlToObject` passando a string xml para transformá-la em um objeto `NfeProc`

```php
$object = NFePHPSerialize::xmlToObject(file_get_contents('nfe.xml'));
```

### Deserialize

Chame o método `objectToXml` passando o objecto `NfeProc` para transformá-la em uma string xml

```php
$xml = NFePHPSerialize::objectToXml(new NfeProc());
```

### License

The MIT License (MIT)
