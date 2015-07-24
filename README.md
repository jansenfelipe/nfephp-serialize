# NFePHP Serialize 3.10
[![Travis](https://travis-ci.org/jansenfelipe/nfephp-serialize.svg?branch=3.10)](https://travis-ci.org/jansenfelipe/nfephp-serialize)
[![Latest Stable Version](https://poser.pugx.org/jansenfelipe/nfephp-serialize/v/stable.svg)](https://packagist.org/packages/jansenfelipe/nfephp-serialize) 
[![Total Downloads](https://poser.pugx.org/jansenfelipe/nfephp-serialize/downloads.svg)](https://packagist.org/packages/jansenfelipe/nfephp-serialize) 
[![Latest Unstable Version](https://poser.pugx.org/jansenfelipe/nfephp-serialize/v/unstable.svg)](https://packagist.org/packages/jansenfelipe/nfephp-serialize)
[![MIT license](https://poser.pugx.org/jansenfelipe/nfephp-serialize/license.svg)](http://opensource.org/licenses/MIT)

Transforme NFe(xml) em objetos PHP e vice-versa

Compatível com a NFe 3.10 e 2.00 - Pacote de Liberação No. 8f (09/10/2014)

Documentação: [http://jansenfelipe.github.io/nfephp-serialize](http://jansenfelipe.github.io/nfephp-serialize/)

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
$nfeProc = NFePHPSerialize::xmlToObject(file_get_contents('nfe.xml'));
```

##### Exemplos

```php
//Capturando CNPJ do emitente
$cnpjEmitente = $nfeProc->getNFe()->getInfNFe()->getEmit()->getCNPJ();

//Capturando endereço do destinatário
$endereco = $nfeProc->getNFe()->getInfNFe()->getDest()->getEnderDest();
```

### Deserialize

Chame o método `objectToXml` passando o objeto `NfeProc` para transformá-la em uma string xml

```php
$xml = NFePHPSerialize::objectToXml(new NfeProc());
```

### Gostou? Conheça também

* [CnpjGratis](https://github.com/jansenfelipe/cnpj-gratis)
* [CpfGratis](https://github.com/jansenfelipe/cpf-gratis)
* [CepGratis](https://github.com/jansenfelipe/cep-gratis)

### License

The MIT License (MIT)
