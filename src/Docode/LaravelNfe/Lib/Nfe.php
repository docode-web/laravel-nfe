<?php
namespace Docode\LaravelNfe\Lib;

use NFePHP\NFe\MakeNFe;

/**
 * Classe geradora de Nota Fiscal
 */
class Nfe
{
    private $nfe;

    public function __construct(MakeNFe $nfe)
    {
        $this->nfe = $nfe;
    }
}