<?php
namespace src\structural\proxy\cacheRepository;

class Client
{

    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepositoryInterface)
    {
        $this->productRepository = $productRepositoryInterface;
    }
}
