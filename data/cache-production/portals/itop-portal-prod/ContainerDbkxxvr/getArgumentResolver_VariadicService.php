<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.variadic' shared service.

include_once $this->targetDirs[4].'/lib/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[4].'/lib/symfony/http-kernel/Controller/ArgumentResolver/VariadicValueResolver.php';

return $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
