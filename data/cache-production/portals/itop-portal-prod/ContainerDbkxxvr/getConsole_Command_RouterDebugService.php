<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.router_debug' shared service.

include_once $this->targetDirs[4].'/lib/symfony/console/Command/Command.php';
include_once $this->targetDirs[4].'/lib/symfony/framework-bundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[4].'/lib/symfony/framework-bundle/Command/RouterDebugCommand.php';

$this->services['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(${($_ = isset($this->services['url_generator']) ? $this->services['url_generator'] : $this->getUrlGeneratorService()) && false ?: '_'});

$instance->setName('debug:router');

return $instance;
