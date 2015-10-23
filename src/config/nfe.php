<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Configurações de Nota Fiscal Eletrônica
    |--------------------------------------------------------------------------
    |
    | Chave => Valor
    |
    */
    'atualizacao'       => date('Y-m-d h:i:s'),
    'tpAmb'             => '2',
    'pathXmlUrlFileNFe' => 'nfe_ws3_mod55.xml',
    'pathXmlUrlFileCTe' => 'cte_ws2.xml',
    'pathXmlUrlFileMDFe'=> 'mdfe_ws1.xml',
    'pathXmlUrlFileCLe' => '',
    'pathXmlUrlFileNFSe'=> '',
    'pathNFeFiles'      => '/var/www/nfe',
    'pathCTeFiles'      => '/var/www/cte',
    'pathMDFeFiles'     => '/var/www/mdfe',
    'pathCLeFiles'      => '/var/www/cle',
    'pathNFSeFiles'     => '/var/www/nfse',
    'pathCertsFiles'    => storage_path('certs'),
    'siteUrl'           => 'http://localhost',
    'schemesNFe'        => 'PL_008f',
    'schemesCTe'        => 'PL_CTe_200',
    'schemesMDFe'       => 'PL_MDFe_100',
    'schemesCLe'        => '',
    'schemesNFSe'       => '',
    'razaosocial'       => 'Sua Empresa Ltda',
    'siglaUF'           => 'SP',
    'cnpj'              => '9999999999999',
    'tokenIBPT'         => '',
    'tokenNFCe'         => '',
    'tokenNFCeId'       => '',
    'certPfxName'       => 'certificado.pfx',
    'certPassword'      => 'senha',
    'certPhrase'        => '',
    'aDocFormat' => [
        'format'            => 'P',
        'paper'             => 'A4',
        'southpaw'          => true,
        'pathLogoFile'      => public_path('images/logo.jpg'),
        'logoPosition'      => 'L',
        'font'              => 'Times',
        'printer'           => ''
    ],
    'aMailConf' => [
        'mailAuth'          => true,
        'mailFrom'          => 'nfe@suaempresa.com.br',
        'mailSmtp'          => 'smtp.suaempresa.com.br',
        'mailUser'          => 'nfe@suaempresa.com.br',
        'mailPass'          => 'senha',
        'mailProtocol'      => '',
        'mailPort'          => '587',
        'mailFromMail'      => 'nfe@suaempresa.com.br',
        'mailFromName'      => 'NFe',
        'mailReplayToMail'  => 'nfe@suaempresa.com.br',
        'mailReplayToName'  => 'NFe',
        'mailImapHost'      => 'imap.suaempresa.com.br',
        'mailImapPort'      => '143',
        'mailImapSecurity'  => 'tls',
        'mailImapNocerts'   => 'novalidate-cert',
        'mailImapBox'       => 'INBOX'
    ],
    'aProxyConf' => [
        'proxyIp'           => '',
        'proxyPort'         => '',
        'proxyUser'         => '',
        'proxyPass'         => ''
    ]
];