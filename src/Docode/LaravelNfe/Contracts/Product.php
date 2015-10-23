<?php
namespace Docode\LaravelNfe\Contracts;

interface Product {

    /**
     * Número do item
     */
    public function getnItem();

    /**
     * Código do produto
     */
    public function getcProd();

    /**
     * Preencher com o código de barras
     * GTIN-8, GTIN-12, GTIN-13 ou GTIN-14
     * (antigos códigos EAN, UPC e DUN-14)
     */
    public function getcEAN();

    /**
     * Descricao do produto
     */
    public function getxProd();

    /**
     * Código NCM
     */
    public function getNCM();

    /**
     * código EX da TIPI se houver para o NCM do produto
     */
    public function getEXTIPI();

    /**
     * Código CFOP
     * exemplo '6101'
     */
    public function getCFOP();

    /**
     * unidade de comercialização do produto
     * exemplo: ("PC", "UND", "DZ", "KG", etc.).
     */
    public function getuCom();

    /**
     * quantidade de comercialização do produto já formatado com ponto decimal.
     * A quantidade de casas decimais pode variar de 0 a 4.
     * exemplo("10", 10.50, 10.0098)
     */
    public function getqCom();

    /**
     * Valor unitário de comercialização do produto
     * exemplo("49.9200000009", 49.90)
     */
    public function getvUnCom();

    /**
     * valor total bruto do produto.
     */
    public function getvProd();

    /**
     * Unidade de tributação do produto
     * antigo código EAN ou código de barras.
     * Preencher com o código GTIN-8, GTIN-12, GTIN-13 ou GTIN-14
     * (antigos códigos EAN, UPC e DUN-14), deixar em branco
     * caso o produto não possuir este código
     */
    public function getcEANTrib();

    /**
     * Unidade de tributação do produto
     * exemplo("PC", "UND", "DZ", "KG", etc.).
     */
    public function getuTrib();

    /**
     * quantidade de tributação do produto já formatado com ponto decimal.
     * A quantidade de casas decimais pode variar de 0 a 4.
     */
    public function getqTrib();

    /**
     * valor unitário de tributação do produto já formatado com ponto decimal,
     * campo meramente informativo, o contribuinte pode utilizar a
     * precisão desejada (0-10 decimais).
     * Para efeitos de cálculo, o valor unitário será obtido pela divisão do
     * valor do produto pela quantidade tributável
     */
    public function getvUnTrib();

    /**
     * valor do Frete, o Frete deve ser rateado entre os itens de produto.
     */
    public function getvFrete();

    /**
     * valor do Seguro, o Seguro deve ser rateado entre os itens de produto.
     */
    public function getvSeg();

    /**
     * valor do desconto do item de produto
     */
    public function getvDesc();

    /**
     * valor de outras despesas acessórias do item de produto
     */
    public function getvOutro();

    /**
     * Este campo deverá ser preenchido com:
     * 0 - o valor do item (vProd) não compõe o valor total da NF-e (vProd)
     * 1 - o valor do item (vProd) compõe o valor total da NF-e.
     */
    public function getindTot();

    /**
     * número do pedido de compra, o campo é de livre uso do emissor
     */
    public function getxPed();

    /**
     * número do item do pedido de compra, o campo é de livre uso do emissor
     */
    public function getnItemPed();

    /**
     * Número de controle da FCI
     * Ficha de Conteúdo de Importação com formatação
     * exemplo B01F70AF-10BF-4B1F-848C-65FF57F616FE 
     */
    public function getnFCI();
}