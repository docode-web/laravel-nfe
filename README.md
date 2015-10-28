[![Build Status](https://travis-ci.org/docode-web/laravel-nfe.svg)](https://travis-ci.org/docode-web/laravel-nfe)

[![GitHub forks](https://img.shields.io/github/forks/badges/shields.svg?style=social&label=Fork)](https://github.com/docode-web/laravel-nfe/network)
[![GitHub stars](https://img.shields.io/github/stars/badges/shields.svg?style=social&label=Star)](https://github.com/docode-web/laravel-nfe/stargazers)
[![GitHub watchers](https://img.shields.io/github/watchers/badges/shields.svg?style=social&label=Watch)](https://github.com/docode-web/laravel-nfe/watchers)

## Emita Nota Fiscal Eletrônica com Laravel e Nfe-Php
Pacote para Laravel, utilizando a API do Nfe-PHP para emissão de Nota Fiscal Eletrônica.

#### Instalação
insira em seu composer.json
```
"repositories" : [
        {
            "type": "git",
            "url": "https://github.com/docode-web/laravel-nfe.git"
        }
    ],
    "require": {
        "docode/laravel-nfe": "dev-master"
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

###### Pacote em desenvolvimento, caso haja interesse em participar, faça o fork e mande suas PR