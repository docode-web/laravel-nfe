<?php
namespace Docode\LaravelNfe\Lib;

/**
 * Classe auxiliadora para Nota Fiscal
 */
class NfeTools
{
    /**
     * Gerar dígito verificador da chave de acesso do XML
     * 
     * @param  String @chave43 Chave de Acesso
     * @return String Dígito verificador da chave de acesso
     */
    private function getVerificationDigit($chave43)
    {
        $multipliers = array(2, 3, 4, 5, 6, 7, 8, 9);
        $i = 42;
        while ($i >= 0) {
            for ($m = 0; $m < count($multipliers) && $i >= 0; $m++) {
                $pounderSum+= $chave43[$i] * $multipliers[$m];
                $i--;
            }
        }
        $resto = $pounderSum % 11;
        if ($resto == '0' || $resto == '1') {
            $cDV = 0;
        } else {
            $cDV = 11 - $resto;
        }
        return $cDV;
    }

    /**
     * Criar chave de acesso para Nota Fiscal
     * 
     * @param  String cUF       Código da UF do emitente do Documento Fiscal   2
     * @param  String AAMM      Ano e Mês de emissão do CT-e 4
     * @param  String CNPJ      CNPJ do emitente 14
     * @param  String mod       Modelo do Documento Fiscal 2
     * @param  String serie     Série do Documento Fiscal 3
     * @param  String nCT       Número do Documento Fiscal 9
     * @param  String tpEmis    Forma de emissão do CT-e 1
     * @param  String cCT       Código Numérico que compõe a Chave de Acesso 8
     * @return String cDV       Dígito Verificador da Chave de Acesso 1
     */
    public function createAccessKey($cUF, $AAMM, $CNPJ, $mod,
                                    $serie, $nCT, $tpEmis, $cCT)
    {
        // 02 - cUF  - código da UF do emitente do Documento Fiscal
        $chave = sprintf("%02d", $cUF);

        // 04 - AAMM - Ano e Mes de emissão da NF-e
        $chave.= sprintf("%04s", $AAMM);

        // 14 - CNPJ - CNPJ do emitente
        $chave.= sprintf("%014s", $CNPJ);

        // 02 - mod  - Modelo do Documento Fiscal
        $chave.= sprintf("%02d", $mod);

        // 03 - serie - Série do Documento Fiscal
        $chave.= sprintf("%03d", $serie);

        // 09 - nCT  - Número do Documento Fiscal
        $chave.= sprintf("%09d", $nCT);

        // 01 - tpEmis  - Tipo emissão 
        $chave.= sprintf("%01d", $tpEmis);

        // 08 - cCT  - Código Numérico que compõe a Chave de Acesso // diminui 1 digito na versão 2.0
        $chave.= sprintf("%08d", $cCT);

        // 01 - cDV  - Dígito Verificador da Chave de Acesso
        $chave.= $this->getVerificationDigit($chave);

        return $chave;
    }
}