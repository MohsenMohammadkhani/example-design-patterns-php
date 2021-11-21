<?php
namespace src\structural\proxy\cacheRepository;

use Illuminate\Cache\Repository;

class CachedProductRepository implements ProductRepositoryInterface
{

    private $cache;
    private $eloquentProductRepository;

    public function __construct(Repository $cache, $eloquentProductRepository)
    {
        $this->cache = $cache;
        $this->eloquentProductRepository = $eloquentProductRepository;
    }

    public function all()
    {
        $result = $this->cache->get('product.all');
        if (is_null($result)) {
            $result = $this->eloquentProductRepository->all();
            $this->cache->set('product.all', $result);
        }
        return $result;
    }
}
