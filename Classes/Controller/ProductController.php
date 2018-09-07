<?php

namespace MyVendor\Sandbox\Controller;

use MyVendor\Sandbox\Domain\Repository\ProductRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class ProductController
 * 
 * @package MyVendor\Sandbox\Controller
 */
class ProductController extends ActionController
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * Inject the product repository
     * 
     * @param \MyVendor\Sandbox\Domain\Repository\ProductRepository $productRepository
     */
    public function injectProductRepository(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * List Action
     * 
     * @return void
     */
    public function listAction()
    {
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
    }
}