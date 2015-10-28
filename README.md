[![Build Status](https://travis-ci.org/docode-web/laravel-nfe.svg)](https://travis-ci.org/docode-web/laravel-nfe)

[![Latest Stable Version](https://poser.pugx.org/docode-web/laravel-nfe/v/stable)](https://packagist.org/packages/docode-web/laravel-nfe)
[![Total Downloads](https://poser.pugx.org/docode-web/laravel-nfe/downloads)](https://packagist.org/packages/docode-web/laravel-nfe)
[![Latest Unstable Version](https://poser.pugx.org/docode-web/laravel-nfe/v/unstable)](https://packagist.org/packages/docode-web/laravel-nfe)
[![License](https://poser.pugx.org/docode-web/laravel-nfe/license)](https://packagist.org/packages/docode-web/laravel-nfe)

## Emita Nota Fiscal Eletrônica com Laravel e Nfe-Php
Pacote para Laravel, utilizando a API do Nfe-PHP para emissão de Nota Fiscal Eletrônica.

#### Instalação
insira em seu composer.json
```
    "require": {
        "docode-web/laravel-nfe": "dev-master"
    }
]
```

abra seu arquivo `config/app.php` e insira nos providers e aliases(opcional)
```
'providers' => [
    // outros providers
    Docode\LaravelNfe\Provider\NfeServiceProvider::class
],
'aliases' => [
    // outros facades
    'Nfe'       => Docode\LaravelNfe\Facade\Nfe::class
]
```

abra seu terminal e rode o comando:
```
php artisan vendor:publish
```
irá criar um arquivo de configuração `config/nfe.php`

>###### Pacote em desenvolvimento, caso haja interesse em participar, faça o fork e mande suas PR