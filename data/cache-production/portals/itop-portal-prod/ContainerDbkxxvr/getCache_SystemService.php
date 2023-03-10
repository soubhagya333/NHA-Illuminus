<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.system' shared service.

include_once $this->targetDirs[4].'/lib/psr/cache/src/CacheItemPoolInterface.php';
include_once $this->targetDirs[4].'/lib/symfony/cache/Adapter/AdapterInterface.php';
include_once $this->targetDirs[4].'/lib/psr/log/Psr/Log/LoggerAwareInterface.php';
include_once $this->targetDirs[4].'/lib/symfony/cache/ResettableInterface.php';
include_once $this->targetDirs[4].'/lib/psr/log/Psr/Log/LoggerAwareTrait.php';
include_once $this->targetDirs[4].'/lib/symfony/cache/Traits/AbstractTrait.php';
include_once $this->targetDirs[4].'/lib/symfony/cache/Adapter/AbstractAdapter.php';

return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('mlMBuN4uRR', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['logger']) ? $this->services['logger'] : ($this->services['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())) && false ?: '_'});
