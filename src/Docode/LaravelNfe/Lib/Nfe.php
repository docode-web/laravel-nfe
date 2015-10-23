<?php
namespace Docode\LaravelNfe\Lib;

use NFePHP\NFe\MakeNFe;
use Docode\LaravelNfe\Contracts\Product as ProductContract;

/**
 * Classe geradora de Nota Fiscal
 */
class Nfe
{
    private $nfe;

    private $products = [];

    public function __construct(MakeNFe $nfe)
    {
        $this->nfe = $nfe;
    }

    /**
     * Insere um produto na nota
     * @param ProductContract produto a ser inserido na nota
     */
    public function addProduct(ProductContract $product)
    {
        $this->products[] = $product;
    }

    /**
     * Insere um array de produtos na nota
     * @param array products a serem inseridos na nota
     */
    public function addProducts(array $products)
    {
        array_walk($products, [$this, 'addProduct']);
    }

    /**
     * Retorna todos os produtos inseridos na nota
     */
    public function getProducts()
    {
        return $this->products;
    }
}