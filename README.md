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